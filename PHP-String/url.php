<?php

$url = 'https://alura.com.br';

//Verificar se a string contida na variavel url, começa com https
//Return bool
var_dump(str_starts_with($url, 'https'));


//Verifica se a string contida na variavel url, termina com .br
//Return bool
var_dump(str_ends_with($url, '.br'));