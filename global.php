<?php
$x =10;

function checkScope():int{
    global $x;
    return ++$x;
}
print checkScope();
echo "<br />";
print $x;
?>
