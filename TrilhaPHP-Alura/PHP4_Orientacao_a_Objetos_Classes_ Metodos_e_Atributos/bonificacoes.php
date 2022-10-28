<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario (
    'Gustavo Bebeto',
    new CPF('456.789.123.10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario (
    'Maria Gerente',
    new CPF('789.123.456.10'),
    'Gerente',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);

echo $controlador->recuperaTotal();