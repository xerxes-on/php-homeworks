<?php

function odd($a,$b){
for($i=$a;$i<=$b;$i++){
    $r = -2;
    for($j=1;$j<=$i;$j++){
        if($i %$j == 0){
            $r++;
        }
    }
    if($r<=0){
            echo $i."<br>";
    }
}
}
odd($_GET['number1'], $_GET['number2']);