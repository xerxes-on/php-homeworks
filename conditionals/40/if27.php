<?php
$x = 3.9;

if($x<0){
    $res = 0;
}else if(floor($x) % 2 == 0){
    $res =1;
}elseif(floor($x) % 2 == 1){
    $res = -1;
}
echo  $res;
?>