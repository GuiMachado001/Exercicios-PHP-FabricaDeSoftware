<?php

function potencia($base, $expoente){
    $expo = $base ** $expoente;
    return $expo;
}

$base = 10;
$expoente  =10;

$resultado = potencia($base, $expoente);
echo "O resultado de $base elevado a $expoente é $resultado";