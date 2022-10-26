<?php

/* Fazendo observações sobre como funciona o sistema
~~~~~Explanation topics~~~~~
1- 
2- Utilizamos AutoLoader pra carregar as classes através de um padrão PSR-4
*/

// Importando os dados dos arquivos externos onde ficam as classes
//require_once 'autoload.php';

require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/CPF.php';

require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Conta/Conta.php';

require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Funcionario.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

/*---=== SAÍDA DE DADOS ===---*/

// Criando novos Objetos (Endereço, Titular, Conta)

$endereco1 = new Endereco ('Belo Horizonte', 'Santa Cruz', 'Rua A', '100');
$gustavo = new Titular (new CPF ('123.456.789-10'), 'Gustavo', $endereco1);
$primeiraConta = new Conta ($gustavo); // Criando primeira conta
$primeiraConta->depositar(1500);
//$primeiraConta->setNomeTitular('First Name');// Definindo nome da primeira conta sem construtor

$endereco2 = new Endereco ('Belo Horizonte', 'Santa Cruz', 'Rua B', '200');
$alberto = new Titular (new CPF ('123.456.789-10'), 'Alberto', $endereco2);
$segundaConta = new Conta ($alberto); // Criando segunda conta
//$segundaConta->setNomeTitular('Second name'); // Definindo nome da primeira conta sem construtor

$endereco3 = new Endereco ('Belo Horizonte', 'Santa Cruz', 'Rua C', '300');
$helloworld = new Titular (new CPF ('123.789.456-10'), 'Hello World', $endereco3);
$terceiraConta = new Conta($helloworld);
$terceiraConta->depositar(300);

echo PHP_EOL;

// Mostrando dados das contas
// var_dump($primeiraConta) . PHP_EOL;

//Conta 1
echo "Conta 1" . PHP_EOL;
echo "Nome titular da conta: ", $primeiraConta->mostrarTitular() . PHP_EOL;
echo "O CPF da conta é: ", $primeiraConta->mostrarCpf() . PHP_EOL;
echo "O saldo da conta é de: R$", $primeiraConta->mostrarSaldo() . "\r ;)" . PHP_EOL;
//echo 'O endereço do titular: ', $primeiraConta->mostrarEndereco() . PHP_EOL;

echo PHP_EOL;

//Conta 2
echo "Conta 2" . PHP_EOL;
echo "Nome titular da conta: ", $segundaConta->mostrarTitular() . PHP_EOL;
echo "O CPF da conta é: ", $segundaConta->mostrarCpf() . PHP_EOL;
echo "O saldo da conta é de: R$", $segundaConta->mostrarSaldo() . "\r ;)" . PHP_EOL;
echo PHP_EOL;

//Conta 3
echo "Conta 3" . PHP_EOL;
echo "O saldo da conta é de: R$", $terceiraConta->mostrarSaldo(). "\r ;)" . PHP_EOL;
echo PHP_EOL;

// Printando o número de contas na memória
echo PHP_EOL;

// Antes de printar retirar a segunda conta da memória com Unset
echo "Você excluiu uma das contas ativas! \r"; unset($terceiraConta);

echo "Número de contas ativas na class Conta: ", Conta::mostrarNumeroDeContas();

;