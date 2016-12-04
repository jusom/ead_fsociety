<?php

/*
 * Classe principal, responsável por carregar o sistema
 * 
 */

namespace Classes;

use includes\Erro404 as NotFound;

class Ead {

    private $controlador;
    private $metodo;
    private $parametros;

    public function __construct() {

        $this->tratar_url();

        if (!$this->controlador) {

            $this->controlador = new Controle\Home;

            $this->controlador->index();

            return;
        }

        $classe = $this->controlador;
        //trata caracteres inválidos do nome da Classe.
        $classe = \ucfirst(strtolower(preg_replace('/[^a-zA-Z]/i', '', $classe)));
        //Insere o nome de classe no contexto do namespace.
        $classe = __NAMESPACE__ . '\\Controle\\' . $classe;

        if (!class_exists($classe)) {
            return new NotFound();
        }

        $classe = new $classe($this->parametros);

        if (method_exists($classe, $this->metodo)) {
            $classe->{$this->metodo}($this->parametros);

            return;
        }

        //chama o método index, caso nenhum método seja passado
        if (!$this->metodo && method_exists($classe, 'index')) {
            $classe->index($this->parametros);
            return;
        }

        //se nenhuma das validações funcionar, o sistema retorna um erro 404
        return new NotFound();
    }

    public function tratar_url() {

        //verifica se a url foi passada. Ex: www.exemplo.com/{valor que deve ser passado}
        if (isset($_GET['url'])) {

            $caminho = $_GET['url'];


            //Limpa a url
            $caminho = rtrim($caminho, '/');
            $caminho = filter_var($caminho, FILTER_SANITIZE_URL);

            //cria um array
            $caminho = explode('/', $caminho);

            //configura os dados
            $this->controlador = checa_array($caminho, 0);
            $this->metodo = checa_array($caminho, 1);


            //verifica se foi passado algum parâmetro alem de metodo e controlador
            if (checa_array($caminho, 2)) {
                unset($caminho[0]);
                unset($caminho[1]);
                $this->parametros = array_values($caminho);
            }

            /* Configurações de DEBUG */
//            echo 'Controlador: '. $this->controlador . '<br/>';
//            echo 'Método: '. $this->metodo . '<br>';
//            echo 'Parâmetros:';
//            echo '<pre>';
//            print_r($this->parametros);
//            echo '</pre>';
        }
    }

//tratar url
}

//Ead