<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/UsuariosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/AutoresVO.php";

// Verifica se os dados do formulário foram enviados
if (isset($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['telefone'])) {
    // Obtem os dados do formulário
    $matricula = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Verifica se o ID é um número inteiro válido
    if (!is_numeric($matricula)) {
        echo "ID inválido.";
        exit();
    }

    // Criar um objeto Usuario para ser inserido
    $usuarioParaInserir = new Usuario();
    $usuarioParaInserir->setMatricula($matricula);
    $usuaruiParaInserir->setNome($nome);
    $usuarioParaInserir->setEmail($email);
    $usuarioParaInserir->setTelefone($telefone);

    // Instancia o DAO e chama a função inserir_usuario
    $dao = new UsuariosDAO();
    if ($dao->inserir_usuario($usuarioParaInserir)) {
        echo "usuario inserido com sucesso!";
    } else {
        echo "Não foi possível inserir o usuario.";
    }
} else {
    echo "Dados do formulário incompletos.";
}

// Redireciona para a página de listagem após a inserção
header('Location: ../ListarUsuarios.php');
exit(); // Encerra o script após o redirecionamento
?>
