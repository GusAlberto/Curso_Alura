<?php

$teclado = fopen('php://stdin', 'r');

$novoCurso = fgets($teclado);

file_put_contents('cursos_php.txt', "\n$novoCurso", FILE_APPEND);