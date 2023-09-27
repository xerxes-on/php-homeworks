<?php

myf(2,2,-4,0);
function myf($a, $b, $c, $pos){
if($a>0){
    $pos++;
}
if($b>0){
    $pos++;
}
if($c>0){
    $pos++;
}
echo $pos;
}
?>