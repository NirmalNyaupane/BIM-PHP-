<?php

    $host = "localhost";
    $username="root";
    $password="";
    $database= "bim";
    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
        echo die("Connection unsucessfull");
    }

    $id = $name=$address=$faculty="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $faculty=$_POST['faculty'];

        $sqlQuery = "INSERT INTO student(id, name, address, faculty) 
        VALUES ($id,'$name','$address','$faculty');";     
        
    
        mysqli_query($conn,$sqlQuery);
    }

    
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        id: <input type="text" name="id"><br>
        Name:<input type="text" name="name"><br>
        Address:<input type="text" name="address"><br>
        Faculty:<input type="text" name="faculty">
        <br>
        <input type="submit">
    </form>
</body>
</html>
