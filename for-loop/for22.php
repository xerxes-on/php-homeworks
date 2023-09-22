<?php

$n=3;
$x = 2;
$res=1;
$result = 1;
for($i=1;$i<=$n;$i++){
    $res*=$i;
    $result+=$x**$i/$res;
}
echo round($result,1);
?>