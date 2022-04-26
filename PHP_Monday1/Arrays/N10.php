<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");

function tolower($value)
{
 return strtolower($value);
}
print_r(array_map("tolower",$colors))
?>