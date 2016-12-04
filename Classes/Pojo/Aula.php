<?php

namespace Classes\Pojo;

class Aula {
    private $id;
    private $titulo;
    private $duracao;
    private $conteudo;
    private $curso;
    private $tags;
    private $url;
    
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
        return $this;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
        return $this;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }

    public function setTags($tags) {
        $this->tags = $tags;
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
