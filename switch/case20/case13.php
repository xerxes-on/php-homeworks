<?php
$element = 4;
$value = 3;
switch($element){
    case 1:
        $a = $value;
        $c = sqrt(2)*$a;
        $h= $c/2;
        $s=$c*$h/2;
        break;
    case 2:
        $a = sqrt(2)/$value;
        $c = $value;
        $h= $c/2;
        $s=$c*$h/2;
        break;
    case 3:
        $c = 2*$value;
        $a = sqrt(2)/$c;
        $h= $value;
        $s=$c*$h/2;
        break;
    case 4:
        $s=$value;
        $a = sqrt(2*$s);
        $c = sqrt(2)*$a;
        $h= $c/2;
        break;
    default:
        $a =0;
        $c = 0;
        $h= 0;
        $s=0;


}
echo" a = $a<br>c = $c<br> h = $h<br> S = $s";


?>