<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
]; 

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

//Unindo dois arrays, em um novo array!
//Os indices do segundo array não seram conversados; no caso abaixo, teremos um novo array de 1 ao 7...
$alunos2022 = array_merge($alunos2021, $novosAlunos); // <-Função util
var_dump($alunos2022);

//Curiosamente, eu posso unir arrays, usando o operador '+', tipo isso
//Se esses arrays, os indices estiverem bem organizados, tipo: [1][2] + [3][4], vai unir os dois 
//Obs importante, se esses arrays, não tirevem indice explicito, esse tipo de operação não vai acontecer, o segundo array sera ignorado, pois seu indice esta ocupado... Ele vai apresentar apenas os dados do primeiro array...
$array = $array1 = $array2; // [1][2][3][4]