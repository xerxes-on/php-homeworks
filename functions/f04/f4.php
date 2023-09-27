<?php

function odd($a,$b){
    if($a > $b){
        echo "$a";
    }elseif($a<$b){
        echo "$b";
    }else{
        echo "EQUAL";
    }
}
odd($_GET['number1'], $_GET['number2']);