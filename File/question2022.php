<?php
    $file1 = fopen("file1.txt","r");
    $file2 = fopen("file2.txt","w");

    $i=1;
    while($value=fgets($file1)){
        if($i%2!=0){ 
            fputs($file2,$value);
        }
        $i++;
    }

    fclose($file1);
    fclose($file2);
?>