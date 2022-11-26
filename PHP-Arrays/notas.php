<?php

$notas = [
    10,
    8,
    9,
    7,
    6,
];

//Ordena os dados do array em ordem asc.
sort($notas);

echo "-----------------------" . PHP_EOL;
//Faz o contrario, ordena em ordem desc
rsort($notas);
var_dump($notas);

echo "-----------------------" . PHP_EOL;

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
];

// asort($notas);
// var_dump($notas);

//Ele mantem o indici dos arrays, e me apresenta os dados usando a mesma lógica de antes: ordenando pelos valores das chaves.
// asort asc
//arsort desc
arsort($notas);
var_dump($notas);


//Quero ordenar pelas chaves, não pelos valores. 
echo "-----------------------" . PHP_EOL;

//Ordem alfabética...
ksort($notas);
var_dump($notas);

//O contrário
krsort($notas);
var_dump($notas);

