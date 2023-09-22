<?php
$a = 4; 
$b = 7;

for($i = $a; $i <= $b; $i++) {
    for($j = $a; $j <= $i; $j++){
        echo $i . "<br>";
    }
    echo "<br>";
}

?>