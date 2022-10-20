<?php 
/* Entendendo o problema:
- Identificar o índice do array pelo CPF pois não irá repetir
*/

include 'funcoes.php';

function NAO_RETORNA_NADA($nomeTitular, $cpf, $tipoCartao) 
{
    
   return " 
     _____________________________________
    | 
    |Nome cliente: $nomeTitular            
    |Este é seu CPF: $cpf                 
    |Classificação de cartão: $tipoCartao  
    |_____________________________________
    
    ";
}

$contaCorrentes = [

    12044761602 => [
        'titular'=>'Maria',
        'saldo'=>10000,
        'cartao'=> 'Platinum'
    ],

    29568935649 => [
        'titular'=>'Jose',
        'saldo'=>300,
        'cartao'=> 'Gold'
    ],

    12044761603 => [
        'titular'=>'Gustavo',
        'saldo'=>100,
        'cartao'=> 'Black'
    ],

    12345678912 => [
        'titular'=>'Julius',
        'saldo'=>600,
        'cartao'=> 'Start'
    ],
];

foreach ($contaCorrentes as $cpf => $cliente) {
//Para cada uma das Contas Correntes como CPF identifique como Cliente 

    //echo "Número CPF: $conta" . " Nome cliente: " . $cliente['titular'] . PHP_EOL;

    $nomeTitular = $cliente ['titular'];
    $tipoCartao = $cliente ['cartao'];

    $message = mostrarDados($nomeTitular, $cpf, $tipoCartao);
    
    echo $message;
    //echo mostrarDados($nomeTitular, $cpf, $tipoCartao);  
}