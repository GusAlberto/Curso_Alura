<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\CPF;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */

     public function getCargo(): string
     {
         return $this->cargo;
     }
}
;