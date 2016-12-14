
<?php 
echo "Введите чило\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input % 2) ? "Нечетное" : "Четное";