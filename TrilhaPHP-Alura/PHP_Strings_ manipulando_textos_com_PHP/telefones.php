<?php

$telefones = ['(31)9999-8888', '(31)8888-9999', '(21)7777-9999'];

echo "-===Telefones separados===-" . PHP_EOL;

echo PHP_EOL;

echo "Array separado por vírgula: ", implode(separator: ', ', array: $telefones) . PHP_EOL;
echo PHP_EOL;
echo "Array separado por quebra de linha: " . PHP_EOL . implode(separator: PHP_EOL, array: $telefones) . PHP_EOL;