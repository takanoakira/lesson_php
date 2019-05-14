<?php
function sum(){
    $result =0;
    $args = func_get_args();
    foreach($args as $args){
        $result += $args;
    }
    return $result;
}
print sum(7,3,10);
echo "<br />";
print sum(11,-5,4,88);
?>
