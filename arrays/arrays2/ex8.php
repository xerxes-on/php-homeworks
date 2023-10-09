<?php
$n = 6;
$a =2;
$arr = [];
for ($i = 1; $i <= $n; $i++){
    array_push($arr, $a**$i);
}
var_dump($arr);