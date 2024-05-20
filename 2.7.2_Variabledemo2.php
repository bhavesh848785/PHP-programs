
<!DOCTYPE html>
<html>
<head>
	<title>PHP variable Demo with gettype function
		   <!--Syntax: String gettype($variablename) -->

	</title>
</head>
<body>
		<?php
			$a=34;
			echo $a."<br>";
			echo "Datatype of variable a is :".gettype($a)."<br>";


			$b="hello world";
			echo $b."<br>";
			echo "Datatype of variable b is :".gettype($b);
			echo "<br>";

			$c='c';
			echo $c."<br>";
			echo "Datatype of variable c is :";
			echo gettype($c);
			echo "<br>";

			$d=45.89;
			echo $d."<br>";
			echo "Datatype of variable d is :".gettype($d)."<br>";

			$e=NULL;
			echo $e."<br>";
			echo "Datatype of variable e is :".gettype($e)."<br>";

			$f=true;
			echo $f."<br>";
			echo "Datatype of variable f is :".gettype($f)."<br>";


?>
</body>
</html>
