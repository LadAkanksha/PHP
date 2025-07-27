<?php
    /*

    To use merge function, always use new array to get result.
        1) array_merge() -> 
                Used with INDEXED and ASSOCIATED array.
                Merge elements of specified array.

        2)  array_merge_recursive() ->
                Only used with MULTI-DIMENSIONAL ASSOCIATED array.
                Merge elements of specified array.

        3)  array_combine() ->
                Only used with INDEXED array.
                Elements in both array must be equal.
                Elements of 1st Array take as KEY and 2nd Array take as VALUE

    */
    
    $season = ["Summer", "Winter", "Mansoon"];
    $fruits = ["Mango", "Guava", "Banana", "Dates","Pear"];
    $veggie = ["Chilly", "Cabbage"];

    
    echo "--------------------------- array_merge() with Indexed Array ---------------------------";

    $newArray = array_merge($season , $fruits);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = array_merge($season, $veggie , $fruits);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    
    echo "--------------------------- array_merge() with Associated Array  ---------------------------";

    $season = ['a'=>"Summer", 'b'=>"Winter", 'c'=>"Mansoon"];
    $fruits = ['0'=>"Mango", '1'=>"Guava", '2'=>"Banana", '3'=>"Dates",'4'=>"Pear"];
    $veggie = ['a'=>"Chilly", 'b'=>"Cabbage"];

    $newArray = array_merge($season , $fruits);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = array_merge($season, $veggie);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = $season + $veggie;

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    
    echo "--------------------------- array_merge_recursive()  ---------------------------";
    
    $newArray = array_merge_recursive($season,$fruits,$veggie);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $season = ['a'=>"Summer", 'b'=>"Winter", 'c'=>['Other' => ['0' => "Pre-Winter",'1'=>"Autumn",'2'=>"Mansoon",'4'=>"Spring"]]];
    $veggie = ['d'=>"Chilly", 'capsicum'=>["Red","Green","Yellow"],];

    $newArray = array_merge_recursive($season,$veggie);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    echo "--------------------------- array_combine()  ---------------------------";
    
    $name = ["Rekha","Vina","Priya","Kirti"];
    $age = [22,27,30,29];

    $newArray = array_combine($name,$age);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

?>