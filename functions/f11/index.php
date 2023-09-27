<?php
function myf($x){
    if($x<=50){
        for($i=0;$i<=50;$i++){
            if($i % 3==0){
                echo $i."<br/>";
            }
        }
    }else{
        for($i=50;$i<=100;$i++){
            if($i % 5==0 && $i % 8==0){
                echo $i . "<br>";
            }
        }
    }
}
myf(45);