<?php
$a = 2;
$b = 2;
$c = -4;
$pos = 0;
$neg = 3;
if($a>0){
    $pos++;
    $neg--;
}
if($b>0){
    $pos++;
    $neg--;
}
if($c>0){
    $pos++;
    $neg--;
}
echo $pos, $neg;

?>