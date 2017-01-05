<?
/*You are required to create a simple calculator that returns the result of addition ,subtraction , multiplication and
division of two numbers . example

calculator(1, 2, "+"); // 3
if the variables are not numbers or the sign does not belong to the list above a message "unknown value" must be returned.

example

calculator(1, 2, "&"); // "unknown value"
calculator(1, "k", "*"); // "unknown value"*/

 echo calculator(2, 2, "*");
function calculator($a, $b, $sign) {
if  ( is_numeric($b) && is_int($a) || is_float($a) && is_int($b) || is_float($b) && (!empty($a) && !empty($b))  && ($sign == "+" || $sign == "-" || $sign == "*" || $sign == "/" )) {

switch ($sign) {
	case "+": return $a=$a+$b;
			break;
	case "-": return $a-$b;
			break;
	case "*": return $a*$b;
			break;
	case "/": return $a/$b;
			break;
	
	default:
		return "unknown value";
		break;
}

} else return "unknown value";
}
