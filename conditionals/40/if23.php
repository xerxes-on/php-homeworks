<?php
$x1 = 3;
$y1 = -4;

$x2 = -3;
$y2 = 4;

$x3 = 3;
$y3 = 4;

if($x1 == $x2){
    $x4 = $x3;
}else{
    $x4 = $x2;
}
if($y1 == $y2){
    $y4 = $y3;
}else{
    $y4 = $y2;
}
echo "x=$x4 and y = $y4";