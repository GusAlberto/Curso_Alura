<?php

/* Fazendo observações sobre como funciona o sistema
~~~~~Explanation topics~~~~~
1- 
*/

// Importando os dados dos arquivos externos onde ficam as classes
require_once 'src/classe_conta.php';
require_once 'src/classe_endereco.php';
require_once 'src/classe_titular.php';
require_once 'src/classe_cpf.php';


// SAÍDA DE DADOS
// Criando novas contas(objetos), depois adicionando informações às mesmas
$endereco = new Endereco ('Belo Horizonte', 'Santa Cruz', 'Rua A', '100');
$gustavo = new Titular (new CPF('123.456.789-10'), 'Gustavo', $endereco);
$primeiraConta = new Conta($gustavo); // Criando primeira conta
$primeiraConta->depositar(1500);
//$primeiraConta->setNomeTitular('First Name');// Definindo nome da primeira conta sem construtor

$alberto = new Titular (new CPF('123.456.789-10'), 'Alberto', $endereco);
$segundaConta = new Conta($alberto); // Criando segunda conta
//$segundaConta->setNomeTitular('Second name'); // Definindo nome da primeira conta sem construtor

$endereco2 = new Endereco ('Belo Horizonte', 'Santa Cruz', 'Rua A', '100');
$helloworld = new Titular (new CPF('123.789.456-10'), 'Hello World', $endereco2);
$terceiraConta = new Conta($helloworld);
$terceiraConta->depositar(300);

echo PHP_EOL;

// Mostrando dados das contas

var_dump($primeiraConta) . PHP_EOL;

//Conta 1
echo "Conta 1" . PHP_EOL;
echo "Nome titular da conta: ", $primeiraConta->mostrarTitular() . PHP_EOL;
echo "O CPF da conta é:", $primeiraConta->mostrarCpf() . PHP_EOL;
echo "O saldo da conta é de: R$", $primeiraConta->mostrarSaldo() . "\r ;)" . PHP_EOL;
//echo 'O endereço do titular: ', $primeiraConta->mostrarEndereco() . PHP_EOL;

echo PHP_EOL;

//Conta 2
echo "Conta 2" . PHP_EOL;
echo "Nome titular da conta: ", $segundaConta->mostrarTitular() . PHP_EOL;
echo "O CPF da conta é:", $segundaConta->mostrarCpf() . PHP_EOL;
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

echo "Número de contas na classe(ativas): ", Conta::mostrarNumeroDeContas();

;

/*
// Criando arrays para cada banco
$contaNubank = [];
$contaInter = [];

// Adicionando posições no array para criar contas/objetos
$contaInter [] = new Conta();
$contaInter [] = new Conta();
$contaInter [] = new Conta();
$contaInter [] = new Conta();
$contaInter [] = new Conta();
$contaInter [] = new Conta(); 
$contaInter [] = new Conta();
$contaInter [] = new Conta();
$contaInter [] = new Conta();
*/