<?php
$n =999;
if($n>=100 && $n<=999){
    $first = floor($n / 100);
    $middle = floor(($n - $first *100)/10);
    $last = $n % 10;
    switch($middle){
        case 1;$m1 = "o'n";break;
        case 2;$m1 = "yigirma";break;
        case 3;$m1 = "o'ttiz";break;
        case 4;$m1 = "qiriq";break;
        case 5;$m1 = "ellik";break;
        case 6;$m1 = "oltmish";break;
        case 7;$m1 = "yetmish";break;
        case 8;$m1 = "sakson";break;
        case 9;$m1 = "to'qson";break;
        case 0 :$m1 = "   ";break;
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
        case 0:$m2  = " "; break;
    }
    switch($first){
        case 1;$m3 = "bir";break;
        case 2;$m3 = "ikki";break;
        case 3;$m3 = "uch";break;
        case 4;$m3 = "to'rt";break;
        case 5;$m3 = "besh";break;
        case 6;$m3 = "olti";break;
        case 7;$m3 = "yetti";break;
        case 8;$m3 = "sakkiz";break;
        case 9;$m3 = "to'qqiz";break;
    }
    echo "<h1>$m3 yuz $m1 $m2</h1>";
}else{
    echo"Error";
}







?>