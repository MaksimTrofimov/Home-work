<?php

print "Please enter the first number \"fizz\":";
$handle = fopen("php://stdin","r");
$fizz = fgets($handle);

print "Please enter the second number \"buzz\":";
$buzz = fgets($handle);

print "Please enter a third number \"number\":";
$number = fgets($handle);

$i=0;

while ( ++$i <= $number) {
	
	if ($i % $fizz == 0 && $i % $buzz == 0) {
		print "\033[35m FB \033[0m";
	} elseif ($i % $fizz == 0 ) {
		print "\033[31m F \033[0m";
	} elseif ($i % $buzz ==0) {
		print "\033[33m B \033[0m";
	} else print $i;	
}