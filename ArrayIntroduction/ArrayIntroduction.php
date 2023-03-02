<?php

  //how to create tag
  $t = "<h2>Nirmal Neupane</h2>";

  $t1 = "<table border='1px>'>
        <tr>
          <td>1</td>
          <td>2</td>
        </tr>";

  $t2 = "<tr>
        <td>3</td>
        <td>4</td>

        </table>";

  echo $t1.$t2;
  echo $t;


  //Indexed array 
  /**
   * How to create indexed array 
   *  array_name = array("element1","element2","element3",......"elementn");
   */
  $arr = array("Nirmal","Neupane","BIM","4th sem");

  //Printing using for loop 
  for($i=0;$i<count($arr);$i++){
      echo $arr[$i]."<br>";
  }

  /*
    syntax of for each loop
    foreach(arr_name as $var){

    }
  */

  //Printing using for each loop 
  foreach($arr as $el){
    echo $el."<br>";
  }


  /*
    How to create associative array 
    $array_name = array("key1"=>value1,
                        "key2"=>value2
                        "keyn"=>valuen)
  */

  $student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 

  //printing element of an associative array 

  foreach($arr as $key => $value){
    echo $key." ".$value."<br>";
  }

?>