<?php

/**
 * Dá para realizar somas, usando dados de outras variáveis.
 */
$idade = 25;
$idadeDaqui10Anos = $idade + 10;

/**
 * Dá para realizar subtrações também.
 */
$idadeHa5AnosAtras = $idade - 5;

/**
 * .PHP_EOL = Quebra de linha em php.
 */

echo $idadeDaqui10Anos.PHP_EOL;
echo $idadeHa5AnosAtras.PHP_EOL;

/**
 * Outras operações:
 */

//Não cria variável com Ç, e com sinais. O conceito "padrão", é criar assim as variáveis.
 $soma = 2 + 2;
 $subtracao = 2 - 2;
 $multiplicacao = 2 * 2;
 $divisao = 2 / 2;

 $doisAoCubo = 2 ** 3;

 $restoDaDivisao = 10 % 3;

 echo $restoDaDivisao;