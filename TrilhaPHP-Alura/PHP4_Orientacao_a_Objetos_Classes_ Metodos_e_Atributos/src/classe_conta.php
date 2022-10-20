<?php

/* Criando classe com suas atribuições e funcionalidades
1- Nomes de classes como se fossem *substantivo* e nome de métodos como se fossem *verbos*
2- Variável $THIS tem a referência(passar o conteúdo completo) para o objeto que chamou o método atual
3- Early Return: é colocar na função um return para finalizar logo após ter algum erro
4- É uma boa prática/recomendação geral deixar todos os Atributos privados e somente os Métodos públicos
4.1- MAS nem todo método deve ser público
5- Criamos métodos de acesso Getters(get) e Setters(set) para poder acessar as propriedades privados
6- O método construtor deve inicializar a instância apenas de forma que ela seja válida, ou seja, não add muitas regras!
*/

class Conta
{
// Definir dados da conta = ATRIBUTOS / PROPRIEDADES

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

// Definir comportamentos da classe = MÉTODOS

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
       $this->cpfTitular = $cpfTitular;
       $this->nomeTitular = $nomeTitular;
       $this->saldo = 0;  
       echo "Conta nova foi criada" . PHP_EOL;
    }

    public function sacar(float $valorASacar): string
    {
        if ($valorASacar > $this->saldo) {
            return 'Saldo indisponível.';
        }

        $this->saldo -= $valorASacar;
            
        $mensagemSaque =  "$this->saldo";

        return $mensagemSaque;       
    }

    public function depositar(float $valorADepositar): string
    {
        if ($valorADepositar < 0) {
            return "Valor precisa ser positivo.";
        }

        $this->saldo += $valorADepositar;
        $mensagemDeposito =  "$this->saldo";
        
        return $mensagemDeposito;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): string
    {
        if ($valorATransferir > $this->saldo) {
            return "Você não possui saldo para essa operação.";   
        } 

        $this->sacar($valorATransferir);

        $contaDestino->depositar($valorATransferir);
        
        $mensagemTransferencia =  "$this->saldo";
        
        return $mensagemTransferencia;
    }

    public function mostraTitular(): string
    {
        return "O nome do titular é: $this->nomeTitular";
    }

    public function mostraCpf(): string
    {
        return "O CPF do titular da conta: $this->cpfTitular";
    }

    public function mostrarSaldo(): string
    {
        return "O saldo da conta é de: R$$this->saldo \r ;)";
    }

    /* ---> GETTERS AND SETTERS (Métodos de acesso) <----
    public function setNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }
    */

};