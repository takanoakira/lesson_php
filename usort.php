<?php
$keys= ["十","百","千","万","億","兆","京","該"];
$data =["万","億","京","該"];
usort($data,function($a,$b)use($keys){
    return array_search($a,$keys)<=>array_search($b,$keys);

    
});
print_r($data);
?>