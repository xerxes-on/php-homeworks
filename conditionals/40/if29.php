<?php

$x = -4;
$sign;
$oddeven;
if($x>0){
    $sign = "positive";
    if($x %2 == 0){
        $oddeven = "even";
    }else{
        $oddeven = "odd";
    }
}else if($x ==0){
    $sign = 0;
    $oddeven = "even";
}else{
    
    $sign = "negative";
    if($x %2 == 0){
        $oddeven = "even";
    }else{
        $oddeven = "odd";
    }
}
echo "$x is $sign and $oddeven number"

?>