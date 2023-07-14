
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Funcionários</title>
</head>
<body>
    <h1>Lista de Funcionários</h1>
<table border='1'>
    <tr>
        <th>
            id
        </th>
        <th>
            nome
        </th>
        <th>
            email
        </th>
        <th>
            telefone
        </th>
        <th>
            login
        </th>
        <th>
            senha
        </th>
    </tr>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/DAO/FuncionariosDAO.php";
    $dao = new FuncionariosDAO();
    $lista=$dao->listAll();

    foreach($lista as $funcionario){
        echo "<tr>
        <td>
            ".$funcionario->getMatricula()."
        </td>
        <td>
            ".$funcionario->getNome()."
        </td>
        <td>
            ".$funcionario->getEmail()."
        </td>
        <td>
            ".$funcionario->getTelefone()."
        </td>
        <td>
            ".$funcionario->getLogin()."
        </td>
        <td>
            ".$funcionario->getSenha()."
        </td>
    </tr>";
    }
    ?>
</table>
</body>
</html>