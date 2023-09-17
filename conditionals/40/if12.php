<?php

$a = -9;
$b = 5;
$c = 4;

if($a<$b){
    if($a<$c){
        $min = $a;
    }elseif($a>$c){
        $min = $c;
    }else{
        $min = $a;
    }
}else{
    if($b < $c){
        $min = $b;
    }elseif($b>$c){
        $min = $c;
    }
    else{
        $min = $b;
    }
}
echo $min;
?>