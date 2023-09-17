<?php
$a = 69;
$b = 9;
$c = 8;

if($a<$b){
    if($b >$c ){
        $res = $c - $a;
    }elseif($b <$c){
        $res = $b - $a;
    }else{
        $res = $b - $a;
    }
}else{
    if($a>$c){
        $res = abs($c - $b);
    }elseif($a<$c){
        $res = abs($a - $b);
    }else{
        $res = $a - $b;
    }
}
echo $res;
?>