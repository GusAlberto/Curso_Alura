<?php
#Strings numéricas

$anoNascimento = '1994';

$idade = 2022 - $anoNascimento;

echo  PHP_EOL . "Idade: $idade" ;

echo PHP_EOL;
echo "Seu ano de nascimento é realmente o que foi informado?";
echo PHP_EOL;

if ($anoNascimento == 1994) {
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}   