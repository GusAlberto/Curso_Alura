<?php
/*
Quando queremos executar um código mesmo após a instrução return, que pode estar no tryou no catch.
*/

try {
    echo 'Executando' . PHP_EOL;
    throw new Exception ('Exceção aqui');
} catch(Throwable $a) {
    echo 'Caindo no catch' . PHP_EOL;
} finally {
    echo 'Finally' . PHP_EOL ;
}

echo PHP_EOL;

//---------------------------------------------------------

$arquivo = fopen('temp.txt', 'w');
try {
    fwrite($arquivo, 'Qualquer coisa');
} catch(Throwable $b) {
    echo 'Erro ao escrever no arquivo' . PHP_EOL;
} finally {
    fclose($arquivo); ;
}

//---------------------------------------------------------

function A(): int
{
    try {
        echo "Código vai retornar um número inteiro";
        return 100;
    } catch (Throwable $variavel) {
        echo "Problema";
        return 1;
    } finally {
        echo "\rFinal da função.\r";
    }

}

echo A();