<?php
$a = 1;
$b = 2;
$c = 7;
if($a>$b){
    if($b>$c){
        $res = $b;
    }else{
        $res = $c;
    }
}else{
    //a<b
    if($a>$c){
        $res = $a;
    }elseif($b<$c){
        $res = $b;
    }else{
        $res = $c;
    }
}
echo $res;



?>