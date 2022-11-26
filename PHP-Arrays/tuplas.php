<?php

//O array dados, num primeiro momento não tem sentido.
//A função list(), cria novas variáveis, a partir dos dados do array dados.

//Da para fazer assim: 
[$nome, $nota, $idade] = $dados;

$dados = ['Vinicius', 10, 24];
list($nomes, $nota, $idade) = $dados;


//Se o array apresentar chaves.
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

//E só declarar as chaves, que as coisas vão funcionar normalmente.
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;