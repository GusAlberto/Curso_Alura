<?php

$arquivo = fopen('lista_cursos.txt','r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

fclose($arquivo);