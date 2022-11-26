<?php

//file = pega cada linha do arquivo, com um indice do array
$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

//Criando um arquivo.csv e w, determinando que vou escrever nele.
$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];

    // fwrite($arquivoCsv, implode(',', $linha));
    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];

    // fwrite($arquivoCsv, implode(',', $linha));
    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);

//Se tem o fput, tem o fgetcsv que lê um arquivo em .csv em php
