<?php
$a = 34;
$last = $a % 10;
$first = floor($a/10);
$res = $last * 10 + $first;
echo "$a ==== $res"
?>