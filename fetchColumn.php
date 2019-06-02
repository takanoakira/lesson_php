<?php
   require_once '../selfphp/DbManager2.php';

   $db =getDb();
   $stt = $db->query('SELECT COUNT(*) FROM book');
   print "件数:{$stt->fetchColumn()}件";
   ?>