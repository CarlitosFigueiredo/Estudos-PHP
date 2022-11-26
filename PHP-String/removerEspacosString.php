<?php

$email = ' yuri@alura.com.br ,carlos@alura.com.br';

//Para remover os espaços que vemos na string acima, trim()
//Só que ele limpa os espacos no inicio e no final, não no meio

echo trim($email).PHP_EOL;

//O segundo parametro, é o que eu quero remover das pontas da minha string
$csv = ',.vinicius dias, 24.,';

echo trim($csv, ',.').PHP_EOL;

//Quero limpar só o inicio da minha string, o lado esquerdo
//ltrim()
echo ltrim($csv, ',.').PHP_EOL;

//Quero limpar o final da mimha string, o lado direto
//rtrim()
echo rtrim($csv, ',.').PHP_EOL;