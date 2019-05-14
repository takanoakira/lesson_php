<?php
function checkScope():string{
    require_once 'scopej_included.php';
    return $scope;
}
print checkScope();
print $scope;
?>
