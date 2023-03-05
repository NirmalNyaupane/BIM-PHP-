The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
local
global
static

a.global scope
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
example:
<?php

$x = 5; // global scope

function myTest()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

?>

b. local scope
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
example: 

<?php
function myTest()
{
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

?>

c. static
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local
variable NOT to be deleted. We need it for a further job.
<?php
function myTest()
{
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>
Then, each time the function is called, that variable will still have the information it contained from the last time
the function was called.
