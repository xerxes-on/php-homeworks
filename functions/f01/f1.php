<?php
$age= $_GET["age"];
$name = $_GET["name"];
function age($a, $name){
    $a = 2023 - $a;
    echo "Hi $name, you were born in " . $a;
}
age($age, $name)

?>