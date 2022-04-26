<?php
$colors = array("red","blue", "white","yellow");

function toupper($value)
{
 return strtoupper($value);
}
print_r(array_map("toupper",$colors))
?>