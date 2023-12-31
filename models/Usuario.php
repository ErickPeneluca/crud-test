<?php
class Usuario {
    private $id;
    private $nome;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = trim($id);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($name) {
        $this->nome = ucwords(trim($name));
    }
}