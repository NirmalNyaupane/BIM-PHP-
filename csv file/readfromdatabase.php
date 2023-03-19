<?php
    //program to read data from database and write into csv file
    $csv = fopen("write.csv","w");
     
     $host = "localhost";
     $username="root";
     $password="";
     $database="csvfile";
 
     $conn = mysqli_connect($host,$username,$password,$database);
 
     if(!$conn){
         echo die("Error in connection");
     }

     $sqlQuery = "SELECT * FROM device;";
     $res = mysqli_query($conn,$sqlQuery);

     while($row = mysqli_fetch_array($res)){
            fputcsv($csv,$row);
     }

     fclose($csv);
?>
