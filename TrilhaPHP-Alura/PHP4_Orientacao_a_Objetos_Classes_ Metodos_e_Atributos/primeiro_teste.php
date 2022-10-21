<?php

/* Fazendo observações sobre como funciona o sistema
~~~~~Explanation topics~~~~~
1- 
*/

// Importando os dados dos arquivos externos onde ficam as classes
require_once 'src/classe_conta.php';
require_once 'src/classe_banco.php';

// SAÍDA DE DADOS
// Criando novas contas(objetos), depois adicionando informações às mesmas
$primeiraConta = new Conta('123.456.789-10', 'Gustavo'); // Criando primeira conta
$primeiraConta->depositar(1500);
//$primeiraConta->setNomeTitular('First Name');// Definindo nome da primeira conta sem construtor

$segundaConta = new Conta('123.456.987-10', 'Alberto'); // Criando segunda conta
//$segundaConta->setNomeTitular('Second name'); // Definindo nome da primeira conta sem construtor

$terceiraConta = new Conta('123.789.456-10', 'Hello World');
$terceiraConta->depositar(300);

echo PHP_EOL;

// Mostrando dados das contas 

//Conta 1
echo "Conta 1" . PHP_EOL;
echo $primeiraConta->mostraTitular() . PHP_EOL;
echo $primeiraConta->mostraCpf() . PHP_EOL;
echo $primeiraConta->mostrarSaldo() . PHP_EOL;

echo PHP_EOL;

//Conta 2
echo "Conta 2" . PHP_EOL;
echo $segundaConta->mostraTitular() . PHP_EOL;
echo $segundaConta->mostraCpf() . PHP_EOL;
echo $segundaConta->mostrarSaldo() . PHP_EOL;

echo PHP_EOL;

//Conta 3
echo "Conta 3" . PHP_EOL;
echo $terceiraConta->mostrarSaldo();
echo PHP_EOL;

// Printando o número de contas na memória
echo PHP_EOL;
// Antes de printar retirar a segunda conta da memória com Unset
unset ($segundaConta);
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