<?php

    $username=$email=$phone=$hobbies = $comm = "";
    $userErr = $emailErr = $phoneErr=$hobbiesErr = $commErr = "";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username=$_POST['username'];
        $email = $_POST['email'];  
        $phone = $_POST['phone'];
        $hobbies = $_POST['hobbies'];
        $comm = $_POST['comment'];

        //error if condition 
        $userRegax = "/^[a-zA-Z]$/";
        if(empty($username)){
            $userErr="User name cannot be empty";
        }else if(strlen($username)<5 && strlen($username)>10){
            $userErr="Name should be between 5 to 10";
        }else if(!preg_match($userRegax,$username)){
            $userErr="Name should contains character only";
        }else{
            $username=$_POST['username'];
        }

        //email validation
        $emailRegax = "/^[a-zA-Z0-9.]{2, }[@][a-zA-Z]{2, }[.][a-zA-Z]{2,}$/";
        if(empty($email)){
            $emailErr = "Email cannot be empty";
        }else if(!preg_match($emailRegax,$email)){
            $emailErr = "Email is not in correct form";
        }else{
            $email = $_POST['email']; 
        }

        //phone validation
        $phoneReg = "^/[9][8][0-9]$/";
        if(empty($phone)){
            $phoneErr = "Phone number cannot be empty";
        }else if(strlen($phone)!=10){
            $phoneErr="Length of phone number is 10";
        }else if(!preg_match($phoneReg,$phone)){
            $phoneErr = "Phone number does not match";
        }else{
            $phone = $_POST['phone'];
        }

        //check box validate
        if(empty($hobbies)){
            $hobbiesErr="At least on hobbie should be selected";
        }else{
            $hobbies = $_POST['hobbies'];
        }

        //comment validation
        if(empty($comm)){
            $commErr="Comment is required";
        }else{
            $comm = $_POST['comment'];
        }

        //checking if all data are correct or not
        if(empty($userErr) && empty($emailErr) &&
        empty($phoneErr) && empty($hobbiesErr) && 
        empty($commErr)){
            echo $username."<br>";
            echo $email."<br>";
            echo $phone."<br>";
            echo implode(" ",$hobbies)."<br>";
            echo $comm."<br>";
        }
    }
?>
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        User Name: <input type="text" name="username"> 
        <p><?php echo $userErr; ?></p>
        <br>
        Email Name: <input type="text" name="email">
        <p><?php echo $emailErr; ?></p>
        <br>
        Phone Number: <input type="number" name="phone"><br>
        <p><?php echo $phoneErr; ?></p>
        
        <p>Hobbies</p>
        <input type="checkbox" name="hobbies[]" value="Playing">Playing<br>
        <input type="checkbox" name="hobbies[]" value="dancing">dancing<br>
        <input type="checkbox" name="hobbies[]" value="singing">Singing<br>
        <p><?php echo $hobbiesErr; ?></p>

        <p>Comment</p>
        <textarea name="comment"></textarea>
        <p><?php echo $commErr; ?></p>

        <input type="submit">
    </form>
</body>
</html>
