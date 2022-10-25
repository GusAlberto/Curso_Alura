<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct (Pessoa $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */
    public function getCPF(): string
    {
        return "$this->cpf->getCPF()";
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

};