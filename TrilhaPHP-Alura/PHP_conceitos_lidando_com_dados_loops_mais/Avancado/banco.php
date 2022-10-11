<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Gustavo Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

//Como adicionar valores no array
$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.456.689-11'] = depositar(
    $contasCorrentes['123.456.689-11'],
    800
);

$contasCorrentes['123.456.689-11'] = depositar(
    $contasCorrentes['123.456.689-11'],
    900
);

$contasCorrentes['123.456.689-11'] = depositar(
    $contasCorrentes['123.456.689-11'],
    5000
);

//Excluir uma posição do array com a função unset
unset($contasCorrentes['123.256.789-12']);

//titularComLetrasMaiusculas($contasCorrentes['123.456.689-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}