
<?php

use Alura\Banco\Modelo\Endereco;

require 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro Qualquer', 
    'minha rua',
    '71B'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua ai',
    '50',
);

$umEndereco->cidade = "Nova Cidade";

echo $umEndereco.PHP_EOL;
echo $outroEndereco;