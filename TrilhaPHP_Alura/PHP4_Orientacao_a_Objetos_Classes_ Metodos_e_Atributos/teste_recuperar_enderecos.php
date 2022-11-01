<?php

use Alura\Banco\Modelo\Endereco;

require_once 'src/Modelo/Endereco.php';

$umEndereco = new Endereco(
    'BH',
    'Floresta',
    'Sapucaí',
    '100'
);

$outroEndereco = new Endereco(
    'Contagem',
    'Centro',
    'RUA',
    '200'
);

echo $umEndereco->recuperaCidade() . PHP_EOL;
echo "Outro endereço: ", $outroEndereco. PHP_EOL;
