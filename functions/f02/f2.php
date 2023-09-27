<?php

$n = $_GET['number'];
function sqr($a){
    $r = pow($a,2 );
    $r2 = pow($a, 3);
    echo $r . ' ' . $r2;

}
sqr($n);

?>