<?php
$dt = new DateTime('2016/5/15 10:58:31');
print $dt->format('Y年m月d日 H時i分');
$dt->add(new DateInterval('P1YT10H'));
print $dt->format('Y年m月d日 H時i分');
$dt->sub(new DateInterval('P3MT20M'));
print $dt->format('Y年m月d日 H時i分');
?>
