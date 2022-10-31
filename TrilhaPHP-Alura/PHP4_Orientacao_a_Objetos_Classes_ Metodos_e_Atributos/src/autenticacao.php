<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Brabo da Silva',
             new CPF('456.789.456-10'), 
             10000
            );

$autenticador->tentaLogin($umDiretor,'1234');

