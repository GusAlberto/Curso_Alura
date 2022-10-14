<?php

// Criando variáveis de e-mail e senha para tratamento 
$nome = "Gustavo Alberto";
$email = 'gustavo@forpeople.io';
$senha = 'HASH2139ú';

/* Um caractere "normal" ocupa 1 byte. 
 E um caractere especial ou com acento ocupa 2 bytes.
 Sendo assim, ele é contabilizado como 2 espaços na memória
 Por isso, precisamos usar a função mb antes do strlen = mb_strlen
 */

echo "Tamanho da senha: ", strlen(($senha)) . PHP_EOL;

echo "\r";

// Realizando validações para tamanho da senha
if (strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

echo "Extraindo os caracteres do e-mail até a posição nᴼ6: ", substr($email, 0, 6);
echo PHP_EOL;
echo "Extraindo os caracteres do e-mail após a posição nᴼ7: ", substr($email, 7, null);

echo "\r\r";

// Busca a posição do arroba dentro do e-mail
$posicaoDoArroba = strpos($email, '@', 0);

$usuario = substr($email, 0, $posicaoDoArroba) . PHP_EOL;

// Imprime em caixa alta a parte da variável de $email antes do "@" 
echo strtoupper($usuario) . PHP_EOL;

// Imprime a parte após "@" na string
echo substr($email, $posicaoDoArroba + 1);

echo PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo "Nome: $nome" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;