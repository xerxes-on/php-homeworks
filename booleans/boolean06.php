<?php
$a = 2;
$b = 3;
$res = ($a % 2 ==0 && $b % 2 == 1)||($a % 2 ==1 && $b % 2 == 0);

echo var_dump($res)
?>