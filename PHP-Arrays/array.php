<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
];

krsort($notas);
var_dump($notas);

//Verificar o tipo da variavel...
echo gettype($notas). PHP_EOL;

if (gettype($notas) === 'array') {
    echo 'Sim, é um array'. PHP_EOL;
}

//Simplesmente verifica se a variavel é um array ou não.
is_array($notas);

//Me retorna verdadeiro, se este array é numero, se ele começa em [0], e os indices são crescentes...
// Se no array, apresentar [0] [1] [3] o retorno será false, pois os indices não são seguenciais... 
array_is_list($notas);