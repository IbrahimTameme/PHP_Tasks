<?php
$temparr = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$length = count($temparr);
sort($temparr);
$total =0;
foreach($temparr as $num)
{
    $total = $total + $num;
}
echo "avarage is " .$total / $length ."<br>";
echo "lowest 5 are $temparr[0]  $temparr[1]  $temparr[2]  $temparr[3]  $temparr[4]"."<br>";
echo "Highest 5 are ". $temparr[$length-1] . $temparr[$length-2] . $temparr[$length-3] . $temparr[$length-4]  .$temparr[$length-5]."<br>";

?>