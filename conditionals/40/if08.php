<?php
$a = 2;
$b = 2;

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

?>