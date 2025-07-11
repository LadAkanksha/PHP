<?php
    # Array - Array is a Collection of Similar Type of Elements.
    # But in PHP , Array can Store Different Type of Elements.
    # Array Stores in Contiguous Memory Location.
    # Each Array Element is Accessed by Index.

    $arr1 = array(1 , "One" , 0.9999 , true);       // Define Array (Method 1)

    $arr2 = ["Summer" , "Rain" , "Winter"];         // Define Array (Method 2)

    $arr3;

    $arr3[0] = 1;                                   // Define Array (Method 2)
    $arr3[1] = 10;
    $arr3[2] = 100;
    $arr3[3] = 1000;
    $arr3[4] = 10000;

    for($i= 0 ; $i < 4 ; $i++)                      // Array Printing (Method 1)
    {
        echo $arr1[$i]."<br>";
    }

    print_r($arr2);                         // Array Printing (Method 2)

    echo "<pre>";                                  // Array Printing (Method 3)
    print_r($arr3);                         
    echo "</pre>";


?>