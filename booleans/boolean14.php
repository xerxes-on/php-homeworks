<?php

$a = -3;
$b = 3;
$c = 5;
echo var_dump(($a > 0 && $b<0 && $c <0 )||($b > 0 && $c<0 && $a <0)||($c >0 && $b<0 && $a<0))
?>