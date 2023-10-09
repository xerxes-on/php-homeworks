<?php

$a = [23];
function myf($a){
    for($i=1;$i<=$a;$i++){
        for($j = 1;$j <=$i;$j++){
            echo $i . "<br>";
        }
        echo "<br>";
    }
}
myf(5);
