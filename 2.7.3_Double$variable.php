<!DOCTYPE html>
<html>
<head>
	<title>Difference between $var and $$var Example-1</title>
</head>
<body>
	<?php

			$name="Dhara"; //Normal Variable 

			$$name="Wagh";	//Reference Variable  
		//  $Dhara ="Wagh"

			echo $name."<br/>";//Dhara 

			echo $$name."<br/>";//Wagh

			echo $Dhara;//Wagh
				
	?>
</body>
</html>