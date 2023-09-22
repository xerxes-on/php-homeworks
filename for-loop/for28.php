<?php
$n = 3;
$x = 0.3;
$res = 0;

$c = 1;
$y = 2;
for($i = 1; $i <= $n; $i++){
    $res +=pow(-1,$i-1)*($c *$c)*pow($x,$i)/($y *$y);

    $c+=2;
    $y += 2;
}

echo $res;

?>