<?php
$x = 3;
$y = 4;
$z = 6;

if($x > $y){
    if($x>$z){
        $max = $x;
    }else{
        $max = $z;
    }
}else{
    if($y>$z){
        $max = $y;
    }else{
        $max = $z;
    }
}


?>