<?php

class Conta {
    private static $instance;

    private __construct() {

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