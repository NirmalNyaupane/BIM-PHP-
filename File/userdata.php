<?php
    //program to take input from user and store it into file
    $file = fopen("file2.txt","a");

    $name=$age=$gender="";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];

        fputs($file,"name ".$name);
        fputs($file,"age ".$age);
        fputs($file,"Gender ".$gender);
    }

    fclose($file);
?>

<html>
<head>
    <title>File</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="name"></br>
    Age: <input type="text" name="age"></br>

    <p>Gender</p>
    <input type="radio" name="gender" value="Male">Male </br>
    <input type="radio" name="gender" value="Female">Female </br>

    <input type="submit">
    </form>
</body>
</html>