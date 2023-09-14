<?php
$a = 345;
$b = $a % 10;
$c= floor(($a -floor($a / 100)*100) / 10);
$d = floor($a / 100);


$f = $b *100 + $c *10 + $d;
echo "$a is  === $f"

?>