<?php

/**
 * > maior
 * < menor 
 * == comparar. 
 * ||/or ou 
 * >= maior ou iqual
 * <= menor ou iqual
 * and/&& e 
 * != diferente
 */

$idade = 21;
$acompanhado = true;
$nome = "Vinicius";

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos, acompanhado.". PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
}elseif ($idade >= 16 && $acompanhado = true) {
    echo "Você tem $idade anos, esta acompanhado(a), então pode entrar.";
}else
    echo "você só tem $idade anos. Você não pode entrar.";
    //Quando vocÊ tem apenas uma linha de código, não tem problema tirar as {}, mas para tornar a leitura do código mais agradável, eu as deixo.

/**
 * A a possibilidade de utilizar o valor ternario;
 * $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
 */

$idade = 15;
$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;