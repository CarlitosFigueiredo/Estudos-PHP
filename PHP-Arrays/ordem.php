<?php

//sort ordenar os dados do array, ele ordena os dados do menor ao maior, e em string, ele faz isso em ordem alfabetica...


$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desornadas: ';
var_dump($notas);

echo 'Ordenadas: ';
var_dump($notasOrdenadas);

echo "--------------------------------------------------".PHP_EOL ;

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ]
];

//Aqui é auto explicativo. 
function ordenaNotas (array $nota1, array $nota2): int
{
    //Toto esse codigo ordena os dados do array em ordem descrecente...
    if ($nota1['nota'] > $nota2['nota'] ){
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

function ordenaNotas2 (array $nota1, array $nota2): int
{
    //Neste caso ele me retorna o array em ordem crescente...
    //Se quiser o contrario, e só inverter a ordem...
    return $nota1['nota'] <=> $nota2['nota'];
}


//usort espera por paramentro, um array e uma função de callback que ensina a ela como ordenar os dados do array.
usort($notas, 'ordenaNotas2');
var_dump($notas);