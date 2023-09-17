<?php
$a = 23;
$b = 23;
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


?>