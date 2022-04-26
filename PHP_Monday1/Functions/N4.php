<?php
$num1 = 5;
$num2 = 10;

echo "first number is " . $num1 . "second number is" . $num2 . "<br>" ;
function swap ($x,$y)
{
    $hold = $x;
    $x = $y;
    $y = $hold;
    echo "after the swap";
    echo "first number is " . $x . "second number is" . $y ;
    
}

swap($num1,$num2);



?>