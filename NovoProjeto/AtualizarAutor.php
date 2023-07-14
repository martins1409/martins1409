<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Atualização de Autor</title>
</head>
<body>
    <h1>Atualizar Autor</h1>
    <form action='Controle/autorAtualizar.php' method='post'>
        <label for='id'>Digite o ID do Autor a ser atualizado:</label>
        <br/>
        <input type='number' name='id' placeholder='ID do autor' required />
        <br/>
        <br/>
        <label for='nome'>Digite o novo nome do Autor:</label>
        <br/>
        <input type='text' name='nome' placeholder='Novo nome' required />
        <br/>
        <br/>
        <input type='submit' value='Atualizar' />
    </form>
    <?php
    
    if (isset($_GET['erro'])) {
        echo "<p style='color: red;'>ID inválido ou nome não informado.</p>";
    }

    
    if (isset($_GET['sucesso'])) {
        echo "<p style='color: green;'>Autor atualizado com sucesso!</p>";
    }
    ?>
</body>
</html>