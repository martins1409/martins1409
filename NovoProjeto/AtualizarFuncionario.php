<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Atualização de Funcionario</title>
</head>
<body>
    <h1>Atualizar Funcionário</h1>
    <form action='Controle/controleAtualizarFuncionario.php' method='post'>
        <label for='id'>Digite o ID do funcionario a ser atualizado:</label>
        <br/>
        <input type='number' name='id' placeholder='ID do Usuario' required />
        <br/>
        <br/>
        <label for='nome'>Digite o novo nome do Usuario:</label>
        <br/>
        <input type='text' name='nome' placeholder='Novo nome' required />
        <br/>
        <label for='email'>Digite o novo email:</label>
        <br/>
        <input type='text' name='email' placeholder='Novo email' required />
        <br/>
        <label for='telefone'>Digite o telefone:</label>
        <br/>
        <input type='text' name='telefone' placeholder='Novo telefone' required />
        <br/>
        <br/>
        <label for='login'>Digite o login:</label>
        <br/>
        <input type='text' name='login' placeholder='Novo login' required />
        <br/>
        <label for='senha'>Digite a senha:</label>
        <br/>
        <input type='text' name='senha' placeholder='Novo senha' required />
        <br/>
        <br/>
        <input type='submit' value='Atualizar' />
    </form>
    <?php
    
    if (isset($_GET['erro'])) {
        echo "<p style='color: red;'>ID inválido ou nome não informado.</p>";
    }

    
    if (isset($_GET['sucesso'])) {
        echo "<p style='color: green;'>Funcionario atualizado com sucesso!</p>";
    }
    ?>
</body>
</html>