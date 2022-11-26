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

