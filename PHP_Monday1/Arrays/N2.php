<?php

$colors = array('white', 'green', 'red');
$length = sizeof($colors);
echo "<ul>";
for ($i=0; $i < $length ; $i++) { 
    echo "<li>" . $colors[$i] . "</li>";
}

echo "</ul>";

?>