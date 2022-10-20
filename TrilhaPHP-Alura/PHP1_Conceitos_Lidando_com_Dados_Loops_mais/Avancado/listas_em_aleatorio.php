<?php   
// Arrays = Vetores

/* Outra forma de identificar array: $idadeLista = array() ; */

$idadeForPeople = ['Igão' => 28,'Gustavo' =>  28, 'Bordoni' =>  20, 'Matheus' =>  22, 'João' => 19, 'Marcos' => 25];

$keys = array_keys($idadeForPeople);

$name = $keys[rand(0, count($keys) - 1)];

$Idade = $idadeForPeople[$name];

echo "Está é a idade de algum colaborador do setor de desenvolvimento: ";
echo "\n" ;
echo "$name tem $Idade anos";