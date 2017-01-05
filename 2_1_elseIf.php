<?php
//Придумать и написать любой пример использования if-elseif-else
print "Введите чило до 1000\n";

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number<10) {
	print "Вы ввели число от 1 до 10";
} elseif ($number>=10 && $number<100) { 
	print "Вы ввели число от 10 до 100";
} else print "Вы ввели число от 100 до 1000";