<?php

//Função para dar require em todas as Class e limpar o código 
//**Remover classe_ antes do nome das classes para funcionar

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php'; 
    
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }

});