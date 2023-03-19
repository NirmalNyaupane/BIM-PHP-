<?php
    //read line by line from a file and display
    $file = fopen("file1.txt","r");

    while($value = fgets($file)){
            echo $value."<br>";
    }

    fclose($file);
?>