<?php

$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  /// this takes the right most value
// echo $rem;
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  

?>