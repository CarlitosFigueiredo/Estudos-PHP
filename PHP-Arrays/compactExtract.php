<?php

//Pegar as chaves do array e transforma-las em arrays "já existentes"
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

//extract
//Pega a chave, transforma em variável, atribui o valor, com base nesse valor, e pronto.
extract($dados);
var_dump($nome, $nota, $idade);

//Ao contrário do extract, temos o compact
//Ele pega variaveis, e os transforma em um unico array, a chave erá o nome da variavel, e o valor, e o valor da variavel.
compact('nome', 'nota', 'idade');