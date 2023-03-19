<?php
    //Program to read from csv file and store in database
    $host = "localhost";
    $username="root";
    $password="";
    $database="csvfile";

    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
        echo die("Error in connection");
    }

    $csv = fopen("Devices.csv","r");
    fgets($csv);

    while($row = fgetcsv($csv)){
        $device = $row[0];
        $click = $row[1];
        $impression = $row[2];
        $ctr = $row[3];
        $position=$row[4];

        $sqlQuery = "INSERT INTO Devices(Device, Clicks, Imprssion, CTR, Position)
                    VALUES('$device','$click','$impression','$ctr','$position'); ";

        mysqli_query($conn,$sqlQuery);
    }

    fclose($csv);
?>