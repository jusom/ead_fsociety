<?php

/*
 * Este arquivo é responsável por carregar automaticamente todas as classes
 * inclusas no diretório Classes deste sistema.
 */

/* Inclui o arquiivo de funções gerais do sistema */
require_once ROOT_PATH . DS . 'funcoes.php';

/*
 * Autoload
 * é a função responsável por carregar automaticamente todos os arquivos
 * que estão guardados na pasta classes
 */
use includes\Erro404;

function carregarClasses($classe){
    $classe_path = ROOT_PATH.DS . str_replace('\\', DS, $classe) . '.php';
    
    if(!file_exists($classe_path)){
        return new Erro404();
    }
    
    require_once $classe_path;
}

/* REGISTRADOR DE AUTOLOADERS */
spl_autoload_register('carregarClasses');

/*
 * MODO DE DEBUG
 * Se ele estiver ativo no arquivo config.php, serão exibidos os
 * erros e configurações de debug
 */

if (!defined('DEBUG') || DEBUG === false) {

    // Esconde todos os erros
    error_reporting(0);
    ini_set("display_errors", 0);
} else {

    // Mostra todos os erros
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

//Inicia a classe principal do sistema

$ead = new Classes\Ead();