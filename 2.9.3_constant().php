<!DOCTYPE html>
<html>
<head>
	<title>Print the value of constants using constant() function </title>
</head>
<body>
	<?php
		const GP="Hello const in GP"; 
		define("MSG", "GP Gandhinagar");  
		echo GP,"<br>";  		 
		echo MSG, "</br>";  
		echo constant("GP"),"<br>";  
		echo constant("MSG");
	?>

</body>
</html> 
