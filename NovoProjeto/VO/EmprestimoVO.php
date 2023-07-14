<?php
class Emprestimo{
    private $id_emprestimo;
    private $matriculaFun;
    private $matriculaUs;
    private $registro;
    private $dataEmprestimo;
    private $dataDevolucao;

    
    public function getId_emprestimo()
    {
        return $this->id_emprestimo;
    }

    public function setId_emprestimo($id_emprestimo)
    {
        $this->id_emprestimo = $id_emprestimo;

        return $this;
    }

    public function getMatriculaFun()
    {
        return $this->matriculaFun;
    }
    
    public function setMatriculaFun($matriculaFun)
    {
        $this->matriculaFun = $matriculaFun;
    }

    public function getMatriculaUs()
    {
        return $this->matriculaUs;
    }
    
    public function setMatriculaUs($matriculaUs)
    {
        $this->matriculaUs = $matriculaUs;
    }
    
    public function getRegistro()
    {
        return $this->registro;
    }
    
    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }

    public function getDataEmprestimo()
    {
        return $this->dataEmprestimo;
    }

    public function setDataEmprestimo($dataEmprestimo)
    {
        $this->dataEmprestimo = $dataEmprestimo;
    }

    public function getDataDevolucao()
    {
        return $this->dataDevolucao;
    }

    public function setDataDevolucao($dataDevolucao)
    {
        $this->dataDevolucao = $dataDevolucao;
    }
}
?>