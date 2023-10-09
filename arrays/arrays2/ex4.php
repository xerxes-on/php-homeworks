<?php
$n = 1990;
$num = [];
for($i =1; $i<$n; $i++){
    $div = 0;
    for($j = 1; $j < $i; $j++){
       if($i % $j == 0 ){
        $div += $j;
    }
    }
    if($i == $div && !($i % 4 ==0)){
        array_push($num, $i);
    }
}
var_dump($num);

?>