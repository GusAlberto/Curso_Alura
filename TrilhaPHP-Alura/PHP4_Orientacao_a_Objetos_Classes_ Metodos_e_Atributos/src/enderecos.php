<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('BH', 'Floresta', 'Sapucaí', '100');
$outroEndereco = new Endereco('Contagem', 'Centro', 'Street', '200');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
