<?php
$msg = <<<EOD
お問い合わせはCQW15204@nifty.comまで
EOD;

print preg_replace('|/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i|','<a href="mailto:$0">$0</a>',$msg);
?>