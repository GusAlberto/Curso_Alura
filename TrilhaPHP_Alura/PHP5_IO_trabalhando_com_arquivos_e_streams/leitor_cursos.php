<?php

$arquivo = fopen('lista_cursos.txt','r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

$tamanhoDoArquivo = filesize('lista_cursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

//Abrir o arquivo, ler todo o conteúdo e retornar como uma string
file_get_contents('lista_cursos.txt');

//Abrir o arquivo, ler todo o conteúdo e retornar como um array
$cursinhos = file('lista_cursos.txt');

var_dump($cursinhos);