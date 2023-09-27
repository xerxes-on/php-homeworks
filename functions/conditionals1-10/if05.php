<?php

function myf($a, $b, $c, $pos, $neg){
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
}
myf(2,3,4,0,-1)
?>