<?php
$a = 3;
$b = 5;
$c = 5;
if($a <$b &&  $b < $c || $a>$b && $b>$c){
    $a *= 2;
    $b *= 2;
    $c *= 2;
}else{
    $a *= -1;
    $b *= -1;
    $c *= -1;
}
echo  $a . " " . $b . " " . $c;

?>