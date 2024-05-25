<!DOCTYPE html>
<html>
<head>
	<title>String Operators in PHP</title>
</head>
<body>
	<?php
		//concatenation
		$txt1 = "Hello";
		$txt2 = " world!";
		echo $txt1 . $txt2;

		//Concatenation and assignment
		$txt1 = "Hello";
		$txt2 = " world!";
		$txt1 .= $txt2;
		echo "<br>".$txt1;
	?>
</body>
</html>