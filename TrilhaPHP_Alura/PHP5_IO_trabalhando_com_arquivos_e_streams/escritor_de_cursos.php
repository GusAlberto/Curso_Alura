<?php

$arquivo = fopen('cursos_php.txt', 'w');

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso, '21');

fclose($arquivo);

$arquivo = fopen('cursos_php.txt', 'a+');

$curso = "\nDesign Patterns PHP II: padrões estruturais";

fwrite($arquivo, $curso);

fclose($arquivo);

/*
 Escrevendo de uma forma mais fácil e completa
 O terceiro parâmetro é uma FLAG.
 Feita para adicionar conteúdo no final sem sobrescrever
 */
 $curso = "Design Patterns PHP I: Boas práticas de programação";

 file_put_contents('cursos_php.txt', $curso, FILE_APPEND );