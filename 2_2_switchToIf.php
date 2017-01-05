<?php
/*Переписать скрипт оператора switch->case->break
 так, чтобы использовалась конструкция 
 if->elseif->else http://phplessons.byethost8.com/php2.html?i=1*/
echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

if ($mark == 2) {
    echo "I am better!!";
} elseif ($mark == 3) {
    echo "OK :(";
} elseif ($mark == 4) {
    echo "I am good :)";
} else echo "YeeeeWhaaaa!!!!";
       


