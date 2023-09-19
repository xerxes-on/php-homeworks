<?php
$d = 31;
$a = 8;
if($a ==2 && $d ==28){
    $d = 1;
    $a++;
}else if($d == 31){

    switch($a){
    case 1: case 3: case 5: case 7: case 8 : case 10:
        $d = 1;
        $a++;
        break;
    case 12:
        $d =1;
        $a = 1;
        break;
}}else if($d == 30){

    switch($a){
    case 4: case 5: case 9: case 11:
        $d = 1;
        $a++;
        break;
    default: $d++;
}}else{
    $d++;
}

switch($a){
    case 1:
        $m = "January";
        break;
    case 2:
        $m = "February";
        break;
    case 3:
        $m = "March";
        break;
    case 4:
        $m = "April";
        break;
    case 5:
        $m = "May";
        break;  
    case 6:
        $m = "June";
        break;
    case 7:
        $m = "July";
        break;
    case 8:
        $m = "August";
        break;
    case 9:
        $m = "September";
        break;
    case 10:
        $m = "October";
        break;
    case 11:
        $m = "November";
        break;
    case 12:
        $m = "December";
        break;
    default:
        $m = "Invalid date format";

}
echo "One day after the day u gave is <h1>$m $d </h1>";
?>