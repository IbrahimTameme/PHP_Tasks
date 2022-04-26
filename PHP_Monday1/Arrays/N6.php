<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);

foreach($fruits as $letter=>$fruit){
    echo "letter is  $letter fruit is $fruit <br>";
    }

?>