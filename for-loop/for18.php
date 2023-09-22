<?php
$n = 5;
$a = 2;
$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $result += (-1)**$i*$a**$i;
}

echo  $result;
?>
