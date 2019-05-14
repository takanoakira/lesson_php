<?php
function checkStatic():int{
    $x =1;
    return ++$x;
  
}
print checkStatic();
echo "<br />";
print checkStatic();
?>
