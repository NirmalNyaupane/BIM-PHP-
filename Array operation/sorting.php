<?php
    /**
        Indexed array (Array)
            Ascending order sort()
            descending order rsort()

        Associative array 
            Ascending order
                on the basis of key ksort()
                on the basis of value asort()

            descending order
                on the basis of key  krsort()
                on the basis of value arsort()
    */

    //Sorting indexed array in ascending order
    $arr = array(6,1,8,3,9,10,5);
    sort($arr);
    echo "printing in ascending order"."<br>";
    foreach($arr as $el){
        echo $el."<br>";
    }

    //sorting indexed array in descending order
    $arr = array(6,1,8,3,9,10,5);
    rsort($arr);

    echo "Printing in descending order"."<br>";
    foreach($arr as $el){
        echo $el."<br>";
    }
    
    //sorting associative array on the basis of key 
    $student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
    ksort($student_one);
    foreach($student_one as $key =>$val){
        echo $key." ".$val."<br>";
    }

    //sorting associative array on the basis of value
    $student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
    asort($student_one);
    foreach($student_one as $key =>$val){
            echo $key." ".$val."<br>";
    }

    // sorting associative array in reverse order on the basis of key
      $student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
    krsort($student_one);
        foreach($student_one as $key =>$val){
            echo $key." ".$val."<br>";
    }

    //sorting associative array in reverse order on the basis of value
      $student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
        arsort($student_one);

             foreach($student_one as $key =>$val){
            echo $key." ".$val."<br>";
    }

?>
