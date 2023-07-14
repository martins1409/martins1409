<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/FuncionariosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/FuncionarioVO.php";

// Verifica se o ID e o nome foram enviados via POST
// Pocurei deixar o mais simples possível, se quiser pode fazer a verificação
//das outras entidades
if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['nome'])) {
    // Cria um objeto Autor para ser atualizado
    $funcionarioParaAtualizar = new Funcionario();
    $funcionarioParaAtualizar->setMatricula($_POST['id']);
    $funcionarioParaAtualizar->setNome($_POST['nome']);
    $funcionarioParaAtualizar->setEmail($_POST['email']);
    $funcionarioParaAtualizar->setTelefone($_POST['telefone']);
    $funcionarioParaAtualizar->setLogin($_POST['login']);
    $funcionarioParaAtualizar->setSenha($_POST['senha']);


    // Instancia o DAO e chama a função atualizar_funcionario
    $dao = new FuncionariosDAO();
    if ($dao->atualizar_funcionario($funcionarioParaAtualizar)) {
        echo "Usuario atualizado com sucesso!";
    } else {
        echo "Não foi possível atualizar o funcionarios.";
    }
} else {
    echo "ID inválido ou nome não informado.";
}

// Redireciona para a página de listagem após a atualização
header('Location: ../ListarFuncionarios.php');
exit(); // Encerra o script após o redirecionamento
?>