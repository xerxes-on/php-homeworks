<?php

$n = 3;
$res = 1;
$count = 0;
for($i = 1.1; $i < $n; $i+= 0.1) {
    $res *= $i;
    if($count == $n-1){
        break;
    }
    $count++;
}
echo $res;
?>