<?php

$contasCorrentes = [
    12345678010 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12325678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//Se o indice, se manter um inteiro, o php ira pegar o maior indice e acrescentara, mais um!
//Se o indice, for uma string, ele ira coolocar zero(0), nesse caso, você deve colocar o nome da string.

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

//Exibindo o CPF a partir da chave de um array();
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}