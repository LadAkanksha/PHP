<?php
    $list = [
        [1001 , "Ramesh Kumar" , "Mumbai" , 50000],
        [1002 , "Jitendra Joshi" , "Pune" , 26000],
        [1003 , "Rima Kumari" , "Noida" , 85000],
        [1004 , "Prisha Boite" , "Latur" , 75000],
    ];

    echo "<pre>";
    print_r($list);
    echo "</pre>";

    for($row = 0 ; $row < 4 ; $row++)
    {
        for($col = 0 ; $col < 4 ; $col++)
        {
            echo $list[$row][$col]."<br>";
        }
        echo "<br><br>";
    }

    foreach($list as $row)
    {
        foreach($row as $col)
        {
            echo $col." ";
        }
        echo "<br>";
    }
?>

