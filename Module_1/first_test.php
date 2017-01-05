<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum($arr) {
        
        foreach ($arr as  $value) {
            
            $res += $value;
           
        } return $res;
        
        }
    



    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
           
        $arr = explode(" ", $shortMe);
   
            foreach ($arr as $value) {
            
                $str=strlen($value);
        
                    if ($str > 6) {
                        $rest = substr($value, 0,6)."*";
                        $res = $rest;      
                    }  else  $res = $value;

                    $arr2[]=$res; 
            }        
            $string=implode(" ", $arr2);
            return $string;
    }

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
       
        $numb=0;

             
        foreach ($arr as  $value) {
         
            $str=strlen($value); //длина строки  

            $arr2=str_split($value); //преобразует строку в массив
        
                if ($arr2[0] == array_pop($arr2) && $str >= 2){ 

                    $numb=$numb+1; 
                }
            
       
        } return $numb;
    }        

    



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string ($str) {
                
        $arr=str_split($str); //преобразует строку в массив   
        
        $arrNum = count($arr); //Подсчитывает количество элементов массива
       
        //меняет местами элементы массива      
            for($i = $arrNum; $i >= 0; $i--) {
                
                $newArr[] = $arr[$i];

                $s = implode ("", $newArr ); //Объединяет элементы массива в строку
           
       
        
            } return ($s);
        

    }
       
test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();








