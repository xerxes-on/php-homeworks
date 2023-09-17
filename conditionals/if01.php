<?php

$x = 2;
$y = 3;

if($x>$y){
    $max = $x;
    $min = $y;
}else if($x<$y){
    $max = $y;
    $min = $x;
}else{
    $max = "$x=$y";
}
echo "max :$max \n";
echo "min :$min \n";


?>