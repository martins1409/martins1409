<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/AutoresDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/AutoresVO.php";

// Verifica se o ID foi enviado via POST
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    // Cria um objeto Autor para ser excluído
    $autorParaExcluir = new Autores();
    $autorParaExcluir->setIdAutor($_POST['id']);

    // Instancia o DAO e chamar a função excluir_autor
    $dao = new AutoresDAO();
    if ($dao->excluir_autor($autorParaExcluir->getIdAutor())) {
        echo "Autor excluído com sucesso!";
    } else {
        echo "Não foi possível excluir o autor.";
    }
} else {
    echo "ID inválido.";
}

// Redireciona para a página de listagem após a exclusão
header('Location: ../ListarAutor.php');
exit(); //Encerra o script após o redirecionamento
?>
