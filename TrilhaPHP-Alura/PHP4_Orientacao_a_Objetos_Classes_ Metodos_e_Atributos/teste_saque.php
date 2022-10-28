<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Conta, CPF, Endereco};

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