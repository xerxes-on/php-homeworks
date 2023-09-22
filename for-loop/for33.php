<?php
$n = 10;

$f0 = 1;
$f1 = 1;

for ($i = 3; $i <= $n; $i++) {
    $fib = $f0 + $f1;
    echo "F($i) = $fib" . "<br>";

    $f0 = $f1;
    $f1 = $fib;
}




?>