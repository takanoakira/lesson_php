<?php
function checkStatic():int{
    static $x =1;
    return ++$x;
  
}
print checkStatic();
echo "<br />";
print checkStatic();
print $x;
?>
