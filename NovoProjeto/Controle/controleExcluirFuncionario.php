<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/FuncionariosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/FuncionarioVO.php";

// Verifica se o ID foi enviado via POST
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    // Cria um objeto Funcionario para ser excluído
    $funcionarioParaExcluir = new Funcionario();
    $funcionarioParaExcluir->setMatricula($_POST['id']);

    // Instancia o DAO e chamar a função excluir_funcionario
    $dao = new FuncionariosDAO();
    if ($dao->excluir_funcionario($funcionarioParaExcluir->getMatricula())) {
        echo "Funcionario excluído com sucesso!";
    } else {
        echo "Não foi possível excluir o funcionario.";
    }
} else {
    echo "ID inválido.";
}

// Redireciona para a página de listagem após a exclusão
header('Location: ../ListarFuncionario.php');
exit(); //Encerra o script após o redirecionamento
?>
