<?php
    # Associative array - An associative array is an array where keys are named (usually strings) instead of numeric indexes.

    $studDetails1 = array("Id" => 1001 , "Name" => "Akanksha Lad" , "CGPA" => 9.5);


    $studDetails2 = ["Id" => 1002 , "Name" => "Ashiti Patil" , "CGPA" => 8.5 , "isMarried" => true];

    
    echo "<pre>";
    print_r($studDetails1);
    echo "</pre>";

    echo "<pre>";
    print_r($studDetails2);
    echo "</pre>";

    foreach($studDetails1 as $stud)
        echo "$stud <br>";

    echo "<br>";

    foreach($studDetails2 as $stud)
        echo "$stud <br>";

    echo "<br>";

    foreach($studDetails1 as $key => $stud)
        echo "$key => $stud <br>";

    echo "<br>";

    foreach($studDetails2 as $key => $stud)
        echo "$key => $stud <br>";

    echo "<br>";

?>