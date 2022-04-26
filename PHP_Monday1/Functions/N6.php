<?php

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
$text = "HwEjEH";
if(Palindrome($text)){ 
    echo "this is Palindrome"; 
}
else { 
echo "this is Not a Palindrome"; 
}
?> 