<?php

function odd($a){
    if($a % 2==0){
        echo "even";
    }else{
        echo "odd";
    }
}
odd($_GET['number']);