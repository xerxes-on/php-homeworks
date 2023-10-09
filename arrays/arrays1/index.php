<?php
$countries = ['USA', "China", "India", "Japan", "Russia", "Brazil"];
//Exercise 1
foreach($countries as $country){
    echo $country. "<br>";
}
//Exercise 2
echo "<br>" ."Len is ==" . count($countries) . "<br>";
//Exercise 3
echo "<h2> Shuffled </h2>";
shuffle($countries);
foreach($countries as $country){
    echo $country. "<br>";
}
?>