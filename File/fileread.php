<?php
    //entire data
    $res = file_get_contents("file1.txt");
    file_put_contents("file2.txt",$res);
?>