<?php
    //multidimensional array
    //making tag

    $table = array(
        array("Roll No","Name","Gender"),
        array(1,"Ram Thapa","M"),
        array(2,"Aruna Thapa","F"),
    );
    
    echo "<table border='1px'>";
    foreach($table as $row){
        echo "<tr>";
        foreach($row as $value){
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
