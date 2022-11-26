<?php

$nome = "Vinicius Dias";

//Dividir uma string, explode()
//Ela divide a string, e a transforma num array com os indices e os valores;
var_dump(explode(' ', $nome));

//Posso pegar o resultado desse explode, e transforma-lo em variaveis, usando o método list
list($nome, $sobrenome) = explode(' ', $nome);

echo "Nome: $nome; Sobrenome: $sobrenome";

//Outro exemplo, usando ',' como separador.
$csv = 'Vinicius Dias,24,vinicius@alura.com.br';
var_dump(explode(',', $csv));

//O explode tem um terceiro parametro, um numero maximo de indicies no array.
//No caso abaixo, o primeiro indice vai conter o numero 1, e o segundo, contera o restante da string: 2 3 4
$array = '1 2 3 4';
var_dump(explode(' ', $array, 2));