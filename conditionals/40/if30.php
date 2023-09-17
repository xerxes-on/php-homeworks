<?php

$x = 1;
$oddeven;
if($x<=99 and 10<=$x){
    $num = "ikki xonali";
    if($x %2 == 0){
        $oddeven = "juft";
    }else{
        $oddeven = "toq";
    }
}elseif($x<=999 && $x >=100){
    $num = "uch xonali";
    if($x %2 == 0){
        $oddeven = "juft";
    }else{
        $oddeven = "toq";
    }
}else{}
echo "$x soni $num $oddeven son";


?>