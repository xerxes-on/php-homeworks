<?php

$a = 3;
$c = $a;
$n = 5;
for($i = 1; $i < $n; $i++) {
    $a *= $c;

}
echo $a;
?>