<!DOCTYPE html>
<html>
<head>
	<title>Nested if statement</title>
</head>
<body>
	<?php  
    $age = 19;  
    $nationality = "American";  
    //applying conditions for voting in india on nationality and age  
    if ($nationality == "Indian")  
    {  
        if ($age >= 18) 
        {  
            echo "Eligible to give vote";  
        }  
        else 
        {    
            echo "Not eligible to give vote";  
        }  
    }
    else
    {
        echo "<br>Nationality should be Indian ..Sorry!You can't vote";
    }  
?>  
</body>
</html>