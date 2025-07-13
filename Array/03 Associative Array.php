<?php
    # Associative array - An associative array is an array where keys are named (usually strings) instead of numeric indexes.

    $studDetails1 = array("Id" => 1001 , "Name" => "Akanksha Lad" , "CGPA" => 9.5, "isMarried" => false);


    $studDetails2 = ["Id" => 1002 , "Name" => "Ashiti Patil" , "CGPA" => 8.5 , "isMarried" => true];


    echo "<pre>";
    print_r($studDetails1);
    echo "</pre>";

    echo "<pre>";
    print_r($studDetails2);
    echo "</pre>";
?>