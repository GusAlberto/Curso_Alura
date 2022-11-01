<?php

// O Autoload é função para dar require em todas as Class;
// Limpando o código ao importar somente o Autoload.

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php'; 

    echo $caminhoArquivo;
    exit();
}
);

spl_autoload_register(function ($nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php'; 

    echo $caminhoArquivo;
    exit();

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
  }
);