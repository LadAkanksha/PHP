<?php
    function asValue($input)
    {
        $input .= "User !!!";
    }

    function asReference(&$input)
    {
        $input .= "Akanksha Lad";
    }

    $str = "<br>Hello ";
    asValue($str);
    echo $str;

    asReference($str);
    echo $str;
?>