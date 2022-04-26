<?php
function createpassword($x)
{
    $text = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($text),0,$x);
}

echo createpassword(5);
?>