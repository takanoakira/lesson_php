<?php
    require_once '../selfphp/DbManager2.php';
    require_once '../selfphp/Encode.php';

    try{
        $db = getDb();

        $stt = $db->query('SELECT * FROM book ORDER BY published DESC');

        $cnt = 0;
    
?>

<!DOCTYPE html>
<html>
    <head>

    <meta chareset="UTF-8" />
    <title>既存のデータの更新</title>
    </head>
    <body>
        <form method="POST" action="bindParam_process.php">
            <input type="submit" value="更新" />
            <table border="1">
                <tr>
                    <th>ISBNコード</th><th>書名</th><th>価格</th>
                    <th>出版社</th><th>刊行日</th>
                </tr>
                <?php
                while ($row = $stt->fetch(PDO::FETCH_ASSOC)){
                    $cnt++;
                    ?>
                
                <tr>
                    <td>
                        <?=e($row['isbn'])?>
                        <input type="hidden" name="isbn<?=e($cnt)?>"
                        value="<?=e($row['isbn']) ?>" />
                    </td><td>
                        <input type="text" name="title<?=e($cnt)?>"
                        value="<?=e($row['title'])?>" size="35" />
                    </td><td>
                        <input type="text" name="price<?=e($cnt)?>"
                        value="<?=e($row['price'])?>" size="12" />
                    </td><td>
                        <input type="text" name="published<?=e($cnt)?>"
                        value="<?=e($row['published']) ?>" size="12" />
                    </td>
                </tr>
                <?php
                }
            }catch(PDOException $e){
                print "エラーメッセージ:{$e->getMassage()}";
            }
            ?>
            </table>
            <input type="hidden" name="cnt" value="<?=e($cnt)?>" />
        </form>
    </body>
</html>
