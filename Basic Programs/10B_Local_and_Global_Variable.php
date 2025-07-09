<?php
    $a = 10;        
    $b = 20;

    function demo()
    {
         global $a , $b;            //Global Variable

         $a = $a + $b;
         echo "variable a inside function : $a <br>";
    }

    demo();

    echo "variable a outside function : $a <br>";
?>