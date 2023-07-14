<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/UsuariosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/UsuariosVO.php";

// Verifica se o ID foi enviado via POST
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    // Cria um objeto Usuario para ser excluído
    $usuarioParaExcluir = new Usuario();
    $usuarioParaExcluir->setMatricula($_POST['id']);

    // Instancia o DAO e chamar a função excluir_usuario
    $dao = new UsuariosDAO();
    if ($dao->excluir_usuario($usuarioParaExcluir->getMatricula())) {
        echo "Usuario excluído com sucesso!";
    } else {
        echo "Não foi possível excluir o Usuario.";
    }
} else {
    echo "ID inválido.";
}

// Redireciona para a página de listagem após a exclusão
header('Location: ../ListarUsuarios.php');
exit(); //Encerra o script após o redirecionamento
?>
