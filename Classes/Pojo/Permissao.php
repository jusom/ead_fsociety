<?php


namespace Classes\Pojo;

class Permissao {
    private $id;
    private $funcao;
    private $nivel_acesso;
    
    public function getId() {
        return $this->id;
    }

    public function getFuncao() {
        return $this->funcao;
    }

    public function getNivel_acesso() {
        return $this->nivel_acesso;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
        return $this;
    }

    public function setNivel_acesso($nivel_acesso) {
        $this->nivel_acesso = $nivel_acesso;
        return $this;
    }

}
