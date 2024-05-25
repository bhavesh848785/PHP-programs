<!DOCTYPE html>
<html>
<head>
    <title>Bitwise Operators</title>
</head>
<body>
    <?php 
    // PHP code to demonstrate Bitwise Operator.          
    // Bitwise AND 
        $First = 5; // 0101 or     0101 and   0101 xor  0not1
        $second = 3; //0011        0011       0011      1not0 
                    // 0111  7     0001   1   0110  6
        $answer = $First & $second; 
          
        print("Bitwise & of 5 and 3 is $answer"); //1
          
        print("<br>"); 
          
        // Bitwise OR 
        $answer = $First | $second; 
        print("Bitwise | of 5 and 3 is $answer"); //7
          
        print("<br>"); 
          
        // Bitwise XOR 
        $answer = $First ^ $second; 
        print("Bitwise ^ of 5 and 3 is $answer"); 
          
        print("<br>"); 
          
        // Bitwise NOT 
        $answer = ~$First; 
        print("Bitwise ~ of 5 is $answer"); //0101  1010      -6
          
        print("<br>"); 
          
        // Bitwise Left shift 
        $second = 1; 
        $answer = $First << $second;     //1010
        print("5 << 1 will be $answer"); //1010   10   
          
        print("<br>"); 
          
        // Bitwise Right shift 
        $answer = $First >> $second; // 0010
        print("5 >> 1 will be $answer"); //0010    2
          
        print("<br>"); 
?>
</body></html>