<?php

$senha = '123';

// Eu consigo exibir o primeiro caracter da string, como se fosse um array, mas não consigo percorrer ele em um foreach
// $senha[0];
// foreach ($senha as $char) {
//     echo $char.PHP_EOL;
// }

//Mas consigo fazer isso em um for; que loucura cara!
for ($i=0; $i < 3; $i++) { 
    echo $senha[$i].PHP_EOL;
}

//Ele me informa o tamanho da minha string, mas em bytes
//Se tiver uma senha com caracteres especiais, vamos ter um número maior
strlen($senha);

if(strlen($senha)) {
    echo 'Senha Insegura'.PHP_EOL;
}

//Para contar realmente os número de caracteres, independente de ter ou não caracteres especias, mb_strlen()   <-----------------------
//Para verificar, se uma extensão esta ou não instalada no php, e só no termininal colocar php -m
