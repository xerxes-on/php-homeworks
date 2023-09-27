<?php
myf(2,2);
function myf($a,$b){
if($a>$b){
    $max = $a;
    $min = $b;
}elseif($b>$a){
    $max = $b;
    $min = $a;
}else{
    $max = $a;
    $min = $b;
}
echo $max . " " . $min;
}
?>