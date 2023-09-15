
<?php

$a = 201;
$b= $a%10;
$c = floor($a/100);
$d = floor(($a - floor($a/100)*100)/10);
echo var_dump(($d==$c+1 && $b==$d+1) || ($d==$c-1 && $b== $d -1) ); 

?>