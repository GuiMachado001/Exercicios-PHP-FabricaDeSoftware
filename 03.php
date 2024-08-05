<?php

function posNegat ($num){
    if($num === 0){
        return "zero";
    }
    else if($num > 0){
        return 1;
    }
    else{
        return -1;
    }
}

$num = 10;

$resultado = posNegat($num);

echo $resultado;