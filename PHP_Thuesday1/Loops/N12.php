<?php
$space = 0;
$letters = 4;
for ($i=0; $i < 5 ; $i++) { 
 echo "<pre style='font-size:55px;'>";
    for ($x=$space; $x < 4; $x++ ) { 
       echo " ";
       
    }
    $letter = "A";
    for ($y=$letters; $y <=4 ; $y++) { 
        
        
        echo $letter . " ";
        $letter++;
    }
    echo "</pre>";
 
    $space++;
    $letters--;
}
$space1 = 0;
$letters1 = 3;
for ($i=0; $i < 5 ; $i++) { 
    echo "<pre style='font-size:55px;'>";
       for ($x=$letters1; $x < 4; $x++ ) { 
          echo " ";
          
       }
       $letter = "A";
       for ($y=$space1; $y <=3 ; $y++) { 
           echo $letter . " ";
           $letter++;
       }
       echo "</pre>";
    
       $space1++;
       $letters1--;
   }

?>