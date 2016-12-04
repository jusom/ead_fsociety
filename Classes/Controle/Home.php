<?php


namespace Classes\Controle;

use Classes\Controladores;

class Home extends Controladores{
    
    public function __construct() {
        echo 'Construtor do Controlador Home Carregado <br />';
    }
    
    public function index(){
        echo 'Método Index do controlador Home carregado';
    }
}
