<?php

//Função para dar require em todas as Class e limpar o código ao importar somente o autoload 

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php'; 
    
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});