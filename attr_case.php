<?php
 require_once '../selfphp/DbManager2.php';
 
 $db = getDb();
 $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
 print_r($db->query('SELECT * FROM book')->fetchAll(PDO::FETCH_ASSOC));
 ?>
 