<?php
require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/VO/AutoresVO.php";

class AutoresDAO{

    public function __construct(){

        require_once 'Conexao.php';
        $this -> conn = $conexao;
    }

    public function inserir_autor(Autores $Autores)
    {
        try {
            // Prepara a instrução SQL os parâmetros
            $sql = $this->conn->prepare("INSERT INTO autores (autores) VALUES (:nome)");

            // Vincula os valores dos parâmetros
            $sql->bindParam(":nome", $Autores->getNome());

            // Executa a instrução SQL
            $sql->execute();

            // Verifica se algum registro foi afetado
            if ($sql->affected_rows > 0) {
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            //Registra o erro em um arquivo de log.
            echo "Erro ao processar as informações: " . $e->getMessage();
            return false;
        }
    }

    public function atualizar_autor($autor) {
        try {
            $sql = $this->conn->prepare("UPDATE autores SET autores = :nome WHERE idAutor = :id");
            
            $id = $autor->getIdAutor();
            $nome = $autor->getNome();
            
            $sql->bindParam(":id", $id);
            $sql->bindParam(":nome", $nome);
            
            $sql->execute();
        
            if ($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
            return false;
        }
    }
    public function listall(){
        
        try {
            $sql = "SELECT * FROM autores ";
            $p_sql = $this -> conn -> prepare($sql);

            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $Autores = new Autores();
        
                $Autores -> setIdAutor($row["idAutor"]);
                $Autores -> setNome($row["autores"]);
                $lista[] = $Autores;
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function excluir_autor($Autores){

        try{
            $sql = $this -> conn -> prepare ("DELETE FROM autores WHERE IdAutor = :id");
            $sql -> bindParam(":id", $Autores);
            $sql -> execute();

        if($sql -> affected_rows > 0){
            return true;
        } else {
            return false;
        }
        
        } catch (Exception $e){
            echo "Erro ao processar as informações ". $e->getMessage();
        }        
    }
}
?>