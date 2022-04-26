<?php

$sample = "tutorial";
$sample = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$sample);
 echo $sample . "<br>";

?>