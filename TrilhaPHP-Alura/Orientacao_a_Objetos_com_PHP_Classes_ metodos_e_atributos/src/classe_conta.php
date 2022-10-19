<?php

/* Criando classe com suas atribuições e funcionalidades
1- Variável $this tem a referência(passar o conteúdo completo) para o objeto que chamou o método atual
2- Early Return: é colocar na função um return para finalizar logo após ter algum erro
*/
class Conta
{

// Definir dados da conta = ATRIBUTOS

    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

// Definir comportamentos da classe = MÉTODOS

    public function sacar(float $valorASacar): string
    {
        if ($valorASacar > $this->saldo) 
        {
            return 'Saldo indisponível.';
        }

        $this->saldo -= $valorASacar;
            
        $mensagemSaque =  "Você sacou: $valorASacar! \r Seu novo saldo é de: $this->saldo.";

        return $mensagemSaque;
             
    }

    public function depositar(float $valorADepositar): string
    {
        if ($valorADepositar < 0) 
        {
            return "Valor precisa ser positivo.";
        }

        $this->saldo += $valorADepositar;

        $mensagemDeposito =  "Você depositou: $valorADepositar! \r Seu novo saldo é de: $this->saldo.";
        
        return $mensagemDeposito;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): string
    {
        if ($valorATransferir > $this->saldo) 
        {
            return "Você não possui saldo para essa operação.";   
        } 

        $this->sacar($valorATransferir);

        $contaDestino->depositar($valorATransferir);
        
        $mensagemTransferencia =  "Você transferiu: $valorATransferir! \r Seu novo saldo é de: $this->saldo.";
        
        return $mensagemTransferencia;
    }

};