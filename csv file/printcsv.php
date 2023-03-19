<?php
    //program to read csv file and display
    $csv = fopen("Devices.csv","r");
    
    echo "<table border='1px'>";

    while($row = fgetcsv($csv)){
        echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
        echo "</tr>";
    }

    fclose($csv);
?>