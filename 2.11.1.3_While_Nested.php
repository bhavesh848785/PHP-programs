<!DOCTYPE html>
<html>
<head>
	<title>Nested While Loop</title>
</head>
<body>
	<?php    
		$i=1;    
		while($i<=3)
		{    
			$j=1;    
			while($j<=3)
			{    
				echo "$i   $j<br/>";    
				$j++;    
			}    
			$i++;    
		}    
	?>    
</body>
</html>