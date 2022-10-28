<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Desenvolvedor,Diretor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor (
    'Gustavo Bebeto',
    new CPF('456.789.123-10'),
    'Desenvolvedor',
    1000
);

//Utilizando a função para aumentar o salário do desenvolvedor
$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente (
    'Maria Gerente',
    new CPF('789.123.456-10'),
    'Gerente',
    5000
);

$umDiretor = new Diretor (
    'Brabo Diretor',
    new CPF('456.123.789-10'),
    'Gerente',
    25000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->getTotal();