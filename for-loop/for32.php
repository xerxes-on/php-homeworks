<?php
$n = 3;
$a1 = 1;
for ($i = 1; $i<$n+1; $i++){
    $a = ($a1 +1)/$i;
    $a1 = $a;
    echo $a . "<br>";
}

?>