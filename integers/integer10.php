<?php
$a = 345;
$b = $a % 10;
$c= floor(($a -floor($a / 100)*100) / 10);
echo "$a  = $b and $c"
?>