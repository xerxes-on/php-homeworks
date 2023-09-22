<?php

$n=5;
$res=1;
$result = 1;
for($i=1;$i<=$n;$i++){
    $res*=$i;
    $result+=1/$res;
    echo $result . "<br>";
}
echo round($result,1);
?>