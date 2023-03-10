<?php

    $username=$email=$hobbies=$gender=$distict=$comm = "";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username=$_POST['username'];
        $email = $_POST['email'];  
        $gender = $_POST['gender'];
        $hobbies = $_POST['email'];
        $distict = $_POST['distict'];
        $comm = $_POST['comment'];

        echo $username."<br>";
        echo $email."<br>";
        echo $gender."<br>";
        echo explode(" ",$hobbies)."<br>";
        echo $distict."<br>";
        echo $comm."<br>";
    }
?>
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        User Name: <input type="text" name="username"> <br>
        Email Name: <input type="email" name="email"><br>
        
        <p> Gender</php>
        <input type="radio" name="gender" value="Male">Male<br>
        <input type="radio" name="gender" value="Female">Female<br>

        <p>Hobbies</p>
        <input type="checkbox" name="hobbies[]" value="playing">Playing<br>
        <input type="checkbox" name="hobbies[]" value="dancing">dancing<br>
        <input type="checkbox" name="hobbies[]" value="singing">Singing<br>
      
        <p>Distict</p>
        <select name="distict">
            <option value="chitwan">Chitwan</option>
            <option value="kathmandu">Kathmandu</option>
            <option value="Pokhara">Pokhara</option>
        </select>
        <br>
        <p>Comment</p>
        <textarea name="comment"></textarea>

        <input type="submit">
    </form>
</body>
</html>
