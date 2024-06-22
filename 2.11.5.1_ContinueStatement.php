<!DOCTYPE html>
<html>
<head>
	<title>Continue Statement</title>
</head>
<body>
<?php
   for($i = 0; $i < 5; $i ++)
   {     
     
      if($x == 2)
      {
         continue;
      }
      
      echo $i . " ";
   }

  // output 0 1  3 4 
?>

</body>
</html>