<!-- Faça uma função que receba a data atual (dia, mês e ano) e exiba-a na tela no formato
textual por extenso. Exemplo: Data: 01/01/2000, Imprimir: 1 de janeiro de 2000. -->
<?php

$listaMes = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

function dataAtual($dia, $mes, $ano){
	global $listaMes;
    $mesEscrito = $listaMes[$mes - 1];
    echo "{$dia} de {$mesEscrito} de {$ano}";
}

$dia = 5;
$mes = 10;
$ano = 2024;

dataAtual( $dia, $mes, $ano );