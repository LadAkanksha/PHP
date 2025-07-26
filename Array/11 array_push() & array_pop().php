<?php
    $names = ["Summer","Winter","Mansoon","Spring","Pre-Winter","Autumn"];

    # array_pop() - Remove last element from specified array.
    array_pop($names);

    print_r($names);
    echo "<br>";

    # array_push() -  Add an element at end of specified array.

    array_push($names , "Automn");

    print_r($names);
    echo "<br>";

    array_push($names , "Automn","Hot","Snowvy");

    print_r($names);
?>