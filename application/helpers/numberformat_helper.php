<?php

// Notação Francesa
function real($valor){
    $valor = number_format($valor, 2, ',', '.');
    return $valor;
}

// 1 234,56
