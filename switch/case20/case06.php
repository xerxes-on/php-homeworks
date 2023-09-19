<?php

$r = 34;
$a = 2;
switch($a){
    case 1:$r = $r /10;break;
    case 2:$r = $r *1000;break;
    case 3:$r = $r;break;
    case 4:$r = $r /1000;break;
    case 5:$r = $r /100;break;
    default:$r = "invalid value";
}
echo $r;
?>