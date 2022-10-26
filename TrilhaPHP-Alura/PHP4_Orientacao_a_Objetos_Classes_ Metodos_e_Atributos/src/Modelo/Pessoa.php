<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\CPF;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */

     public function getNome(): string
     {
         return $this->nome;
     }

     public function getCPF(): string
     {
         return $this->cpf->getCPF();
     }

}
;