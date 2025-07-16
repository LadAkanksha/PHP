<?php
    # in_array() - Used to search specific element in an array.
    #              This method returns 1 if element is exist else returns 0.
    #              Often used in if(condition) statement
    # in_array(element , array_name , STRICT_MODE) - 
    #           element - element for search in array
    #           array_name - In which element is searching       
    #           STRICT_MODE - To check the Type of element, only tru /false is allowed.By default false is activated.

    
    $season = ["Mansoon", "Spring", "Autumn","Winter" ,"Summer" , "Pre-Winter"];

    echo in_array("rain",$season)."<br>";                       //1 0
    echo in_array("Mansoon",$season)."<br>";                    //  1

    $array = array("cars","Toys","foods",'150');

    echo in_array(150,$array,true)."<br>";              //  0
    echo in_array("150",$array,false)."<br>";           //  1

    if(in_array("Hot",$season))
        echo "Found Successfully !!!";
    else
        echo "Falied to Find !!!<br>";

    # array_search() - Used to search specific element in an array.
    #              This method returns index for Indexed Array / key for Assiciative Array if element is exist.
    # in_array(element , array_name) - 
    #           element - element for search in array
    #           array_name - In which element is searching   
    
    $season = ["Summer","Mansoon","Winter"];

    $nature =  array(
        "trees"=>"Banyan Tree",
        "Flowers"=>"Sunflower",
        "Bird"=>"Sparrow",
        "animal"=>"Lion",
        "River"=>"Amazon",
        "ocean"=>"Pacific",
        "mountaine"=>"Himalaya"
    );

    echo array_search('Pacific',$nature);
    echo array_search('Arctic',$nature);


?>