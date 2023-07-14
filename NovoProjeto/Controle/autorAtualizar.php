<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/AutoresDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/AutoresVO.php";

// Verifica se o ID e o nome foram enviados via POST
if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['nome'])) {
    // Cria um objeto Autor para ser atualizado
    $autorParaAtualizar = new Autores();
    $autorParaAtualizar->setIdAutor($_POST['id']);
    $autorParaAtualizar->setNome($_POST['nome']);

    // Instancia o DAO e chama a função atualizar_autor
    $dao = new AutoresDAO();
    if ($dao->atualizar_autor($autorParaAtualizar)) {
        echo "Autor atualizado com sucesso!";
    } else {
        echo "Não foi possível atualizar o autor.";
    }
} else {
    echo "ID inválido ou nome não informado.";
}

// Redireciona para a página de listagem após a atualização
header('Location: ../ListarAutor.php');
exit(); // Encerra o script após o redirecionamento
?>