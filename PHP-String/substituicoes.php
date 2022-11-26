<?php

//Quero substituir palavrão, por ***

$texto = "Texto com qualquer coisa poxa e caramba";

//str_replace, o que eu quero subs, pelo o que , onde...
echo str_replace('poxa', '***', $texto).PHP_EOL;

//Se eu quiser fazer isso em mais de uma palavra, passe um array no primeiro parametro.
echo str_replace(
    ['poxa', 'caramba'],
    '***',
    $texto
).PHP_EOL;

//Eu quero que cada palavra tenha uma substituição diferente, no segundo parametro, passe um array também.
//Se eu manter apenas um parametro no segundo array, a segunda palavra no primeiro array, irá sumir
echo str_replace(
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
).PHP_EOL;

//A função strtr, substitui não palavras, mas letras,
//Nesse caso, tudo que tiver a letra p, terá *, tudo que tiver o, terá *, e assim por diante.
strtr($texto, 'poxa', '***').PHP_EOL;

//Uma variação util disso, e passar um array como segundo parametro
strtr($texto, ['poxa' => 'p', 'caramba' => 'c']).PHP_EOL;

//Toma cuidado ao usar as duas funções, pois pode confundir

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, Isaid hello", $trans).PHP_EOL;

echo str_replace(["hello" => "hi"], ["hi" => "hello"], "hi all, Isaid hello").PHP_EOL;