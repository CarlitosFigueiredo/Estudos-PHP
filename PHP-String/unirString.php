<?php

$telefones = [
    '(24) 9999 - 8888',
    '(35) 9999 - 4444',
    '(51) 9147 - 5762',
];

//Enquanto o explode, separa um string em um array,
//O implode, une um array em uma string.

var_dump(implode(', ', $telefones)).PHP_EOL;