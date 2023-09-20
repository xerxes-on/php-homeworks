<?php
$n =3;
if($n>=10){
    $first = floor($n / 10);
    $last = $n % 10;
    switch($first){
        case 1;$m1 = "o'n";break;
        case 2;$m1 = "yigirma";break;
        case 3;$m1 = "o'ttiz";break;
        case 4;$m1 = "qiriq";break;
        case 5;$m1 = "ellik";break;
        case 6;$m1 = "oltmish";break;
        case 7;$m1 = "yetmish";break;
        case 8;$m1 = "sakson";break;
        case 9;$m1 = "to'qson";break;
    }
    switch($last){
        case 1;$m2 = "bir";break;
        case 2;$m2 = "ikki";break;
        case 3;$m2 = "uch";break;
        case 4;$m2 = "to'rt";break;
        case 5;$m2 = "besh";break;
        case 6;$m2 = "olti";break;
        case 7;$m2 = "yetti";break;
        case 8;$m2 = "sakkiz";break;
        case 9;$m2 = "to'qqiz";break;
    }
    echo "$m1 $m2 ";
}else{
    switch($n){
        case 1;$m2 = "bir";break;
        case 2;$m2 = "ikki";break;
        case 3;$m2 = "uch";break;
        case 4;$m2 = "to'rt";break;
        case 5;$m2 = "besh";break;
        case 6;$m2 = "olti";break;
        case 7;$m2 = "yetti";break;
        case 8;$m2 = "sakkiz";break;
        case 9;$m2 = "to'qqiz";break;
    }
    echo "$m2+ta masala";
}






?>