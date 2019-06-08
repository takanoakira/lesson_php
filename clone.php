<?php
require_once 'Person.php';

$p1 = new Person('璃央','山田');
$p2 = clone $p1;
$p2->firstName ='奈美';
$p2->lastName ='掛谷';
print_r($p1);
print_r($p2);
?>
