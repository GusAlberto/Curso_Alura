<?php

// Nessa pilha #07 vamos pegar todos as exceções e erros ao importar a classe Throwable

function funcao1()
{
    echo 'Entrei na função 1...' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $problema) {
        echo PHP_EOL;
        echo '*Opa... Aconteceu algum problema!*' . PHP_EOL;
        echo 'Motivo do problema: ' 
         . $problema->getMessage() . PHP_EOL;
        echo 'Linha do problema: ' 
         . $problema->getLine() . PHP_EOL;
        echo "Caminho de execução do problema: \r" 
         . $problema->getTraceAsString() . PHP_EOL;
    }
    
    echo "\rSaindo da função 1 !" . PHP_EOL;
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
