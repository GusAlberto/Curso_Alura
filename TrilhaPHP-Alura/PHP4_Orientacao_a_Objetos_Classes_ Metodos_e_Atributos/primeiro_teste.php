<?php

/*
- 
*/
// Importando os dados dos arquivos externos onde ficam as classes
require_once 'src/classe_conta.php';
require_once 'src/classe_banco.php';

// SAÍDA DE DADOS
// Criando novas contas(objetos), depois adicionando informações às mesmas
$umaConta = new Conta('123.456.789-10', 'Gustavo'); // Criando primeira conta
$umaConta->depositar(1500);
//$umaConta->setNomeTitular('First Name');// Definindo nome da primeira conta sem construtor

$segundaConta = new Conta('123.456.987-10', 'Alberto'); // Criando segunda conta
//$segundaConta->setNomeTitular('Second name'); // Definindo nome da primeira conta sem construtor

$terceiraConta = new Conta('123.789.456-10', 'Hello World');
$terceiraConta->depositar(300);

echo PHP_EOL;

//Mostrar dados das contas 

//Conta 1
echo $umaConta->mostraTitular() . PHP_EOL;
echo $umaConta->mostraCpf() . PHP_EOL;
echo $umaConta->mostrarSaldo() . PHP_EOL;

echo PHP_EOL;

//Conta 3
echo $terceiraConta->mostrarSaldo();
echo "\r";

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