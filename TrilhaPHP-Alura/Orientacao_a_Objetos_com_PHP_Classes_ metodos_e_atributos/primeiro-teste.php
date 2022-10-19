<?php

// Importando os dados dos arquivos externos onde ficam as classes
require 'classes_conta.php';
require 'classes_banco.php';

// Criando novas contas(objetos), depois adicionando informações às mesmas
$umaConta = new Conta(); // Criando conta sem nenhum dado

$segundaConta = new Conta(); // Criando segunda conta sem nenhum dado
$segundaConta -> nomeTitular = 'Gustavo'; // Definindo nome da segunda conta

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