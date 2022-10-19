<?php

// Importando os dados dos arquivos externos onde ficam as classes
require 'conta.php';
require 'banco.php';

// Criando novas contas(objetos), depois adicionando informações às mesmas
$umaConta = new Conta(); // saldo 200
$umaConta -> saldo = 200;

$segundaConta = new Conta(); // saldo 0
$segundaConta -> nomeTitular = 'Gustavo';

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


foreach ($contaInter as $cadaConta => $conta) {
    echo $conta->saldo = 200;
};