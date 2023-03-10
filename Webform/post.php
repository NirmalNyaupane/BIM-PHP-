<?php
      $username=$email=$password="";
      if($_SERVER['REQUEST_METHOD']=="GET"){
          $username=$_GET['username'];
          $email = $_GET['email'];  
          $password = $_GET['password'];
  
          echo $username."<br>";
          echo $email."<br>";
          echo $gender."<br>";
      }
?>

<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        User Name: <input type="text" name="username"> <br>
        Email Name: <input type="text" name="email"><br>
        Password: <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>
