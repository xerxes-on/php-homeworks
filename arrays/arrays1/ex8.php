<?php
$num = [];
for($i =1; $i<100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){ 
        array_push($num, $i);
        echo $i . "<br>";
}
}

?>