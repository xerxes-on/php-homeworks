<?php

$x = 0;
if($x<=0){
    $res = -$x;
}else if(0<$x && $x<2){
    $res = $x**2;
}else{
    $res = 4;
}
echo $res;

?>