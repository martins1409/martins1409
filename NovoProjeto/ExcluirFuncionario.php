<!DOCTYPE html>
<html>
<head>
    <title>Excluir Funcioários</title>
</head>
<body>
    <h1>Excluir Funcionários</h1>
    <form action='Controle/controleExcluirFuncionario.php' method='post'>
        <label for='id'>Digite o ID do Funcionário a ser excluído:</label>
        <input type='number' name='id' required />
        <input type='submit' value='Excluir' />
    </form>
</body>
</html>