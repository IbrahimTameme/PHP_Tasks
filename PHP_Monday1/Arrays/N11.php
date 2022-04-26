<?php
 $words =  array("abcd","abc","de","hjjj","g","wer");
$arrnum = array_map("strlen",$words);
 echo min($arrnum)."<br>";
 echo max($arrnum);
?>