<?php
$v1 = 23;//km/hours
$v2 = 34;//km/hrs
$s = 56;//km
$t = 0.3;//hrs


$s_result = $v1 *  $t + $v2 * $t - $s;

echo"
the distance between car 1 and the car2 will be $s_result after$t hours";
?>