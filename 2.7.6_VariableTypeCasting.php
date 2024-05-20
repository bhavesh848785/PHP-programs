<!DOCTYPE html>
<html>
<head>
	<title>Variable type casting</title>
	<!-- Convert from one type to another type -->
</head>
<body>
	<?php
		 $count = 5;

		// $count is a string; Output: "5"
		 $count = (string)$count;
		 echo $count."<br>";


		// $count is a float; Output: 5
		echo $count = (float) $count;
		echo "<br>";


		// $count is a bool; Output: true 1
		echo $count = (boolean) $count;
		echo "<br>";

		// $count is a double; Output: 1
		echo $count = (double) $count;
	?>

</body>
</html>