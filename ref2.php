<?php
 function increment(int &$num):int{
     $num++;
     return $num;
 }
 $value= 10;
 print increment($value);
 echo "<br />";
 print $value;
 ?>
 