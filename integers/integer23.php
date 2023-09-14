<?php

$sec = 1234;
$hrs = floor($sec /3600);
$min = floor($sec / 60);
$seconds = $sec - $min*60;
echo "$sec seconds is $hrs hours and $min minutes and $seconds seconds"

?>