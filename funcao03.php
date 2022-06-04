<?php

$notasCursoA = [
    10.5,
    7,
    8,
    4
];

$notasCursoB = [
    6.5,
    4.1,
    2,
    10
];

//Funcao do tipo array
function mediaNotas(array $notas):float 
{
    // $totalDasNotas = 0;
    // $quantidadeDasNotas = 0;

    // foreach ($notas as $nota){
    //     $totalDasNotas += $nota;
    //     $quantidadeDasNotas ++;
    // }

    return array_sum($notas) / count($notas); //usando a funções nativas do php, todo codigo comentado acima pode ser substituido por essa linha
}

echo mediaNotas($notasCursoA).PHP_EOL;
echo mediaNotas($notasCursoB).PHP_EOL;