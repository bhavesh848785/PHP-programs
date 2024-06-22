<!DOCTYPE html>
<html>
<head>
	<title> Break statement-breaks the execution of inner loop only.</title>
</head>
<body>
		<?php    
		for($i=1;$i<=3;$i++){    
		 for($j=1;$j<=3;$j++){    
		  echo "$i   $j<br/>";    
		  if($i==2 && $j==2){    
		   break;    
		  }    
		 }    
		}    
		?>  
</body>
</html>