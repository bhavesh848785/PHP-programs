<!DOCTYPE html>
<html>
<head>
	<title>Constant using define() function</title>
</head>
<body>
	<?php
		define("MESSAGE1","Hello JavaTpoint PHP1");  
		echo MESSAGE1."<br>"; 
		//echo message1."<br>";//it will give error by default case sensitive


		define("MESSAGE2","Hello JavaTpoint PHP2",true);//not case sensitive    
		echo "Case sensitivity removed capital constant:",MESSAGE2, "</br>";    
		echo "Case sensitivity removed small letter constant:",message2,"<br>";       


		define("MESSAGE3","Hello JavaTpoint PHP3",false);//case sensitive  
		echo "Case sensitive :",MESSAGE3,"<br>";  
		//echo "it will give error ",message3,"<br>"; //it will give error 
		
	?>  
</body>
</html>