<?php
$a = 33;
$b = 23;
$operation = 2;
switch($operation){
    case 1:
        $r = $a +$b;
        break;
    case 1:
        $r = $a +-$b;
        break;
    case 1:
        $r = $a /$b;
        break;
    case 4:
        $r = $a *$b;
        break;
    default:
    $r = "Error";
}
echo $r;

?>