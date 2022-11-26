<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

//Ele cria um novo array, mostrando a diferença entre um e outro...
//Ele compara apenas os valores, não a chave em si
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//array_diff_key() Comparação utilizando apenas as chaves...
//array_diff_assoc() Esse compara tanto a chave, como o valor do array... <- Muito util