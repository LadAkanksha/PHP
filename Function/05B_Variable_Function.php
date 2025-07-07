<?php
    function addition($n1 = 40 , $n2 = 15)
    {
        return $n1 + $n2;
    }
    
    $add = "addition";

    $sub = function($n1 = 9 , $n2 = 8)
    {
       return $n1 - $n2;
       # echo "Addition of ".$n1." - ".$n2." = ".$res."<br>";
    };


    echo $add(5,6);
    echo "<br>";
    echo $sub(10);
?>