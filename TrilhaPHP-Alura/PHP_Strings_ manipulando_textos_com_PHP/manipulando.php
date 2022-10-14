<?php

$nome = 'Gustavo Alberto';

$ehDaMinhaFamilia = str_contains($nome, 'z');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
