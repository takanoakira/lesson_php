<?php 
$data =["高田","青木","片淵","和田","花田","佐藤"];
print_r(array_slice($data,0,5));
print_r(array_slice($data,2,3, true));
print_r(array_slice($data,4));
print_r(array_slice($data,-5,-3));
?>