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

//Para 'desempacotar os dados de um array', usa 0 ...
//Nâo vou ter problemas de perder valores, fazendo isso, literalmente ele une os dois dados num novo array...

$alunos2022 = [...$alunos2021, ...$novosAlunos];

var_dump($alunos2022);