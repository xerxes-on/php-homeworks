<?php

$r = 300;
$a = 5;
switch($a){
    case 1:$r = $r;break;
    case 2:$r = $r /1000000;break;
    case 3:$r = $r / 1000;break;
    case 4:$r = $r *1000;break;
    case 5:$r = $r *100;break;
    default:$r = "invalid value";
}
echo $r;
?>