<?php
 require_once 'MyClass.php';

 $cls =new Myclass();

 foreach($cls as $key => $value){
     print "{$key}:{$value} <br />";
 }
 print '<hr />';
 $cls->showProperty();
 ?>
