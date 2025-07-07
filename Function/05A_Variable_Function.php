<?php
    function addition()
    {
        $n1= 10;
        $n2 = 20;
        $res = $n1 + $n2;
        
        echo "Addition of ".$n1." + ".$n2." = ".$res."<br>";
    }
    
    $add = "addition";

    $sub = function(){
        $n1= 10;
        $n2 = 20;
        $res = $n1 - $n2;

        echo "Addition of ".$n1." - ".$n2." = ".$res."<br>";
    };


    $add();
    $sub();
?>