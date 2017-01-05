<?php 
/*Три переменные - три числа. 
Выводить то, которое среднее.*/

$handle = fopen ("php://stdin","r");	

echo "Enter the first number: ";
$numOne = fgets($handle);

echo "Enter the second number: ";
$numTwo = fgets($handle);

echo "Enter the third number: ";
$numThree = fgets($handle);

$numOne = round($numOne);
$numTwo = round($numTwo);
$numThree = round ($numThree);

if ($numOne == $numTwo && $numTwo == $numThree) {
	echo "All the numbers are equal";

} elseif ($numOne == $numTwo) {
	echo "The number one and two are equal $numOne";

} elseif ($numOne == $numThree) {
	echo "The number one and three equal $numOne";

} elseif ($numTwo == $numThree) {
	echo "The number two and three equal $numTwo";

} else if ($numOne > $numTwo && $numOne > $numThree) {
	echo "A larger number of $numOne";

} elseif ($numOne < $numTwo && $numTwo > $numThree) {
	echo "A larger number of $numTwo";

} elseif ($numOne < $numThree && $numTwo < $numThree) {
	echo "A larger number of $numThree";

} 



