<?php

$n = 6;
$res = 0;
for($i = 1; $i <=$n; $i++){
    $res += pow($i,$i);
}
echo $res;
?>