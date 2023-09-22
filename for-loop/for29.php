<?php

$n = 3;
$a = 2;
$b = 13;
$d = ($b - $a)/$n;
for($i = $a; $i <= $b; $i+=$d)
{
    echo $i . "<br>";
}
?>