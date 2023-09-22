<?php

$n = 3;
$a = 2;
$b = 13;
$d = ($b - $a)/$n;
for($i = $a; $i <= $b; $i+=$d)
{   
    $i = round($i, 2);
    echo  "F($i) = 1 - sin($i) = ". 1 - sin($i) . "<br>";
}
?>