<?php

//Consigo uma instancia do diretório atual,
$diretorioAtual = dir('.');

//E assim que eu consigo saber o diretório atual.
echo $diretorioAtual->path . PHP_EOL;

//Enquanto eu conseguir ler algo nesse diretorio, eu vou exibir na tela.
while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo.PHP_EOL;
}