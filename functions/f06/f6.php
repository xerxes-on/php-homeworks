<?php

function odd($a,$b,$c){
    if($a > $b){
        if($a>$c){
            $r = $a;
        }else{
            $r = $c;
    }}elseif($a<$b){
        if($b >$c){
            $r = $b;
        }else{
            $r = $c;
        }
    }else{
        $r = $a;
    }
    echo $r;
}
odd($_GET['number1'], $_GET['number2'], $_GET['number3']);