<?php
    $studMarks = [
        "Aryan" => ["Physics" => 89 , "Chemistry" => 70 , "Maths" => 90],
        "Priya" => ["Physics" => 76 , "Chemistry" => 61 , "Maths" => 72],
        "Khushi" => ["Physics" => 83 , "Chemistry" => 81 , "Maths" => 81],
        "Lancy" => ["Physics" => 82 , "Chemistry" => 64 , "Maths" => 68],
    ];

    echo "<pre>";
    print_r($studMarks);
    echo "</pre>";

    foreach($studMarks as $key => $val1)
    {
        echo $key." -> ";
        foreach($val1 as $key => $val2)
            echo $val2." ";
        echo "<br>";
    }

     echo "<br>";

    echo "<table border='2px' cellpadding='7px' cellspacing='0' style='text-align:center'>
        <tr>
            <th>Student Name</th>
            <th>Physics</th>
            <th>Chemistry</th>
            <th>Maths</th>
        </tr>
    ";
    foreach($studMarks as $key => $val1)
    {
        echo "<tr>";
        echo "<td>$key</td>";
        foreach($val1 as $key => $val2)
            echo "<td>$val2</td>";
        echo "</tr>";
    }
    echo "</table>";
?>