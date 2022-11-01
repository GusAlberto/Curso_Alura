<?php

require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/CPF.php';
require_once 'src/Modelo/Funcionario/Funcionario.php';
require_once 'src/Interfaces/Autenticavel.php';
require_once 'src/Banco/Service/Autenticador';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor ('Brabo da Silva',
             new CPF ('456.789.456-10'), 
             10000
            );

$autenticador->tentaLogin($umDiretor, '1234');