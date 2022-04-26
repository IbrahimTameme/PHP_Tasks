<?php

$numbers = range(5,15);
shuffle($numbers);
for ($i=0; $i < 10 ; $i++) { 
    echo $numbers[$i] . "<br>";
}
?>