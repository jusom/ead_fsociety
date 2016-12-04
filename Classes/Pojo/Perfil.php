<?php


namespace Classes\Pojo;


class Perfil {
    private $id;
    private $Apelido;
    private $foto;
    private $funcao;
    private $url;
    
    public function getId() {
        return $this->id;
    }

    public function getApelido() {
        return $this->Apelido;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getFuncao() {
        return $this->funcao;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setApelido($Apelido) {
        $this->Apelido = $Apelido;
        return $this;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
        return $this;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
        return $this;
    }
    
    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

}
