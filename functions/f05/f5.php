<?php

function odd($a){
    $r = 0;
for($i=2;$i<=10;$i++){
    if($a % $i ==0){
        continue;
    }else{
        $r++;
    }
}
if($r>0){
    echo "False";
}else{
    echo "True";
}
}
odd($_GET['number']);