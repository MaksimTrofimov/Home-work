<?php

/*решить fizz-buzz задачу с помощью функций и чтения из файла*/
$fp = file("text2.txt");  
for ($i=0; $i<=1; ++$i) {
	
if ($i==0) {
	$fizz = $fp[0][0]; 
	$buzz = $fp[0][2];
	$number = $fp[0][4].$fp[0][5];
} else {
	$fizz = $fp[1][0]; 
	$buzz = $fp[1][2];
	$number = $fp[1][4].$fp[1][5]; 

}

fizzBuzz($fizz, $buzz, $number);
echo "\n";
}

function fizzBuzz($fizz, $buzz, $number ) {
$i=0;
while ( ++$i <= $number) { 
	
	if ($i % $fizz == 0 && $i % $buzz == 0) {
		echo "\033[35m FB \033[0m";
	} elseif ($i % $fizz == 0 ) {
		echo "\033[31m F \033[0m";

	} elseif ($i % $buzz == 0) {
		echo "\033[33m B \033[0m";

	} else echo " $i ";	
}     
} 
