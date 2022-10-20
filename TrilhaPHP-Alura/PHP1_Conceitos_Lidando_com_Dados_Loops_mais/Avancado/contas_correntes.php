<?php 
//Arrays associativos

$conta1 = [
    'titular' => 'Gustavo',
    'saldo' => 800
];
$conta2 = [
    'titular' => 'Gabriela',
    'saldo' => 4000
];
$conta3 = [
    'titular' => 'Marcia',
    'saldo' => 5000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

/*Para cada conta corrente exibir seu titular*/ 
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}