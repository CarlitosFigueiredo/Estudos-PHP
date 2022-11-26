<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

//Quero remover, da para fazer na mão; Conforme exemplo abaixo.
$alunos2021[] = 'Luiz';

//Quero adicionar 
//Adiciona esses dados no final do array
array_push($alunos2021, 'Alice', 'Bob', 'Charlie');

var_dump($alunos2021);

//Obs
//array_unshift() Adiciona algum dado, no INICIO DO ARRAY.
//array_shift() retorna o primeiro elemento de um array, tira ele do array de referencia, e o retorna.
//Ao contrario do array_shift(), o array_pop() pega o ultimo elemento.