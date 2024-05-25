<!DOCTYPE html>
<html>
<head>
	<title>Increment and Decrement Operators in PHP</title>
</head>
<body>
	<?php
	$a=10;
	$c = $a++; 
        echo "Post Increment Operation Result: $c <br/>";//c=10 ,a=11
         
        
        $c = $a--; 
        echo "Post Decrement Operation Result: $c <br/>";//c=11,a=10

  
        $c = ++$a; 
        echo "Pre Increment Operation Result: $c <br/>";//c=11,a=11
         

        $c = --$a; 
        echo "Pre Decrement Operation Result: $c <br/>";//c=10,a=10
	?>


</body>
</html>