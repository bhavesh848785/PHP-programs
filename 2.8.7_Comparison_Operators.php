<!DOCTYPE html>
<html>
<head>
	<title>Comparison Operators in PHP</title>
</head>
<body>
	<?php
		$x = 100;  
		$y = "100";

		var_dump($x == $y); // returns true because values are equal
		var_dump($x === $y); // returns false because types are not equal
		var_dump($x != $y); // returns false because values are equal
		var_dump($x <> $y); // returns false because values are equal
		var_dump($x !== $y); // returns true because types are not equal
		var_dump($x > $y); // returns true because $x is greater than $y
		var_dump($x < $y); // returns true because $x is less than $y
		var_dump($x >= $y);//returns true because $x is greater than or equal to $y
		var_dump($x <= $y); // returns true because $x is less than or equal to $y

/*Spaceship	  $x <=> $y
Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.*/
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y


		?> 

</body>
</html>