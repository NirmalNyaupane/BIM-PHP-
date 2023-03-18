<?php

  //Write a program to find difference between two days given by users

      if($_SERVER["REQUEST_METHOD"]=="POST"){
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];

            $da1 = strtotime($date1); 
            $da2 = strtotime($date2);

            $diff = abs($da1-$da2);
            $diffdays = floor($diff/(24*60*60));
            
            echo $diffdays." days";
      }
?>
<html>
<head>
    <title>Difference two date</title>
</head>
<body>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Date 1: <input type="date" name="date1"><br>
            Date 2: <input type="date" name="date2"><br>
            <input type="submit">
    </form>
</body>
</html>