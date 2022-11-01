<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Traits\AcessoPropriedades;

abstract class Pessoa
{
    //Utilizando uma trait para acessar a propriedade diretamente
    use AcessoPropriedades;

    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */

     public function recuperaNome(): string
     {
         return $this->nome;
     }

     public function recuperaCpf(): string
     {
         return $this->cpf->recuperaNumero();
     }

};