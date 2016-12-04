<?php
/*
 * Esta classe é responsável por gerir a base de dados do sistema
 * Nesta classe é utilizado o design pattern "Singleton Factory".
 */

namespace Classes;

class Banco {
    
    private $instance;
    
    private function __construct() {
       //
    }
    
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".DB_CHAR));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

}
