<?php

$n=5;
$res=1;
$result = 0;
for($i=1;$i<=$n;$i++){
    $res*=$i;
    $result+=$res;
}
echo $result;
?>