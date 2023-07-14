<?php
require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/VO/FuncionarioVO.php";

class FuncionariosDAO{

    public function __construct(){

        require_once 'Conexao.php';
        $this -> conn = $conexao;
    }

    public function inserir_funcionario($Funcionario)
    {
        try {
            // Prepara a instrução SQL os parâmetros
            $sql = $this->conn->prepare("INSERT INTO funcionarios (nome, email, telefone, login, senha)
             VALUES (:nome, :email, :telefone, :login, :senha)");

            // Vincula os valores dos parâmetros
            $sql->bindParam(":nome", $Funcionario->getNome());
            $sql->bindParam(":email", $Funcionario->getEmail());
            $sql->bindParam(":telefone", $Funcionario->getTelefone());
            $sql->bindParam(":login", $Funcionario->getLogin());
            $sql->bindParam(":senha", $Funcionario->getSenha());

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

    public function atualizar_funcionario($Funcionario) {
        try {
            $sql = $this->conn->prepare("UPDATE funcionarios SET nome = :nome, email = :email,
            telefone = :telefone, login = :login, senha = :senha WHERE matriculaFun = :id");
            
            $matricula = $Funcionario->getMatricula();
            $nome      = $Funcionario->getNome();
            $email     = $Funcionario->getEmail();
            $telefone  = $Funcionario->getTelefone();
            $login     = $Funcionario->getLogin();
            $senha     = $Funcionario->getSenha();
            
            $sql->bindParam(":id", $matricula);
            $sql->bindParam(":nome", $nome);
            $sql->bindParam(":email", $email);
            $sql->bindParam(":telefone", $telefone);
            $sql->bindParam(":login", $login);
            $sql->bindParam(":senha", $senha);
            
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
            $sql = "SELECT * FROM funcionarios ";
            $p_sql = $this -> conn -> prepare($sql);

            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $Funcionario = new Funcionario();
        
                $Funcionario -> setMatricula($row["matriculaFun"]);
                $Funcionario-> setNome($row["nome"]);
                $Funcionario-> setEmail($row["email"]);
                $Funcionario -> setTelefone($row["telefone"]);
                $Funcionario-> setLogin($row["login"]);
                $Funcionario -> setSenha($row["senha"]);
                $lista[] = $Funcionario;
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function excluir_funcionario($Funcionario){

        try{
            $sql = $this -> conn -> prepare ("DELETE FROM funcionarios WHERE matriculaFun = :id");
            $sql -> bindParam(":id", $Funcionario);
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