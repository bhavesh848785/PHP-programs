<!DOCTYPE html>
<html>
<head>
    <title>switch statement is fall-through-without break statement</title>
</head>
<body>

<?php      
    $ch = 'c';  
    switch ($ch)  
    {     
        case 'a':   
            echo "Choice a";
            break;
              
        case 'b':   
            echo "Choice b";  
            break;  
        case 'c':   
            echo "Choice c";      
            echo "</br>";  
        case 'd':   
            echo "Choice d";  
            echo "</br>";  
        default:   
            echo "case a, b, c, and d is not found";  
    }  
?>
</body>
</html>