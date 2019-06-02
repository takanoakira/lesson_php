<?php
$now = new DateTime();
print $now->format('Y年m月d日 H:i:s');
print $now->format('当月の日数:t日');
$now->add(new DateInterval('P1M10D'));
print $now->format('Y年m月d日 H:i:s');

?>
