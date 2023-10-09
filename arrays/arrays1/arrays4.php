<?php

$evens = [];
for($i = 12; $i <=120; $i++) {
    if($i % 2 == 0){
        array_push($evens,$i);
        
    }
}
echo"<b>Sum is " . array_sum($evens);
echo "<br> Max - Min is   " . max($evens) - min($evens) . "</b>";
?>