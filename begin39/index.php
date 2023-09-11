<?php
$a = 2;//A
$b = -1;//B
$c = -2;//C

$d = $b**2-4*$a*$c; //D
$x1 = round((-$b + sqrt($d))/2*$a, 2); //X1
$x2 = round((-$b - sqrt($d))/2 * $a, 2); //X2

echo "if A = $a, B = $b, C = $c then D is $d   <br>     x1 is $x1 and x2 is $x2";




?>