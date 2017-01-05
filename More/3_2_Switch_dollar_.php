<?php 
/*Прочитать число из консоли. Если число 
соответствует долларовой купюре 
(т.е. такая купюра существует) - вывести ссылку на 
ее картинку, если нет - извиниться.
*/
echo "Enter a dollar banknote\n(1, 2, 5, 10, 20, 50, 100, 500, 1000, 5000, 10000, 100000)"."\n:";

$handle = fopen ("php://stdin","r");	
$dollar = fgets($handle);

switch ($dollar) {
	
	case 1:
		echo 'http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-1-nominal-dollarovyih-kupyur.jpg';;
		break;

	case 2:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-2-nominal-dollarovyih-kupyur.jpg";
		break;

	case 5:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-5-nominal-dollarovyih-kupyur.jpg";
		break;

	case 10:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-10-nominal-dollarovyih-kupyur.jpg";
		break;

	case 20:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-20-nominal-dollarovyih-kupyur.jpg";
		break;

	case 50:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-50-nominal-dollarovyih-kupyur.jpg";
		break;

	case 100:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-100-nominal-dollarovyih-kupyur.jpg";
		break;

	case 500:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-500-nominal-dollarovyih-kupyur.jpg";
		break;

	case 1000:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-1000-nominal-dollarovyih-kupyur.jpg";
		break;

	case 5000:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-5000-nominal-dollarovyih-kupyur.jpg";
		break;

	case 10000:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-10000-nominal-dollarovyih-kupyur.jpg";
		break;

	case 100000:
		echo "http://www.tradingforeverybody.com/wp-content/uploads/2015/06/usd-100000-nominal-dollarovyih-kupyur.jpg";
		break;

	
	default:
		echo "Sorry no such banknote";
		break;
}




