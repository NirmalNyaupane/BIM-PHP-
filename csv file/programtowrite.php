<?php
    //program to write into csv file
    $csv = fopen("newfile.csv","w");
    
    $arr = array(
            array("Device","Clicks","Impression"),
            array("Mobile",304,55465),
            array("Desktop",4545,565),
            array("tablet",3453,34345)
           );

    foreach($arr as $row){
        fputcsv($csv,$row);
    }

    fclose($csv);
?>