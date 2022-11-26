<?php

//Apesar de ser uma string, o calculo abaixo foi feito corretamente, pois o php tem o conceito de string numérica.
//Mesmo se houver espaco ' ', o calculo vai funcionar.
//Agora se aparecer letra junto da string numero, ai apresenta erro.
//Não pode ter espaços entreo os numeros tipo = '1 9 9 7'; já apresenta  erro.
$anoNascimento = '1997';

$idade = 2022 - $anoNascimento;

echo $idade.PHP_EOL;