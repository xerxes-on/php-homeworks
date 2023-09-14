<?php
$a = 9;
$b = 4;
$c = 5;

$s_rectangle = $a * $b;
$s_square = $c**2;
$can_be_filled = floor($s_rectangle/ $s_square);
$s_left = $s_rectangle - $s_square*$can_be_filled;

echo "To $a and $b sided rectangle <b>$can_be_filled</b> squares with $c side can be filled and $s_left area will be left"
?>