<?php

// Nessa pilha #05 vamos criar e lançar uma exceção para os erros

function funcao1()
{
    echo 'Entrei na função 1...' . PHP_EOL;

    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
        echo 'Motivo do erro: ' . $erroOuExcecao->getMessage() . PHP_EOL;
        echo 'Linha do erro: ' .  $erroOuExcecao->getLine() . PHP_EOL;
        echo 'Caminho de execução do erro: ' . PHP_EOL .  $erroOuExcecao->getTraceAsString() . PHP_EOL;

        throw new RuntimeException(
                'Exceção foi tratada, mas, pega aí',
                1,
                $erroOuExcecao
        );
    }

    echo 'Saindo da função 1 !' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2...' . PHP_EOL;

    throw new RuntimeException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2 !' . PHP_EOL;
}

echo 'Iniciando o programa principal :D' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal :)' . PHP_EOL;
