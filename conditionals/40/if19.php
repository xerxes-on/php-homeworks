<?php
$a = 3;
$b = 5;
$c = 5;
$d  = 5;
if($a == $b){
    if($b == $c){
        $res = $d; 
    }else{
        $res = $c;
    }
}elseif($a == $c){
    $res = $d;
}else{
    $res = $a;
}
echo $res;

?>