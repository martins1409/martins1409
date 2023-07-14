<?php
require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/VO/UsuariosVO.php";

class UsuariosDAO{

    public function __construct(){

        require_once 'Conexao.php';
        $this -> conn = $conexao;
    }

    public function inserir_usuario($Usuarios)
    {
        try {
            // Prepara a instrução SQL os parâmetros
            $sql = $this->conn->prepare("INSERT INTO usuarios (nome, email, telefone)
             VALUES (:nome, :email, :telefone)");

            // Vincula os valores dos parâmetros
            $sql->bindParam(":nome", $Usuarios->getNome());
            $sql->bindParam(":email", $Usuarios->getEmail());
            $sql->bindParam(":telefone", $Usuarios->getTelefone());

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

    public function atualizar_usuario($Usuario) {
        try {
            $sql = $this->conn->prepare("UPDATE usuarios SET nome = :nome, email = :email,
            telefone = :telefone WHERE matriculaUs = :id");
            
            $matricula = $Usuario->getMatricula();
            $nome      = $Usuario->getNome();
            $email     = $Usuario->getEmail();
            $telefone  = $Usuario->getTelefone();
            
            $sql->bindParam(":id", $matricula);
            $sql->bindParam(":nome", $nome);
            $sql->bindParam(":email", $email);
            $sql->bindParam(":telefone", $telefone);
            
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
            $sql = "SELECT * FROM usuarios ";
            $p_sql = $this -> conn -> prepare($sql);

            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $Usuarios = new Usuario();
        
                $Usuarios -> setMatricula($row["matriculaUs"]);
                $Usuarios -> setNome($row["nome"]);
                $Usuarios -> setEmail($row["email"]);
                $Usuarios -> setTelefone($row["telefone"]);
                $lista[] = $Usuarios;
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function excluir_usuario($Usuarios){

        try{
            $sql = $this -> conn -> prepare ("DELETE FROM usuarios WHERE matriculaUs = :id");
            $sql -> bindParam(":id", $Usuarios);
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