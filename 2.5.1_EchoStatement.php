<!DOCTYPE html>
<html>
<head>
	<title>Echo statement </title>
</head>
<body>
	<?php

		echo "Hello world<br>";

		//printing variable value
		$name="Dhara";
		echo " My name is : $name <br>"; //or  
		echo ($name);
		echo("<br>");

		$name = "Dhara";
		$profile = "Lecturer";
		$age = 28;
		echo "<br>I am ",$name , $profile , $age, " years old ";

		
		/*$surname = "Wagh";
		$ret =  echo $surname;
		echo $ret;
		
		/*Above statement will give Parse error: syntax error, unexpected 'echo' (T_ECHO)
		*/

		//printing escaping characters
		echo "<br>Hello escape \"sequence\" characters";  

	?>

</body>
</html>