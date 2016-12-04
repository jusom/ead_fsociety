<?php

namespace Classes\Pojo;

class Anexo {

    private $id;
    private $titulo;
    private $url;
    private $arquivo;

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getArquivo() {
        return $this->arquivo;
    }

    public function setId($id) {
        $this->id = $id;
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

    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
        return $this;
    }

}
