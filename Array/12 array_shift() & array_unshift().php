<?php
    $names = array("Rakesh","Vinu","Darshan","Chetan","Milind");


    # array_shift() - Remove FIRST element from specified array.
    array_shift($names);
    print_r($names);
    echo "<br>";

    # array_unshift() - Add element  at the START of specified array.
    array_unshift($names,"Raj");
    print_r($names);
    echo "<br>";

    array_unshift($names,"Ram","Vivek","Ravi");
    print_r($names);
    echo "<br>";
?>