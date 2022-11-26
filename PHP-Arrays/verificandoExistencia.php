<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

//Verifica a existencia de um [], no array...
array_key_exists('Vinicius', $notas);

//Isset, verifica se existe uma chave no array[], e se o valor contido nessa chave, => '', e diferente de null;
var_dump(isset($notas['Vinicius']));

//Quero verificar se um determinado array existe...
//Verifica se existe um valor, em um array, neste caso, eu passei um valor, e depois a variavel...
//return bool
//Obs, php usa a ideia de string númerica; Se o valor for '10', no caso a abaixo, ele vai retornar true,
//Eu posso passar um 3 parametro, o true no in_array, ai o retorno será false...
in_array(10, $notas);

//array_keys_exists = Verifica se a chave existe
//in_array = Verifica se o valor existe
//isset = Verifica se a chave existe e não é nula...
