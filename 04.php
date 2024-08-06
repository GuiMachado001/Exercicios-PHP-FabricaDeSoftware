<?php

function horario($hora, $minuto, $segundo){
    $horasEmMinutos = $hora * 60;
    $minutosEmSegundos = ($minuto + $horasEmMinutos) * 60;
    $totalSegundos = $minutosEmSegundos + $segundo;
    echo "{$totalSegundos} segundos";
}


$hora = 10;
$minutos = 20;
$segundos = 40;

horario($hora, $minuto, $segundo);