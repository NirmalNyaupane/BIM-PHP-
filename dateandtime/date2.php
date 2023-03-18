<?php
   //program to calculate age in days

      if($_SERVER["REQUEST_METHOD"]=="POST"){
            $date1 = $_POST['date1'];
            $da1 = strtotime($date1); 
        
            $da2 = time();

            $diff = abs($da1-$da2);
            $diffdays = floor($diff/(24*60*60));
            echo $diffdays." days"."<br>";
      }
      
?>
<html>
<head>
    <title>Difference two date</title>
</head>
<body>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Date 1: <input type="date" name="date1"><br>
            <input type="submit">
    </form>
</body>
</html>