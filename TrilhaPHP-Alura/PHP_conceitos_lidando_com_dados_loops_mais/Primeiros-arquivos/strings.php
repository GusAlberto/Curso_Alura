<?php

$idade = 17;
$numeroDePessoas = 2;

echo PHP_EOL;
echo "Olá mundo!" . PHP_EOL;
//echo "Eu tenho \"$idade\" anos";
echo "Eu tenho $idade anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar se tiver a partir de 18 anos ou \n";
echo "a partir de 16 anos acompanhado. Tá bom?" . PHP_EOL;   
echo PHP_EOL;

//if ($idade = 18 or $idade > 18)
//if ($idade = 18 || $idade > 18)
if ($idade >= 18) {

    echo "Você tem $idade anos. Pode entrar!";

} else if ($idade >= 16 && $numeroDePessoas > 1) {

    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";

} else {

    echo "Você tem somente $idade anos. Sorry :( ";
}

echo PHP_EOL;
echo "Até a próxima!";