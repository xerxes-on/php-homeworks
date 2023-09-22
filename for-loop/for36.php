<?php
$n = 4;
$k =3;
$res = 0;
for($i = 1; $i <=$n; $i++){
    $res += pow($i,$k); 
}
echo $res;
?>