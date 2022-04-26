<?php

for ($i=1; $i <= 50; $i++) { 
    if($i % 3 == 0 && $i % 5 == 0 )
    {
        echo "fizz buzz";
    }
    else  if($i % 5 == 0 )
    {
        echo "buzz";
    }
    else if($i % 3 == 0 )
    {
        echo "fizz";
    } 
    else 
    echo $i;

    echo "<br>";
}


?>