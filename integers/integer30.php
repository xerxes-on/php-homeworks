<?php
$year = 190;
if($year < 999){
    $century = 1;
}
else if ($year % 100 == 0) {
    $century = $year / 100;
} else {
    $century = floor($year / 100) + 1;
}
echo "Year $year is in  " . $century." century"
?>

