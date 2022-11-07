<?php

// Nessa pilha #06 estamos pegando as exceptions e os erros separadamente

function funcao1()
{
    echo 'Entrei na função 1...' . PHP_EOL;

    try {
        funcao2();
    } catch (Exception $excecao) {
        echo 'Motivo do erro: ' . $excecao->getMessage() . PHP_EOL;
        echo 'Linha do erro: ' .  $excecao->getLine() . PHP_EOL;
        echo 'Caminho de execução do erro: ' . PHP_EOL .  $excecao->getTraceAsString() . PHP_EOL;
    } catch (Error $erro) {
        echo $erro->getMessage() . PHP_EOL;
        $erro->getTraceAsString();
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
