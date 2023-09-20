<?php
$n =20;
$count = 0;
for ($i = 1; $i <= 37; $i++){
    if($n % $i == 0){
        $count++;
    }else{
        continue;
    }
};
if($count >2){
    echo "TUB EMAS";
}else{
    echo "TUB";
}
?>