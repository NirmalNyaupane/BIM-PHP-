<?php
    //starting session 
    //When session is created PHPSESSID is automatically generated   
    session_start();

    //create session variable
    $_SESSION['Name']="Nirmal Neupane";
    $_SESSION['isloggin']=true;
    
    //update session variable 
    $_SESSION['Name']="Anish Koilara";
    
    //Read session varibale
    $s = $_SESSION['Name'];
    $r = $_SESSION['isloggin'];

    //deleting individual session variable 
    unset($_SESSION['Name']);
    unset($_SESSION['isloggin']);
    
    //deleting entire session variable
    session_destroy();
?>