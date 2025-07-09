<?php
    $a = 10;        //Local Variable

    function demo()
    {
        $a = 100;               // Local Variable
        echo "variable a inside function : $a <br>";
    }

    demo();
    echo "variable a outside function : $a <br>";
?>