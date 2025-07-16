<?php
    
    #   count() - To count elements in an specified array.
    #   sizeof() - To count elements in an specified array.
    #   array_count_values() - To show elements in an Array with count of each element in that array.
    
    $season = ["Mansoon", "Spring", "Autumn","Winter" ,"Summer" , "Pre-Winter"];

    echo count($season)."<br>";
    echo sizeof($season)."<br>";
    echo "<pre>";
    print_r(array_count_values($season));
    echo "</pre>";

    $studMarks = [
        "Aryan" => ["Physics" => 89 , "Chemistry" => 70 , "Maths" => 90],
        "Priya" => ["Physics" => 76 , "Chemistry" => 61 , "Maths" => 72],
        "Khushi" => ["Physics" => 83 , "Chemistry" => 81 , "Maths" => 81],
        "Lancy" => ["Physics" => 82 , "Chemistry" => 64 , "Maths" => 68],
    ];
    echo count($studMarks)."<br>";
    echo sizeof($studMarks)."<br>";
    echo count($studMarks,1)."<br>";
    echo count($studMarks["Aryan"])."<br>";
    echo sizeof($studMarks["Priya"])."<br>";
    echo count($studMarks["Khushi"])."<br>";
    echo sizeof($studMarks["Lancy"])."<br>";

    
    $things = array("Lamborgini" , "Audi" , "Mercedes" , "Foruner", "Audi");

    echo "<pre>";
    print_r(array_count_values($things));
    echo "</pre>";

    for($i = 0 ; $i < count($things); $i++)
    {
        echo $things[$i]."<br>";
    }
?>