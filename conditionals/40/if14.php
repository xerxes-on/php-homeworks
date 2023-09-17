<?php
$a =9;
$b = 2;
$c = 7;


if($a>$b){
    if($a>$c){
        $max = $a;
        if($b<$c){
            $min = $b;
        }else{
            $min = $c;
        }
    }elseif($c>$a){
        $max = $c;
        $min = $b;
    }else{
        $max = $a;
        $min = $b;
    }
}else{
    //b>a
    if($b>$c){
        $max = $b;
        if($a>$c){
            $min = $c;
        }else{
            $min = $a;
        }
    }elseif($b<$c){
        $max = $c;
        $min = $a;
    }else{
        $max = $b;
        $min = $a;
    }
}

echo "MAX:  $max  \n";
echo "MIN: $min \n";
?>