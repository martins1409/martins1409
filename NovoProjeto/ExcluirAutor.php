<!DOCTYPE html>
<html>
<head>
    <title>Excluir Autor</title>
</head>
<body>
    <h1>Excluir Autor</h1>
    <form action='Controle/autorExcluir.php' method='post'>
        <label for='id'>Digite o ID do Autor a ser excluído:</label>
        <input type='number' name='id' required />
        <input type='submit' value='Excluir' />
    </form>
</body>
</html>