<?php
/*
     Operator           Description

        +               Addition of Two More Operand
        -               Substraction of Two More Operand
        *               Multiplication of Two More Operand
        /               Division of Two More Operand
        %               Modulo of Two More Operand
        **              Exponentiation of Two More Operand  
        ++              Unary Increment Operator
        --              Unary Decrement Operator

*/

    $val1 = 25;
    $val2 = 5;
    $val3 = 10;
    $result = 0;

    // Addition Operator

    echo "<h1>Arithmetic Operator</h1>";

    $result = $val1 + $val2;
    echo "Addition of ".$val1." + ".$val2." = ".$result."<br>";

    $result = $val1 - $val2;
    echo "Substraction of ".$val1." - ".$val2." = ".$result."<br>";

    $result = $val1 * $val2;
    echo "Multiplcation of ".$val1." * ".$val2." = ".$result."<br>";

    $result = $val1 / $val2;
    echo "Division of ".$val1." / ".$val2." = ".$result."<br>";

    $result = $val1 % $val2;
    echo "Reminder of ".$val1." % ".$val2." = ".$result."<br>";

    $result = $val1 ** $val2;
    echo "Power of ".$val1." Raise to ".$val2." = ".$result."<br>";
    
    echo "Value of ".$val3." after Incremented is  ".++$val3."<br>";

    echo "Value of ".$val3." after Decremented is  ".--$val3."<br>";

?>