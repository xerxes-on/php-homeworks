<?php
$n = 3;
$x = 0.3;
$res = 0;
for($i = 1; $i <= $n; $i++){
    $res += (pow(-1,$i) * pow($x,2*$i+1))/2*$i +1;
}

echo $res;

?>