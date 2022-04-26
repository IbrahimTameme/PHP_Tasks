<?php

for ($i=0; $i < 5  ; $i++) { 

    for ($x=0; $x < 5 ; $x++) { 
        
        
        if($i == 1 && $x>=3)
        {
            echo "B";
        }
        elseif($i == 2 && $x>=2)
        {
            echo "C";
        }
        elseif($i == 3 && $x>=1)
        {
            echo "D";
        }
        elseif($i == 4 )
        {
            echo "E";
        }
        else
        {
            echo "A";
        }
    }
    echo "<br>";
}


?>