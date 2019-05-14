<?php
 function getTrianglreArea(float $base = 5,float $height = 1):float{
     return $base * $height /2;
 }
  $area = getTrianglreArea();
  print "三角形の面積は{$area}です。<br />";
  $area = getTrianglreArea(10);
  print "三角形の面積は{$area}です。<br />";
  $area = getTrianglreArea(10,5);
  print "三角形の面積は{$area}です。<br />";
  ?>
  