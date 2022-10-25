<?php

class Funcionario extends Pessoa
{
    private string $nome;
    private Pessoa $cpf;
    private string $cargo;

    public function __construct(string $nome, Pessoa $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
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
 
     public function getCargo(): string
     {
         return $this->cargo;
     }
}