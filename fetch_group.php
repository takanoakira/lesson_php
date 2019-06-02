<?php
   require_once '../selfphp/DbManager2.php';

   $db = getDb();
   $stt = $db->query('SELECT publish, title FROM book');
   print_r($stt->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP));
   ?>
   