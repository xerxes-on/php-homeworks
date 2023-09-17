<?php
$x = 3;
$y = 0;
if($x ==0 && $y ==0){
    $res = 0;
}elseif($x==0 && $y != 0){
    $res = 2;
}elseif($x!=0 && $y == 0){
    $res = 1;
}else{
    $res = 3;
}
echo $res;


?>