<?php
    $course = array("a"=>"Bachelor in Imformation Management",
                    "b"=>"Bachelor in Business Management",
                    "c"=>"Bachelor in Business Studies"
                );
    
    foreach($course as $key => $val){
        echo $key.". ".$val."<br>";
    }

?>