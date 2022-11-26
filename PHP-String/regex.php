<?php

//OBS: https://cursos.alura.com.br/course/php-strings-manipulando-textos-php/task/109743
//Site para testar expressões regulares: https://regex101.com/
//Ex de válidador de CPF: https://cursos.alura.com.br/course/php-strings-manipulando-textos-php/task/110713

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach ($telefones as $telefone) {

    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $matches
    );

    if ($telefoneValido) {
        echo 'Telefone válido'.PHP_EOL;
    }else {
        echo 'Telefone inválido'.PHP_EOL;
    }

    //preg_replace() Um validador que substitui algo no array
    echo preg_replace(
        $regex,
        '(xx) \2',
        $telefone.PHP_EOL
    );
}

//Validador de CPF
// $cpfValido = preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/', $cpf);