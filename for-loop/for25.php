<?php
$n = 3;
$x = 0.3;
$res = 0;
for($i = 1; $i <= $n; $i++){
    $res += (-1)**($i-1) * ($x**$i)/$i;
}

echo $res;

?>