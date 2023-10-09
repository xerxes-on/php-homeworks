<?php
$n = 90;
$num = [];
for($i =1; $i<$n; $i++){
    $div = 0;
    for($j = 1; $j <= $i; $j++){
        if($i % $j == 0){
            $div ++;
    }
    }
    if($div==2 && !($i % 3 ==0)){
        array_push($num, $i);
    }
}
var_dump($num);

?>