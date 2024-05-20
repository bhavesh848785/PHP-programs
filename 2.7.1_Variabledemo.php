<!DOCTYPE html>
<html>
<head>
	<title> PHP Variables</title>
</head>
<body>
	<?php
			//$variablename; declartion
			//$variablename = variablevalue;  initialization

		 //= equal to is used as assignment operator
		// PHP is loosely type language
		//PHP variables are case sensitive
		// Dhara dhara DHARA  three variables are treated differently
		$A;
		$A="23";
		echo $A;
		echo "<br>";
		// php variables are case sensitive 

		$a=10;
		echo $a;
		echo "<br>";

		$a='d';
		echo $a."<br>";// . operator is used as concatination operator

		$a=NULL;
		echo $a."<br>";

		$a=true;
		echo $a."<br>";// it will output 1

		$a="Dhara Wagh";
		echo "<b>$a</b><br>";

		$a=34.8;
		echo $a."<br>";

	?>
</body>
</html>

