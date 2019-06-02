<?php
  require_once '../selfphp/DbManager2.php';

  $db =getDb();
  $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
  print_r($stt->fetchAll(PDO::FETCH_ASSOC));
  ?>
  