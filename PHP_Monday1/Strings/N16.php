<?php

function RemoveSpecialChar($str)
{
    $res = preg_replace('/[0-9\@\.\;\" "]+/', '', $str);
    return $res;
}
$str = "My name is  hello and email hello.world598@gmail.com;";
$str1 = RemoveSpecialChar($str);
echo "My UpdatedString: ", $str1;

?>