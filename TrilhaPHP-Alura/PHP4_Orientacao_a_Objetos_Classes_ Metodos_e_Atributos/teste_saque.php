<?php

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente (
    new Titular(
        new CPF('321.654.987-10'),
                'Alberto Souza',
        new Endereco('Belo Horizonte', 'Santa Cruz', 'Rua do Meio', '100')
    )
);

$conta->deposita(500);
$conta->transfere(100, $conta);