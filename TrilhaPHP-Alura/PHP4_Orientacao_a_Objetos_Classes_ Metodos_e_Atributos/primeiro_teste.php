<?php

/*
- 
*/

// Importando os dados dos arquivos externos onde ficam as classes
require_once 'src/classe_conta.php';
require_once 'src/classe_banco.php';

// Criando novas contas(objetos), depois adicionando informações às mesmas
$umaConta = new Conta(); // Criando conta sem nenhum dado
$umaConta->setNomeTitular('First Name');// Definindo nome da primeira conta

$segundaConta = new Conta(); // Criando segunda conta sem nenhum dado
$segundaConta->setNomeTitular('Second name'); // Definindo nome da segunda conta

$terceiraConta = new Conta();
$terceiraConta->setNomeTitular('Hello World');
$terceiraConta->depositar(300);


//SAÍDA DE DADOS
//Mostrar saldo da conta 3
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