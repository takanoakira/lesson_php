<?php
$fmt ='Y年m月d日';
$time = '2016年12月04日';
$dt = DateTime::createFromFormat($fmt,$time);
print $dt->format('Y/m/d/D');
?>

