<?php

class Conexao {
    public static $instance;

    private function _construct(){
        //criar funcionalidade de instância
    }

    public static function getConexao () {
        if (!isset (self::$instance)){
            self::$instance = new PDO ('mysql:host=localhost;dbname=crud', 'root', 'senac',array (PDO::MYSQL_ATR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance -> setAttribute (PDO :: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance -> setAttribute (PDO:: ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

        }

        return self::$instance; 
    
    }
}