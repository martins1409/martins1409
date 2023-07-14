<!DOCTYPE html>
<html>
<head>
    <title>Excluir Usuário</title>
</head>
<body>
    <h1>Excluir Usuário</h1>
    <form action='Controle/controleExcluirUsuario.php' method='post'>
        <label for='id'>Digite o ID do Usuario a ser excluído:</label>
        <input type='number' name='id' required />
        <input type='submit' value='Excluir' />
    </form>
</body>
</html>