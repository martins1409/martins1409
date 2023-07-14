<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Funcionários</title>
</head>
    <body>
        <h1>Cadastrar Funcionario</h1>
        <br/>
        <form action='Controle/controleFuncionario.php' method='post'>
            <input type='hidden' name='id' value='0'/>
            <input type='text' name='nome' placeholder='Nome'/>
            <input type='text' name='email' placeholder='Email'/>
            <input type='text' name='telefone' placeholder='Telefone'/>
            <input type='text' name='login' placeholder='Login'/>
            <input type='text' name='senha' placeholder='Senha'/>
            <br/>
            <input type='submit' value='enviar' />
        </form>
    </body>
</html> 