<?php
    $host = "localhost";
    $username="root";
    $password="";
    $database= "bim";

    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
        echo die("Connection unsucessfull");
    }

    
    $sqlQuery = "SELECT * FROM student;";
    $res = mysqli_query($conn,$sqlQuery);

    echo "<table border='1px'>";
    echo "<tr><td>Id</td><td>Name</td><td>Address</td><td>Faculty</td></tr>";

    while($arr = mysqli_fetch_array($res)){
        echo "<tr>";

        echo "<td>".$arr['id']."</td>";
        echo "<td>".$arr['name']."</td>";
        echo "<td>".$arr['address']."</td>";
        echo "<td>".$arr['faculty']."</td>";

        echo "</tr>";
    }

    echo "</table>";

?>