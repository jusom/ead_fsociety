<?php

/*
 * Arquivo de configuração do sistema
 * Todas as constantes aqui definidas tem função primordial no funcionamento
 * do sistema.
 */

/* 
 * Configurações do sistema
 * 
 * @const ROOT_PATH é a pasta raiz do sistema
 * @const UP_PATH é a pasta de uploads de arquivos do nosso sistema
 * @const DS é o separador de diretórios do sistema
    Windows:\
    Linux:  /
    MAC:    /
 */
define('ROOT_PATH', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('UP_PATH', ROOT_PATH . DS . 'conteudo'. DS . 'uploads');
/*
 * configurações da base de dados
 * @const DB_NAME nome da sua base de dados
 * @const DB_USER usurário que acessára sua base de dados
 * @const DB_HOST endereço da sua base de dados.
 * @const DB_PASS senha da base de dados
 * @const DB_CHAR charset que será usado na base de dados
 * 
 */

define('DB_NAME','');
define('DB_USER','');
define('DB_HOST','');
define('DB_PASS','');
define('DB_CHAR','');

/* CONFIGURAÇÕES DE DEBUG */

define('DEBUG', TRUE);

//autoloader do sistema
require_once ROOT_PATH . '/loader.php';