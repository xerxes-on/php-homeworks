<?php

$a = 345;
$b = floor($a/100);
$c = floor(($a - $b * 100)/10);
$d = $a % 10;

$f = $c * 100 + $b *10 + $d;  
echo "$a is the input and $f is the result"
?>