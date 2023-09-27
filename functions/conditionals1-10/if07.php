<?php
myf(2,2);
function myf($a,$b){
if($a<$b){
    $min = $a;
}elseif($b<$a){
    $min = $b;
}else{
    $min = $a;
}
echo $min. "inchi.";
}
?>