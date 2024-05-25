<!DOCTYPE html>
<html>
<head>
	<title>Ternary Operators in PHP</title>
    <!-- condition ? trueans1 : falseans2-->
</head>
<body>
	<?php

		#EXAMPLE-1
         $a = 10;
         $b = 20;

         /* If condition is true then assign a to result otheriwse b */
         $result = ($a > $b ) ? $a :$b;
         
         echo "Value of result is $result<br/>";//20
         
         /* If condition is true then assign a to result otheriwse b */
         $result = ($a < $b ) ? $a :$b;
         
         echo "Value of result is $result<br/>";//10

        #EXAMPLE-2

        $x = -12; 
  
		echo ($x > 0) ? 'The number is positive' : 'The number is negative'; 
      ?>

</body>
</html>