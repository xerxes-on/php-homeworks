<?php
myf(2,3);
function myf($a, $b) {
if($a>$b){
    $max = $a;
}elseif($b>$a){
    $max = $b;
}else{
    $max = $a;
}
echo $max;
}
?>