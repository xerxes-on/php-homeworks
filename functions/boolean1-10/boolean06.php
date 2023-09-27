<?php
echo myf(2,3);
function myf($a, $b) {
$res = ($a % 2 ==0 && $b % 2 == 1)||($a % 2 ==1 && $b % 2 == 0);

return var_dump($res);
}
?>