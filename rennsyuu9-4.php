<?php
    require_once '../selfphp/DbManager2.php';
    require_once '../selfphp/Encode.php';

    try{
       $db =getDb();
       $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
       print '<ul>';
       while($row = $stt->fetch(PDO::FETCH_OBJ)){
           ?>
           <li><?=e($row->title)?>
               (<?=e($row->published)?>)</li>
        <?php
       }
       print '</ul>';
    }catch(PDOException $e){
        print "エラーメッセージ:{$e->getMassage()}";
    }
    ?>
