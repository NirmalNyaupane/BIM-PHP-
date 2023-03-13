<?php
    $host = "localhost";
    $username="root";
    $password="";
    $database= "bim";

    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
        echo die("Connection unsucessfull");
    }

    //how to make table 
    $sql = "create table student(
        id int not null,
        name varchar(35) not null,
        address varchar(50) not null,
        faculty varchar(20) not null 
        );";
    
        //to reflect sql query in database we use mysqli_query 
        
       if(mysqli_query($conn,$sql)){
         echo "Table is created";
       }else{
        echo "Table is already created";
       }

?>