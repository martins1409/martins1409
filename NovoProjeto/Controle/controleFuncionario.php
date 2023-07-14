<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/FuncionariosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/FuncionarioVO.php";

// Verifica se os dados do formulário foram enviados
//Aqui fiz a verificação de todas as entidades por se tatar do cadastro
//e senti a nescessidade de não deixaro nenhum campo sem preencher
if (isset($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['login'], $_POST['senha'])) {
    // Obtem os dados do formulário
    $matricula = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Verifica se o ID é um número inteiro válido
    if (!is_numeric($matricula)) {
        echo "ID inválido.";
        exit();
    }

    // Criar um objeto Funcionario para ser inserido
    $funcionarioParaInserir = new Funcionario();
    $funcionarioParaInserir->setMatricula($matricula);
    $funcionarioParaInserir->setNome($nome);
    $funcionarioParaInserir->setEmail($email);
    $funcionarioParaInserir->setTelefone($telefone);
    $funcionarioParaInserir->setLogin($login);
    $funcionarioParaInserir->setSenha($senha);


    // Instancia o DAO e chama a função inserir_funcionario
    $dao = new FuncionariosDAO();
    if ($dao->inserir_funcionario($funcionarioParaInserir)) {
        echo "Funcionario inserido com sucesso!";
    } else {
        echo "Não foi possível inserir o Funcionario.";
    }
} else {
    echo "Dados do formulário incompletos.";
}

// Redireciona para a página de listagem após a inserção
header('Location: ../ListarFuncionarios.php');
exit(); // Encerra o script após o redirecionamento
?>
