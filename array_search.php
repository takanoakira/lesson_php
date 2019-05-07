<?php
$data =["php","javaScript","php","java","C#","15"];
var_dump(array_search("javaScript",$data));
var_dump(array_search("php",$data));
var_dump(array_search("JAVA",$data));
var_dump(array_search(15,$data));
var_dump(array_search("15",$data, true));

?>