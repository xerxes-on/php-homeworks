<?php

$year = 200;
if($year % 100 == 0){
    if($year % 400 == 0){
        $days = 366;
    }else{
        $days = 365;
    }
}else if($year % 4 == 0){
    $days = 366;
}else{
    $days = 365;
}
echo "$year has $days days";


?>