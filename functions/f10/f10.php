<?php

function odd($a,$b,$c){
    if($c ==1){
        $r = round($a /$b,3);
    }else{
        $r = $a * $b;
    }
    echo $r;
}
odd($_GET['number1'], $_GET['number2'], $_GET['number3']);