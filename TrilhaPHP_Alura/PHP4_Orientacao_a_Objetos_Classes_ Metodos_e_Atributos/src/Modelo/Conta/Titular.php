<?php

namespace Alura\Banco\Modelo\Conta;

require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/CPF.php';

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Interfaces\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct (CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '0000';
    }
    
};