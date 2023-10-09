<?php
$arr = [];
for($i = 50; $i <=150; $i++) {
    if($i % 2 == 1){
        array_push($arr,$i);
    }
}
var_dump($arr);