<?php
$d =23;
$m = 6;

switch ($m) {
    case 1:
        if($d>=20){
        $r='Qovga';
        }else{
            $r= 'Echki';
        };
        break;
    case 2:
        if($d<=18){
            $r = 'Qovga';
        }else{
            $r = 'Baliq';
        };
        break;
    case 3:
        if($d<=20){
            $r = 'Baliq';
        }else{
            $r = 'Qôy';
        };break;
    case 4:
        if($d<=19){
            $r='Qôy';
        }else{
            $r = 'Buzoq';
        };break;
    case 5:
        if($d<=20 ){
            $r = 'Buzoq';
        }else{
            $r = 'Egizaklar';
        };break;
    case 6:
        if($d <=21){
            $r = 'Egizaklar';
        }else{
            $r = 'Qisqichbaqa';
        };break;
    case 7: 
        if($d<=22){
            $r = 'Qisqichbaqa';
        }else{
            $r = 'Arslon';
        };break;
    case 8:
        if($d <= 22){
            $r = 'Arslon';
        }else{
            $r = ' Parizod';
        };break;
    case 9:
        if($d<=22){
            $r = 'Parizod';
        }else{
            $r= 'Tarozi';
        };break;
    case 10: 
        if($d <=22){
            $r = 'Tarozi';
        }else{
            $r = 'Chayon';
        };break;
    case 11:
        if($d<=22){
            $r = 'Chayon';
        }else{
            $r = 'Ôqotar';
        };break;
    case 12:
        if ($d<=21){
            $r = 'Ôqotar';
        }else{
            $r = 'Echki';
        };break;
    default:
        $r = ' Invalid input';
        break;
echo $r;


?>