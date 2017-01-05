<?php 
/*Две переменные - два числа. 
Выводить то, которое больше.*/

$handle = fopen ("php://stdin","r");	

echo "Enter the first number: ";
$numOne = fgets($handle);

echo "Enter the second number: ";
$numTwo = fgets($handle);

echo "Enter the third number: ";
$numThree = fgets($handle);

if ($numOne > $numTwo && $numOne < $numThree || $numOne < $numTwo && $numOne > $numThree) {
	echo "Average $numOne";

} elseif ($numOne < $numTwo && $numTwo < $numThree || $numOne > $numTwo && $numTwo > $numThree) {
	echo "Average $numTwo";

} else echo "Average $numThree \n ";




