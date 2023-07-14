
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Autores</title>
</head>
<body>
    <h1>Lista de Autores</h1>
<table border='1'>
    <tr>
        <th>
            id
        </th>
        <th>
            nome
        </th>
    </tr>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT']."/NovoProjeto/DAO/AutoresDAO.php";
    $dao = new AutoresDAO();
    $lista=$dao->listAll();

    foreach($lista as $autor){
        echo "<tr>
        <td>
            ".$autor->getIdAutor()."
        </td>
        <td>
            ".$autor->getNome()."
        </td>
    </tr>";
    }
    ?>
</table>
</body>
</html>