<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '74701010';
    $dbName =  'cadastro';

    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conexao->connect_error) 
    {
        echo "erro";
    }
    else
    {
        echo "Conexão realizada com sucesso";
    }
?>