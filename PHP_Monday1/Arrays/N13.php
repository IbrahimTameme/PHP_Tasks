<?php
$array1 = array( 2, 0, 10, 12, 6) ;
function min_notzero( $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_notzero($array1));
?>