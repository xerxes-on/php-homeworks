<?php
$x = 3;
$y = 0;
if($x>0){
    if($y>0){
        $res = 1;
    }else{
        $res = 4;
    }
}else {
    if($y>0){
        $res = 3;
    }else{
        $res = 2;
    }
}

echo $res;
?>