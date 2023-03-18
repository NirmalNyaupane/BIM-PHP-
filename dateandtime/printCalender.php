<?php
  function displayCalender($month,$year){
    $table = "<table border='1px'><tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thrusday</th><th>Friday</th><th>Saturday</th></tr>";
    
    $first_day = date("w",mktime(0,0,0,$month,1,$year));
    $last_day = date("t",mktime(0,0,0,$month,1,$year));

   $table=$table."<tr>";
   $j=1;
    
    for($i=0;$i<$first_day;$i++){
        $table=$table."<td></td>";
        $j++;
    }

    for($i=1;$i<=$last_day;$i++){
      
      $table=$table."<td>".$i."</td>";
            
      if($j==7){
        $table=$table."</tr>";
        $table=$table."<tr>";
        $j=0;
      }
      
      $j++;
    }
    
    if($j!=1 && $j<8){
      for($i=$j;$i<=7;$i++){
        $table=$table."<td></td>";
      }
    }
    echo date("F",mktime(0,0,0,$month,1,$year));
    echo $table;
  }

  // displayCalender(4,2023);
  displayCalender(1,2023);
?>
