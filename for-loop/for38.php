<?php

$n = 7;
$res = 0;
for($i = 1; $i <=$n; $i++){
    $res += pow($i,$n-($i-1));
    echo pow($i,$n-($i-1)) . "<br>";
}
echo "<h1>$res</h1>";
?>