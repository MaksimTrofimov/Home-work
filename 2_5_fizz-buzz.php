<?php
/*Задача fizz-buzz:

У вас есть три числа, они вводятся из консоли (использовать функцию fopen). Первое число называется fizz, второе называется buzz. До третьего необходимо досчитать от единицы. Считая, надо выводить число. Если число кратно fizz - надо выводить F вместо числа. Если число кратно buzz - надо выводить B вместо числа. Если число кратно и fizz и buzz, надо выводить FB. И так - пока не будет достигнуто третье введенное число.

Пример условия и результата:
Введены числа 2, 5, 18
Вывод должен быть таким:
1 F 3 F B F 7 F 9 FB 11 F 13 F B F 17 F
*/
echo "Please enter the first number \"fizz\":";
$handle = fopen("php://stdin","r");
$fizz = fgets($handle);

echo "Please enter the second number \"buzz\":";
$buzz = fgets($handle);

echo "Please enter a third number \"number\":";
$number = fgets($handle);

$i = 0;

while ( ++$i <= $number) {
	
	if ($i % $fizz == 0 && $i % $buzz == 0) {
		echo "\033[35m FB \033[0m";
	} elseif ($i % $fizz == 0 ) {
		echo "\033[31m F \033[0m";

	} elseif ($i % $buzz == 0) {
		echo "\033[33m B \033[0m";

	} else echo $i;	
}