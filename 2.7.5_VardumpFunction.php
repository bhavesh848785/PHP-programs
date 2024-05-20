<!DOCTYPE html>
<html>
<head>
	<title>Var_dump Function</title>
	<!-- var_dump($var1[,$var2,..$varn]) -->
	<!-- It will return type n value  -->
</head>
<body>
	<?php
		$a = 32;
		echo var_dump($a);
		echo "<br>";// int(32)

		$b = "Hello world!";
		echo var_dump($b) . "<br>";// string(12)"Hello World!"

		$c = 32.5;
		echo var_dump($c) . "<br>";// double(32.5)

		$d='d';
		echo var_dump($d)."<br>"; //string(1)'d'

		$e=NULL;
		echo var_dump($e)."<br>"; //NULL

		$f=true;
		echo var_dump($f)."<br>";//bool(true)



		// Dump three variables
		echo var_dump($a,$b,$c) . "<br>";
		echo "<br>";
		echo var_dump($e,$f);
		?>
</body>
</html>
