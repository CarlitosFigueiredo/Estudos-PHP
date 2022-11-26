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
];

//A ideia e ver quem falta, de um array a outro, e pegar apenas o valor das 'chaves'

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

//Retorna apenas os valores das chaves... Aqui eu recupero a chave 
var_dump(array_keys($alunosFaltantes)).PHP_EOL;

//Retorna apenas os valores dos indices... Aqui eu recupero o valor da chave...
var_dump(array_values($alunosFaltantes)).PHP_EOL;

//Da para combinar essas informações...
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//A ideia aqui e inverter, eu quero a chave como a nota, e o valor da chave, o nome do aluno...
//O nome da função diz tudo...
//Para usar o array_combine, os dois arrays, precisan ser do mesmo tamanho...
var_dump(array_combine($notasAlunos, $nomesAlunos));

//Quero inverter, pegar um array e transformar a chave e um valor, e vice-versa
//array_flip() faz isso.