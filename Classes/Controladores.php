<?php

/*
 * Esta classe é responsável pelos controladores do padrão MVC no nosso sistema
 */

/*
 * TODO: inserir a função de verificação de login neste construtor
 */

namespace Classes;

class Controladores {
    
    public $parametros = array();
    
    public function __construct( $parametros = array()) {
    
        $this->parametros = $parametros;
    
    }//construtor
    
    
}
