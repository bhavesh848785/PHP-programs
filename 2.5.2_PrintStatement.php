<!DOCTYPE html>
<html>
<head>
	<title>Print Statement</title>
</head>
<body>
	<?php
		print "Hello World";

		//printing a variable 
		$name="Dhara ";
		print "<br> My name is $name"; //or 
		print ("<br> My name is $name");

		$name = "Dhara";
		$profile = "Lecturer";
		$age = 28;
		
		print "I am ",$name , $profile , $age, " years old";

		/*above line will give Parse error: syntax error, unexpected ',' means we can't pass multiple values separated by comma in  print but we can concate using(.)operator to print the output as a single argument*/
		print "<br>I am ".$name . $profile . $age ." years old";
		
		
		$surname = " Wagh";
		$ret =  print $surname;
		print "<br>".$ret;// this will print 1 because its return "true"

		//printing escaping characters
		print "<br>Hello escape \"sequence\" characters by PHP print"; 
	?>

</body>
</html>