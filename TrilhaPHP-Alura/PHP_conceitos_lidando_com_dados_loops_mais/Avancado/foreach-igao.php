<?php 
function montarDadoConta(array $conta,string $cpf):string{

    $titularConta = $conta['titular'];
    $titularCpf = $cpf;
    $line = "Nome Responsável: $titularConta CPF: $titularCpf". PHP_EOL;
    return $line;
    
}

$contasCorrentes = [

   12345678912 => [
    'titular' => 'Gustavo',
    'saldo' => 800
    ],

   12345678913 => [
    'titular' => 'Gabriela',
    'saldo' => 4000
    ],

   12345678914 => [
    'titular' => 'Marcia',
    'saldo' => 5000
    ]
];

//$const = conta['titular'];

foreach ($contasCorrentes as $cpf => $conta) {
    $line = montarDadoConta($conta,$cpf);
    echo($line);
}

