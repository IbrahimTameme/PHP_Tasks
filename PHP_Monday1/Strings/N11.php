<?php

$ch = 'v';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { 
 $next_ch = $next_ch[0];
}

echo $next_ch;
?>