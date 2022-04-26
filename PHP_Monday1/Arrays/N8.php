<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$merged = array_merge($array1,$array2);
echo "<pre>"; print_r($merged); echo "</pre>";
?>