<?php
    function addition($no1 , $no2 )
    {
        $add = $no1 + $no2;

        return $add;
    }

    $result = 0;
    $result = addition(5,3);
    echo "Addition is ".$result."<br>";

    $result = addition(56,13);
    echo "Addition is ".$result."<br>";

    $result = addition(9,72);
    echo "Addition is ".$result."<br>";
?>