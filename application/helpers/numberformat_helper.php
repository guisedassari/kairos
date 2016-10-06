<?php

// Notação Francesa
function real($valor){
    $valor = number_format($valor, 2, ',', '.');
    return $valor;
}

function calcDizimo($valor) {
	return ( 10 / 100 ) * $valor;
}