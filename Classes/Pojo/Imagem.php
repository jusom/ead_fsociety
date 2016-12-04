<?php


namespace Classes\Pojo;

/*
 * Aviso: A URL desta classe não é a mesma da classe URL.
 * a Classe URL é para URL canônica e questões de SEO.
 * o Atributo URL da classe abaixo é o endereço direto do arquivo.
 */

class Imagem {
    private $id;
    private $url;
    private $descricao;
    private $arquivo;
    private $titulo_alt;
    private $titulo;
    
    public function getId() {
        return $this->id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getArquivo() {
        return $this->arquivo;
    }

    public function getTitulo_alt() {
        return $this->titulo_alt;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
        return $this;
    }

    public function setTitulo_alt($titulo_alt) {
        $this->titulo_alt = $titulo_alt;
        return $this;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

}
