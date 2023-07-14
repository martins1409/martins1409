
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
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
    </tr>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/DAO/UsuariosDAO.php";
    $dao = new UsuariosDAO();
    $lista=$dao->listAll();

    foreach($lista as $usuario){
        echo "<tr>
        <td>
            ".$usuario->getMatricula()."
        </td>
        <td>
            ".$usuario->getNome()."
        </td>
        <td>
            ".$usuario->getEmail()."
        </td>
        <td>
            ".$usuario->getTelefone()."
        </td>
    </tr>";
    }
    ?>
</table>
</body>
</html>