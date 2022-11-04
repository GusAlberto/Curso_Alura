<?php

// Nessa pilha estamos utilizando o multi-catch e tratando os múltiplos erros

function funcao1()
{
    echo 'Entrei na função 1...' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
        echo 'Motivo do erro: ' . $erroOuExcecao->getMessage() . PHP_EOL;
        echo 'Linha do erro: ' .  $erroOuExcecao->getLine() . PHP_EOL;
        echo 'Caminho do erro: ' . PHP_EOL .  $erroOuExcecao->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1 !' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2...' . PHP_EOL;

    /*
    Colocando dados inválidos para travar a execução do programa
    E cair no Try catch  
    */
    $divisao = intdiv(5,0);
    $arrayFixo = new SplFixedArray(size: 2);
    $arrayFixo[3] = 'Valor';


    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2 !' . PHP_EOL;
}

echo 'Iniciando o programa principal :D' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal :)' . PHP_EOL;
