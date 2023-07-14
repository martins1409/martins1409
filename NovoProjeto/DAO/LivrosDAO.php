<?php
require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/VO/AutoresVO.php";
require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/VO/LivrosVO.php";

class AutoresDAO{

    public function __construct(){

        require_once 'Conexao.php';
        $this->conn = $conexao;
    }

    public function inserir_livros(Autor $Autor, Livros $Livros)
    {
        try {
            // Insere na tabela "autores"
            $sqlAutor = "INSERT INTO autores (autor) VALUES (:autor)";
            $sqlAutor = $this->conn->prepare($sqlAutor);
            $sqltAutor->bindParam(':autor', $Autor->getNome());
            if ($sqlAutor->execute()) {
                $idAutor = $this->conn->lastInsertId(); // Obtém o id gerado pelo auto_increment

                // Insere na tabela "livros" com a referência ao autor da tabela "autores"
                $sqlLivro = "INSERT INTO livros (titulo, editora, edicao, fichaCatalogo, idAutor)
                             VALUES (:titulo, :editora, :edicao, :fichaCatalogo, :idAutor)";
                $sqlLivro = $this->conn->prepare($sqlLivro);
                $sqlLivro->bindParam(':titulo', $Livros->getTitulo());
                $sqlLivro->bindParam(':editora', $Livros->getEditora());
                $sqlLivro->bindParam(':edicao', $Livros->getEdicao());
                $sqlLivro->bindParam(':fichaCatalogo', $Livros->getFichaCatalogo());
                $sqlLivro->bindParam(':idAutor', $idAutor);

                if ($sqlLivro->execute()) {
                    echo "Dados inseridos com sucesso nas duas tabelas.";
                } else {
                    echo "Erro ao inserir dados na tabela livros: " . $sqlLivro->errorInfo();
                }
            } else {
                echo "Erro ao inserir dados na tabela autores: " . $stmtAutor->errorInfo();
            }
        } catch (Exception $e) {
            // Registra o erro em um arquivo de log.
            echo "Erro ao processar as informações: " . $e->getMessage();
            return false;
        }
    }
}
?>