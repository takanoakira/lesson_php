<?php
   require_once '../selfphp/DbManager2.php';

   try{
       $db=getDb();
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       $db->beginTransaction();
       $db->exec("INSERT INFO book(isbn,title,price,publish,published) VALUES('978-4-7981-2152-2','独習PHP　第2版',3200,'翔泳社','2010-04-12')");

       $db->ecec("INSERT INFO book(isbn,title,price,publish,published) VALUES('978-4-7981-2151-2','ひとりで学ぶPHP',3500,'翔泳社','2010-04-12')");
       $db->commit();
   }catch(PDOException $e){
       $db->rollBack();
       print "エラーメッセージ:{$e->getMessage()}";
   }