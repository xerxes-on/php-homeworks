<?php

$a = 345;
$b = $a % 10;
$c= floor(($a -floor($a / 100)*100) / 10);
$d = floor($a / 100);
$sum = $b+$d+$c;
echo "sum of the digits is $sum"


?>