<?php

$a = 3;
$b = 4;
if($a != $b) {
    $a = 0;
    $b = 0;
}else{
    $a += $b;
    $b += $a;
}
echo $a , $b



?>