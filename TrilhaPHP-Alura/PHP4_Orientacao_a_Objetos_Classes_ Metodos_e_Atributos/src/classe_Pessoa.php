<?php

class Pessoa
{
    public string $nome;
    public CPF $cpf;

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