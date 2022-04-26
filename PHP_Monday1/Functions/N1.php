<?php
$num = 4;
function Isprime ($x)
{
    for ($i=2; $i < $x ; $i++) { 
       if ($x %$i == 0)
       {
           
           return 0;
       }
       
    }
return 1;
}

if ( Isprime($num)==0)
{
    echo "this is not a prime";
}
else
echo "this is a prime";

?>