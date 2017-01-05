<?php 
/*В переменной имя. В зависимости от того, 
какое там имя из четырех заранее известных,
 написать, мальчик это или девочка. 
 Если имя общее - написать, что унисекс. 
 Если имя не перечисленно: по умолчанию мальчик. */

echo "Choose a name:\n 1 - Maksim\n 2 - Alexander\n 3 - Sergei\n 4 - Karina\n";

$handle = fopen ("php://stdin","r");	
$gender = fgets($handle);

switch ($gender) {
	
	case 1:
		echo "Gender: boy";
		break;

	case 2:
		echo "Gender: unisex";
		break;

	case 3:
		echo "Gender: boy";
		break;

	case 4:
		echo "Gender: girl";
		break;
	
	default:
		echo "Gender: boy";
		break;
}




