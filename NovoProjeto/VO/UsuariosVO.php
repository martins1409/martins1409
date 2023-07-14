<?php
class Usuario{

    private $matricula;
    private $nome;
    private $email;
    private $telefone;

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getEmail()
    {
        return $this->email;
    }

      public function setEmail($email)
    {
        $this->email = $email;
    }

       public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
}
?>