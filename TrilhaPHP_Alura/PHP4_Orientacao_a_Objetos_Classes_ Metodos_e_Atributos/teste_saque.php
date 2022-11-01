<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta1 = new ContaCorrente(
    new Titular(
        new CPF('321.654.987-10'),
        'Alberto Souza',
        new Endereco
        ('Belo Horizonte', 'Santa Cruz', 'Rua do Meio', '100')
    )
);

$conta2 = new ContaPoupanca(
    new Titular(
        new CPF('321.654.987-10'),
        'Silva Bento',
        new Endereco
        ('Belo Horizonte', 'Santa Cruz', 'Rua da frente', '200')
    )
);

$conta1->deposita(500);
$conta1->transfere(100, $conta2);