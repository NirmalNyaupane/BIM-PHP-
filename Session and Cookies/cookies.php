<?php

   //How to create cookies
    setcookie("Name","Nirmal");
    

   //Accessing the value of cookie
      $co = $_COOKIE['Name'];
      echo $co;

    //isset() function 
    //Check whether variable is set or not. If varible is set it returns true otherwise false

    //checking cookies is set or not 
    if(isset($_COOKIE['Name'])){
        echo "Cookie is set";
    }else{
        echo "Cookie is not set";
    }
    
    //updating cookies
    setcookie("Name","Neupane");

    //deleting cookies
    setcookie("Name","");

    //Expiring cookie
    setcookie("Name","Nirmal",time()+(24*60*60));
    
    // echo time();
    //present second + 5 hrs 
    //after one days
    //time()+(24*60*60)
    //mktime()
    // 5 hours = (5*60*60)
    //time():- 1970 january 1 to present time 

    // 2023 may 23
    //mktime($hour,$minute,$second,$month,$day,$year)
    setcookie("Name","Nirmal", mktime(0,0,0,5,23,2023));
?>