<?php

//Heredoc = " "
//nowdoc = ' ' 

//Essa forma de tratar string <<<delimitador -------- delimitador, se eu acrescentar tabe no meio, vai apresentar tab
function geraEmail(string $nome): void
{
                    //Aqui, se eu colocar '' na palavra liimitadora, ela ira desconsicerar a $nome e vai exibir $nome
    $conteudoEmail = <<<fim
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}


    {assinatura}

    fim;

    echo $conteudoEmail;
}

geraEmail('Yuri');