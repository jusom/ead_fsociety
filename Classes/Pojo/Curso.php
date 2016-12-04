<?php

namespace Classes\Pojo;


class Curso {
    private $id;
    private $titulo;
    private $descricao;
    private $duracao;
    private $valor;
    private $categoria;
    private $tags;
    
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getCategoria() {
        return $this->categoria;
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

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
        return $this;
    }

    public function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
        return $this;
    }

    public function setTags($tags) {
        $this->tags = $tags;
        return $this;
    }


}
