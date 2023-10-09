<?php
$n = 34;
$arr = [];
for ($i = 0; $i < $n; $i++){
    $b = rand(1,100);
    array_push($arr, $b);
}
var_dump($arr);