<?php

//Uma forma segura de trablhar e evitar código malicioso!

//Imagine que esta informação vem de um usuario, no cenario abaixo, a string recebeu um script no meio
$nome = 'cam" /> <script>alert("teste");</script>';

?>

<!-- Está função, acrescenta \\ na variavel, evitando que este problema ocorra
addslashes()> -->

<input type="text" name="<?php echo addslashes($nome); ?>" />

<!-- Outra função de segurança  -->
<?php
    //htmlentities()
    //Evita que código html seja executado
?>