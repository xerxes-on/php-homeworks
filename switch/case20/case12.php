<?php
$element = 4;
$value = 3;
switch($element){
    case 1:
        $r = $value;
        $d = 2*$value;
        $l= 2*3.14*$value;
        $s=3.14*$value**2;
        break;
    case 2:
        $r = $value / 2;
        $d = $value;
        $l= 3.14*$d;
        $s=3.14*$r**2;
        break;
    case 3:
        $r = 2*3.14/$value;
        $d = 2*$r;
        $l= $value;
        $s=3.14*$r**2;
        break;
    case 4:
        $r =sqrt($value/3.14);
        $d = 2*$r;
        $l= 2*3.14*$r;
        $s=$value;
        break;
    default:
        $r = 0;
        $d= 0;
        $l = 0;
        $s = 0;

}
echo" r = $r<br>D = $d<br> L = $l<br> S = $s";


?>