<?php
 require_once '../selfphp/DbManager2.php';

 try{
     $db =getDb();
     $db->exec("INSERT INTO member(nam, sex, old, enter, memo) VALUES('山田璃央','女','18','2016-09-30', '')");
     print "直近のID値:{$db->lastInsertId()}";     
 }catch(PDOException $e){
     print "エラーメッセージ:{$e->getMessage()}";
 }
 ?>
 