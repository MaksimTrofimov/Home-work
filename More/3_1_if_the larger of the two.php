<?php 
/*Три дробных числа. Выводить то, которое больше после округления, 
если нет большего - выводить два, если все три равны - выводить три.*/

while ( $numOne == $numTwo) {

$handle = fopen ("php://stdin","r");	

echo "Enter the first number: ";
$numOne = fgets($handle);

echo "Enter the second number: ";
$numTwo= fgets($handle);

if ($numOne > $numTwo) {
	echo "The first number is greater than the second $numOne";

} elseif ($numOne < $numTwo) {
	echo "The second $numTwo";

} else echo "The numbers are equal\n ";


}

