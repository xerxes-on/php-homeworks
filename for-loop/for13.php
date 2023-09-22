<?php
$n = 5; 
$result = 0;

for ($i = 1; $i <= $n; $i += 2) {
    $result += $i * 0.1 - ($i + 1) * 0.1;
}

echo  $result;
?>
