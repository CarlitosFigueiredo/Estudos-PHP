<?php

$email = 'vinicius@alura.com.br';

//Pegar a palavra vinicius
//Se eu não informar o 3 atributo, ele irá pegar até o final da palarava
//E eu informar como segundo argumento, o 9, ele vai apresentar @alura.com.br
echo substr($email, 0, 8).PHP_EOL;
echo substr($email, 9).PHP_EOL;

$email = 'carlosyuri@alura.com.br';

//Ele ira buscar o arroba na string da variavel email.
//Com esse tipo de construção, eu não preciso me preocupar com o tamanho da string contida no email.
$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba).PHP_EOL;
echo substr($email, $posicaoDoArroba + 1).PHP_EOL;
