<?php
    $emp1Details = array(1001 , "Ramesh Kumar" , "Mumbai" , 50000);

    $emp2Details = [1002 , "Jitendra Joshi" , "Pune" , 26000];

    for($i = 0 ; $i < 4 ;$i++)
        echo "$emp1Details[$i] <br>";
    echo "<br>";

    foreach($emp2Details as $val)
    echo " $val <br>";


?>