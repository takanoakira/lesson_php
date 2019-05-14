<?php
 function checkStatic(){
     static $x =0;
     $x++;
     print "unset前:{$x}";
     unset(static $x);
     $x =13;
     print "unset後:{$x}<br />";
 }
 checkStatic();
 checkStatic();
 ?>
 