<?php

class Titular
{
    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct (CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */
    public function getCpf(): string
    {
        return $this->cpf->getCpf();
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