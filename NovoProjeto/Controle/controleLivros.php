<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/DAO/LivrosDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/LivrosVO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/NovoProjeto/VO/AutoresVO.php";

// Verifica se os dados do formulário foram enviados
if (isset($_POST['autor'], $_POST['id'], $_POST['titulo'], $_POST['editora'], $_POST['edicao'], $_POST['fichaCatalogo'], $_POST['idAutor'])) {
    // Obtem os dados do formulário
    $registro = $_POST['id'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $editora = $_POST['editora'];
    $edicao = $_POST['edicao'];
    $fichaCatalogo = $_POST['fichaCatalogo'];

    // Verifica se o ID é um número inteiro válido
    if (!is_numeric($registro)) {
        echo "ID inválido.";
        exit();
    }

    // Criar um objeto Autores para ser inserido na tabela autores
    $autorParaInserir = new AutoresVO();
    $autorParaInserir->setAutor($autor);

    // Criar um objeto Livro para ser inserido em livros
    $livroParaInserir = new LivrosVO();
    $livroParaInserir->setId($registro);
    $livroParaInserir->setTitulo($titulo);
    $livroParaInserir->setEditora($editora);
    $livroParaInserir->setEdicao($edicao);
    $livroParaInserir->setFichaCatalogo($fichaCatalogo);

    // Instancia o DAO e chama a função inserir_livros
    $dao = new LivrosDAO();
    if ($dao->inserir_livros($autorParaInserir, $livroParaInserir)) {
        echo "Livro inserido com sucesso!";
    } else {
        echo "Não foi possível inserir o livro.";
    }
} else {
    echo "Dados do formulário incompletos.";
}


exit(); // Encerra o script após o redirecionamento
?>