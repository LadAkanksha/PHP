<?php

    /* Datatype in php ->

        1) "PHP"/'PHP'  ----------------------> String
        2)  140     --------------------------> Integer        
        3)  156.99  --------------------------> Float
        4)  true/false  ----------------------> Boolean
        5)  arr("Python","Ruby","Kotlin")   --> Array
        6)  $obj = new Student()    ----------> Object
        7)  null    --------------------------> Null


        var_dump()  ------>   show the datatype of variable
    */

    $value = "String";                  // String Daatype
    echo $value."------>\t";
    var_dump( $value );
    echo "<br><br>";

    $value = 'String';
    echo $value."------>\t";
    var_dump( $value );
    echo "<br><br>";

    $value = 546;                       //  Integer Datatype
    echo $value."------>\t";
    var_dump( $value );
    echo "<br><br>";

    $value = 89.123;                    //  Float Datatype
    echo $value."------>\t";
    var_dump( $value );
    echo "<br><br>";

    $value = true;                      // Boolean Datatype
    echo $value."------>\t";
    var_dump( $value );
    echo "<br>";

    $value = false;                     
    echo $value."------>\t";
    var_dump( $value );
    echo "<br><br>";

    $value = array('HTML','CSS','JavaScript');      //  Array Datatype
    echo $value[1];
    var_dump( $value );
    echo "<br><br>";


// class student{};                                 //  Object Datatype
    // $value = new student();
    // echo $value;
    // var_dump( $value );
    // echo "<br><br>";

$value = null;                                       // Null Datatype
    echo $value."------>\t";
    var_dump( $value );
    echo "<br><br>";
?>