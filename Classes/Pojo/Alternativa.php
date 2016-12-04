<?php



namespace Classes\Pojo;

class Alternativa {
    private $id;
    private $texto;
    
    public function getId() {
        return $this->id;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
        return $this;
    }


}
