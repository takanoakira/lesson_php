<?php
function sum(float ...$args):float{
    $result =0;
    foreach($args as $args){
        $result += $args;
    }
    return $result;
}
print sum(7,3,10);
echo "<br />";
print sum(11,-5,4,88);
?>
