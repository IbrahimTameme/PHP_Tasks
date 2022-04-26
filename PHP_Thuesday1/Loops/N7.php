<?php

$arr = array (0,1);
 $length = count($arr);
 echo 0 . "<br>";
 echo 1 . "<br>";
for ($i=0; $i < 10; $i++) {  
    $num = $arr[$length-1] + $arr[$length -2];
     echo $num . "<br>";
    
    
    array_push($arr,$num);
    $length = count($arr);
}

?>


<!-- 
    $f1 = 0;
    $f2 = 1;
    $n = 30;
    echo $f1;
    echo '<br/>';
    echo $f2;
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 ."<br />"; 
    } -->
