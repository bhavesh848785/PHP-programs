<html>
   
   <head>
      <title>Logical Operators in PHP</title>
   </head>
   
   <body>
      
      <?php 
  
         $x = 50; 
         $y = 30; 
            //  T             T
         if ($x == 50 and $y == 30)
          echo "and Success <br>"; 

            //T           F=T
         if ($x == 50 or $y == 20) 
             echo "or Success <br>"; 

           //T             F  =T
         if ($x == 50 xor $y == 20) 
             echo "xor Success <br>"; 
           
           // T           T     =T
         if ($x == 50 && $y == 30) 
             echo "&& Success <br>"; 
           //T          F
         if ($x == 50 || $y == 20) 
             echo "|| Success <br>"; 
           
         if (!$x) 
             echo "! Success<br> "; 
           
         ?>  
   </body>
</html>