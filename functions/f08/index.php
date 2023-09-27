<?php
function factorial($n){
    $res = 1;
    for($i=1;$i<=$n;$i++){
        $res *= $i;
    }
    return $res;
};
echo factorial(5);