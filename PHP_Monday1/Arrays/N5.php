<?php

$arr = array ("1","2","3","4","5");
$item = ("$");
 array_splice($arr, 3,0,$item);

print_r($arr);

?>