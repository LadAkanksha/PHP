<?php
    $season = ["Summer","Mansoon","Winter"];

    $fruits = ["Apple","Banana","Mango","Papaya","Grapes","Pineapple"];

    $veggie = [3=>"Chilly","Cabbage",1 =>"Tomato","Potato"];

    $newArray = array_replace($fruits,$season);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = array_replace($season,$veggie);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = array_replace($veggie,$season);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


    $array1 = [
        "a"=>["red"],
        "b"=>["green","pink"]
    ];

    $array2 = [
        "a"=>["Blue","Orange"],
        "b"=>["black"]
    ];

    $newArray = array_replace($array1,$array2);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = array_replace_recursive($array1,$array2);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
?>