<?php
require_once './wings/selfphp/MyClass.php';
require_once './wings/selfphp/MyClass2.php';
require_once './wings/selfphp/MyClass3.php';

use wings\selfphp\MyClass;
print MyClass::showClass();
print '<br />';

use wings\selfphp\MyClass2, wings\selfphp\MyClass3;

print MyClass2::showClass();
print '<br />';
print MyClass3::showClass();
?>

