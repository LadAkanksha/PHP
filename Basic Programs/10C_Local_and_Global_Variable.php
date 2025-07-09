<?php
    global $a , $b;         // Global Variable

    function demo()
    {
         $a= 10;
         $b = 20;

         $c = $a + $b;      //  Local Variable
         echo "variable a inside function : $c <br>";
    }

    demo();
    
    //echo "variable a outside function : $c <br>";         // Not Accessible
?>