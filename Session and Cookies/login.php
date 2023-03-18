<?php

    session_start();

    $host = "localhost";
    $username="root";
    $password="";
    $database= "bim";
    
    $conn = mysqli_connect($host,$username,$password,$database);
    if(!$conn){
        echo die("Connection unsucessfull");
    }

    $username=$password="";
    $userErr = $passErr = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $userSql = "SELECT * FROM users where username='$username';";
        
        $res = mysqli_query($conn,$userSql); 

        if(mysqli_num_rows($res)!=0){
            
            $data = mysqli_fetch_assoc($res);

            if($data['password']=="$password"){
                $_SESSION['username']=$username;    
                echo "Welcome ".$_SESSION['username'];
            
            }else{
    
                $passErr="Password doesnot match";
            }

        }else{
            $userErr="Username does not match";
        }
    }    

?>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit">
    </form>
</body>
</html>