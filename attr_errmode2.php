<?php
 require_once '../selfphp/DbManager2.php';
 
try {
    $db = getDb();
    $db->exec('MECHA KUCHA');    
}catch(PDOException $e){
    print "エラーコード:{$e->getCode()} <br />";
    print "エラーメッセージ:{$e->getMessage()}";
}
 ?>
 