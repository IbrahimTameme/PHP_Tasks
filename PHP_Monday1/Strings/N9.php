<?php
$string1 = 'ORange';
$string2 = 'ORinge';
$pos = strspn($string1 ^ $string2, "\0");

echo $pos;
?>