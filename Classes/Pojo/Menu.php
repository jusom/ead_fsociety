<?php


namespace Classes\Pojo;


class Menu {
    private $id;
    private $texto;
    private $posicao;
    
    public function getId() {
        return $this->id;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getPosicao() {
        return $this->posicao;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
        return $this;
    }

    public function setPosicao($posicao) {
        $this->posicao = $posicao;
        return $this;
    }

}
