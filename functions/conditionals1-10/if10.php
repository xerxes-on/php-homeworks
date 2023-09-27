<?php

myf(3,4);
function myf($a,$b){
if($a != $b) {
    $a = 0;
    $b = 0;
}else{
    $a += $b;
    $b += $a;
}
echo $a , $b;
}


?>