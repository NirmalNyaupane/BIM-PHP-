<?php

    //Multidimensional indexed array
    $arr = array(
        array(1,2,3,4,5,6),
        array(7,8,9,10,11),
        array(12,13,14,15,16)
    );
    
    //printing multidimensional indexed array
    foreach($arr as $el){
        echo "<br>";
        foreach($el as $value){
            echo $value." ";
        }
    }

    //Multidimensional associative array
    $arr = array(
        "a"=>array('name'=>"Nirmal Neupane",'college'=>"Balkumar"),
        "b"=>array('name'=>"Anish Koilara",'college'=>"Balkumari")
    );

    //printing multidimensional associative array
    foreach($arr as $k=>$el){
        echo "<br>";
        foreach($el as $key => $value){
            echo $key." ".$value." ";
        }
    }
?>