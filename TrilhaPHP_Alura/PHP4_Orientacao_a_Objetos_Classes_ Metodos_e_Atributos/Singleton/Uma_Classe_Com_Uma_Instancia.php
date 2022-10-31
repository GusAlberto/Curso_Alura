<?php

/*
- O QUE É SINGLETON?
Singleton é um padrão de projeto de software.
Este padrão garante a existência de apenas uma instância de uma classe, mantendo um ponto global de acesso ao seu objeto. 
*/

/* 
class Account 
{
    private static $instance;

    private __construct() 
    {

    }

    public static function getInstance()
    {
        if (!self::instance){
            return self::$instance;
        }        

        self::$instance = new $this();

        return self::$instance;
    } 
}
*/