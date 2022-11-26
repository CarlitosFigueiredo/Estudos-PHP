<?php


//Formas de trabalhar com strings, que não tenham caracteres especiais. 
//strtoupper() Todos os caracteres em letra maiuscula
//strtolower() Todos os caracteres em letras minusculas

$string = 'Teste de integração com PHP';

//Melhor forma de trabalhar com strings que contenham caracteres especiais.
//Contar 
echo mb_strlen($string).PHP_EOL;

//Maiuscula
echo mb_strtoupper($string).PHP_EOL;

//Minuscula
echo mb_strtolower($string).PHP_EOL;

//Coloca a primeira letra de cada palavra em maiusculo.
echo mb_convert_case($string, MB_CASE_TITLE);