<?php
    //program to read line by line from one file and write into another file
    $file1 = fopen("file1.txt","r");
    $file2 = fopen("file2.txt","w");

    while($value=fgets($file1)){
        fputs($file2,$value);
    }

    fclose($file1);
    fclose($file2);
?>