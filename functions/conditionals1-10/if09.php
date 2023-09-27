<?php
myf(23,23);
function myf($a,$b){
    $c = $a;
if($a>$b){
    $a = $b;
    $b = $c;

}
if($a == $b){
    echo $a . '== ' . $b;  
}else{
    echo $a . " < " . $b ;
}
}

?>