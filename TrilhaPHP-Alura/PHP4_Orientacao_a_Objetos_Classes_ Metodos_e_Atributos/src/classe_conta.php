<?php

/* Criando classe com suas atribuições e funcionalidades
1- Nomes de classes como se fossem *substantivo* e nome de métodos como se fossem *verbos*
2- Variável $THIS tem a referência(passar o conteúdo completo) para o objeto que chamou o método atual
3- Early Return: é colocar na função um return para finalizar logo após ter algum erro
4- Uma boa prática/recomendação geral deixar todos os Atributos privados e somente os Métodos públicos
5- Criar métodos de acesso Getters(get) e Setters(set) para poder acessar as propriedades privados
*/

class Conta
{
// Definir dados da conta = ATRIBUTOS / PROPRIEDADES

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

// Definir comportamentos da classe = MÉTODOS

    public function sacar(float $valorASacar): string
    {
        if ($valorASacar > $this->saldo) {
            return 'Saldo indisponível.';
        }

        $this->saldo -= $valorASacar;
            
        $mensagemSaque =  "Você sacou: $valorASacar! \r Seu novo saldo é de: $this->saldo.";

        return $mensagemSaque;       
    }

    public function depositar(float $valorADepositar): string
    {
        if ($valorADepositar < 0) {
            return "Valor precisa ser positivo.";
        }

        $this->saldo += $valorADepositar;

        $mensagemDeposito =  "Você depositou: $valorADepositar! \r Seu novo saldo é de: $this->saldo.";
        
        return $mensagemDeposito;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): string
    {
        if ($valorATransferir > $this->saldo) {
            return "Você não possui saldo para essa operação.";   
        } 

        $this->sacar($valorATransferir);

        $contaDestino->depositar($valorATransferir);
        
        $mensagemTransferencia =  "Você transferiu: $valorATransferir! \r Seu novo saldo é de: $this->saldo.";
        
        return $mensagemTransferencia;
    }

    public function mostrarSaldo(): string
    {
        return "O saldo da conta de $this->nomeTitular é: $this->saldo \r ;)";
    }

    // ---> GETTERS AND SETTERS (Métodos de acesso) <----
    public function setNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }
};