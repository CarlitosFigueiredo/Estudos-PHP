<?php

/**Outra forma de laço de repetição
 * 1 - 15 
 */
for ($i=1; $i < 16; $i++) {
    //Essa lógica vai exibir todos os números, menos o 13
    if($i != 13) {
        echo  $i.PHP_EOL;
    }
}

// Funciona da mesma forma
for ($i=1; $i < 16; $i++) {
    if($i == 13) {
        continue;
    }
    echo  $i.PHP_EOL;
}
// O break, no meio do método, para interação do loop

//A tambem o do while.

//Este código vai repetir uma vez, pois a condição apenas no final...
$i = 100;
do {
    echo "\$i is $i.";
} while( $i < 0 );