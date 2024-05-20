<!DOCTYPE html>
<html>
<head>
	<title>Difference between $var and $$var Example-2</title>
</head>
<body>
	<?php  
		$name="Cat"; 
		${$name}="Dog";  
	  //${Cat}="Dog";		
		${${$name}}="Monkey";  
	  //$Dog="Monkey"
		echo $name. "<br>";  //Cat
		echo ${$name}. "<br>";  //Dog
		echo $Cat. "<br>";  //Dog
		echo ${${$name}}. "<br>"; // Monkey
		echo $Dog. "<br>";  //Monkey
	?>  

</body>
</html>
