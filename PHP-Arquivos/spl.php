<?php

$arquivoCursos = new SplFileObject('cursos.csv');

//Enquanto eu não chego no final, eu exibo os dados.
while (!$arquivoCursos->eof()) {

    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]).PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');

