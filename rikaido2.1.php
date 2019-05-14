<?php
$data =['高江','青木','片淵'];

print_r(array_splice($data,3,0,['山田','日尾']));
print_r($data);

print_r(array_splice($data,0,0,['掛谷','土井']));
print_r($data);

print_r(array_slice($data,2,3));
?>
