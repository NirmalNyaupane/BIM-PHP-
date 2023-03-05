<?php

?>

<html>
    <head>
        <title>Web form</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Name:<input type="text" name="name"><br>
            Email:<input type="text" name="email"><br>

            <input type="submit">
        </form>
    </body>
</html>