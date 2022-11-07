<?php

error_reporting(E_ALL);

//Configuração para ambiente de Desenvolvimento 
ini_set('display_errors', 1);
ini_set('log_errors', 0);

//Configuração para ambiente de Produção 
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/var/log/minha-aplicacao');

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: isso é perigoso\r";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso...";
            break;
    }
});


// Erros que trataremos com a função para modificar o nome do erro
echo $variavel;
echo $array[12];

echo CONSTANTE;