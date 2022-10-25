<?php

class Pessoa
{
    public string $nome;
    public string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

     // Getters and setters
     public function getNome(): string
     {
         return $this->nome;
     }
 
     public function getCPF(): string
     {
         return $this->cpf;
     }
 
}