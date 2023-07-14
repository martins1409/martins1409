<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/UsuariosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/UsuariosVO.php";

// Verifica se o ID e o nome foram enviados via POST
if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['nome'])) {
    // Cria um objeto Autor para ser atualizado
    $usuarioParaAtualizar = new Usuario();
    $usuarioParaAtualizar->setMatricula($_POST['id']);
    $usuarioParaAtualizar->setNome($_POST['nome']);
    $usuarioParaAtualizar->setEmail($_POST['email']);
    $usuarioParaAtualizar->setTelefone($_POST['telefone']);


    // Instancia o DAO e chama a função atualizar_usuario
    $dao = new UsuariosDAO();
    if ($dao->atualizar_usuario($usuarioParaAtualizar)) {
        echo "Usuario atualizado com sucesso!";
    } else {
        echo "Não foi possível atualizar o usuario.";
    }
} else {
    echo "ID inválido ou nome não informado.";
}

// Redireciona para a página de listagem após a atualização
header('Location: ../ListarUsuarios.php');
exit(); // Encerra o script após o redirecionamento
?>