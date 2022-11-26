<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

//Eu quero saber, quem no array, tirou 10.
//Return valor da []
//Se não encontrar: Return bool(false)
echo array_search(10, $notas);

