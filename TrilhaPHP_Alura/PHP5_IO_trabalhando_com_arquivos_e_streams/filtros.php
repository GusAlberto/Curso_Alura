<?php 
require 'MeuFIltro.php';

$arquivoCursos = fopen('lista_cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'string.toupper');

echo fread($arquivoCursos, filesize('lista_cursos.txt'));