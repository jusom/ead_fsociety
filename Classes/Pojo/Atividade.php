<?php

namespace Classes\Pojo;


class Atividade {
    private $id;
    private $titulo;
    private $descricao;
    private $imagem;
    private $questoes = [];
    private $nota_minima;
    private $url;
    
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getQuestoes() {
        return $this->questoes;
    }

    public function getNota_minima() {
        return $this->nota_minima;
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

    public function setImagem($imagem) {
        $this->imagem = $imagem;
        return $this;
    }

    public function setQuestoes($questoes) {
        $this->questoes = $questoes;
        return $this;
    }

    public function setNota_minima($nota_minima) {
        $this->nota_minima = $nota_minima;
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
