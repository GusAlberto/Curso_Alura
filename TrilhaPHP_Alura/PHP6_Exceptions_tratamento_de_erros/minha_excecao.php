<?php

class MinhaExcecao extends Exception
{
    public function exibeNome()
    {
        echo 'Nome aleatório';
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $armazenaExcecao) {
    $armazenaExcecao->exibeNome();
}