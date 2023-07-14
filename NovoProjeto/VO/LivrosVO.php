<?php
class Livros{

    private $registro;
    private $titulo;
    private $editora;
    private $edicao;
    private $fichaCatalogo;
    private $idAutor;

    
    public function getRegistro()
    {
        return $this->registro;
    }

    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    public function getEdicao()
    {
        return $this->edicao;
    }

    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;
    }

    public function getFichaCatalogo()
    {
        return $this->fichaCatalogo;
    }

    public function setFichaCatalogo($fichaCatalogo): self
    {
        $this->fichaCatalogo = $fichaCatalogo;
    }

    public function getIdAutor()
    {
        return $this->idAutor;
    }

    public function setIdAutor($idAutor): self
    {
        $this->idAutro = $idAutor;
    }
}
?>