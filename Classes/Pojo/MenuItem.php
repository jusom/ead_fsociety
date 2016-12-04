<?php


namespace Classes\Pojo;

class MenuItem {
    private $id;
    private $texto;
    private $titulo;
    private $url;
    private $ordem;
    private $atributos = [];
    
    public function getId() {
        return $this->id;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getOrdem() {
        return $this->ordem;
    }

    public function getAtributos() {
        return $this->atributos;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
        return $this;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function setOrdem($ordem) {
        $this->ordem = $ordem;
        return $this;
    }

    public function setAtributos($atributos) {
        $this->atributos = $atributos;
        return $this;
    }

}
