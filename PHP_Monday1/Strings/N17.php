<?php

$str = "this is number num five and after this is delelted";
$toarr = explode(" " , $str);


for ($i=0; $i < 5 ; $i++) { 
    
    echo $toarr[$i] . " ";
}

?>