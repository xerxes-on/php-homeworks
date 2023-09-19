<?php
$m = 4;
if($m<=12 && $m>0){
switch($m){
    case 1: case 3: case 5: case 7: case 8 : case 10: case 12:
        $d = 31;
    case 2:
        $d = 28;
    default:
        $d = 30;
}}else{
    $d = "Error: Invalid";
}
echo $d;

?>