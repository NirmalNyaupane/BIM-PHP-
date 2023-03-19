<?php
    
    if(is_readable("file2.txt")){
        echo "file can be read";
    }
    if(is_writable("file2.txt")){
        echo "File can be write";
    }

?>