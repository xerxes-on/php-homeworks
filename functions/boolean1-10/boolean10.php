<?php

echo myf(2,5);
function myf($a,$b){
return var_dump($a % 2 == 1 && $b % 2==0 || $a % 2 == 0 && $b % 2==1);
}
?>