<?php

// Employee Details Array
 $empDetails = [
        [1001 , "Sachet Tondon" , "Male" , "Singer"],
        [1002 , "Nick Jonas" , "Male" , "Actor"],
        [1003 , "Rakul Preet" , "Female" , "Actor"],
        [1004 , "Prakash Aamte" , "Male" , "Doctor"],
        [1005 , "Neeti Mohan" , "Female" , "Singer"],
    ];
    echo "<table border='2' cellpadding=10px' cellspacing='0'>";
        echo "<tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Proffession</th>
        </tr>";
        foreach($empDetails as list($id, $name ,$gender,$profession )){
        echo "<tr><td>$id</td><td>$name</td><td> $gender</td>  <td>$profession</td></tr> ";
    }
    echo "</table>";
    echo "<br><br>";

// Student Marks Array
    $studMarks = [
        ["name" => "Aryan" , "Physics" => 89 , "Chemistry" => 70 , "Maths" => 90],
        ["name" => "Priya" , "Physics" => 76 , "Chemistry" => 61 , "Maths" => 72],
        ["name" => "Khushi", "Physics" => 83 , "Chemistry" => 81 , "Maths" => 81],
        ["name" => "Lancy" , "Physics" => 82 , "Chemistry" => 64 , "Maths" => 68],
    ];

    echo "<table border='2' cellpadding=10px' cellspacing='0'>";
        echo "<tr>
            <th>Student Name</th>
            <th>Physics</th>
            <th>Chemistry</th>
            <th>Maths</th>
        </tr>";
        foreach($studMarks as list( "name" => $name , "Physics"=>$phy,"Chemistry"=>$chem,"Maths"=>$math )){
        echo "<tr><td>$name</td><td>$phy</td><td> $chem</td>  <td>$math</td></tr> ";
    }
    echo "</table>";

?>