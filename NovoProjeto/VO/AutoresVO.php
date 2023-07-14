<?php
class Autores{

    private $idAutor;
    private $nome;

    public function getIdAutor(){
        return $this->idAutor;
    }

    public function setIdAutor($idAutor){
        $this->idAutor = $idAutor;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}
?>