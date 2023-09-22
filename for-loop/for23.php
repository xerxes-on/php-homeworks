<?php

$n=5;
$x=2;
$res = 1;
$result = 0;
for($i=1;$i<=2*$n+1;$i++){
    $res *= $i;
    $result+=((-1)**$i*$x**$i*2)/($res);
    echo $result . "<br>";
}
echo round($result,1);
?>