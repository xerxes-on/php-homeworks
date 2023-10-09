<?php
$n = 90;
$num = [];
for($i =0; $i<$n; $i++){
    if($i % 7 == 0 && $i % 3 == 0){ 
        array_push($num, $i);
        echo $i . "<br>";
}
}
var_dump($num);

?>