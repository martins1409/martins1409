<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/AutoresDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/AutoresVO.php";

// Verifica se os dados do formulário foram enviados
if (isset($_POST['id'], $_POST['nome'])) {
    // Obtem os dados do formulário
    $idAutor = $_POST['id'];
    $nomeAutor = $_POST['nome'];

    // Verifica se o ID é um número inteiro válido
    if (!is_numeric($idAutor)) {
        echo "ID inválido.";
        exit();
    }

    // Criar um objeto Autor para ser inserido
    $autorParaInserir = new Autores();
    $autorParaInserir->setIdAutor($idAutor);
    $autorParaInserir->setNome($nomeAutor);

    // Instancia o DAO e chama a função inserir_autor
    $dao = new AutoresDAO();
    if ($dao->inserir_autor($autorParaInserir)) {
        echo "Autor inserido com sucesso!";
    } else {
        echo "Não foi possível inserir o autor.";
    }
} else {
    echo "Dados do formulário incompletos.";
}

// Redireciona para a página de listagem após a inserção
header('Location: ../ListarAutor.php');
exit(); // Encerra o script após o redirecionamento
?>
