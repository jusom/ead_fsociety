<?php

namespace Classes\Pojo;

class Questao {
    private $id;
    private $questao;
    private $alternativas = [];
    private $resposta;
    
    public function getId() {
        return $this->id;
    }

    public function getQuestao() {
        return $this->questao;
    }

    public function getAlternativas() {
        return $this->alternativas;
    }

    public function getResposta() {
        return $this->resposta;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setQuestao($questao) {
        $this->questao = $questao;
        return $this;
    }

    public function setAlternativas($alternativas) {
        $this->alternativas = $alternativas;
        return $this;
    }

    public function setResposta($resposta) {
        $this->resposta = $resposta;
        return $this;
    }


}
