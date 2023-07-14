<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Usuario</title>
</head>
    <body>
        <h1>Cadastrar Usuario</h1>
        <br/>
        <form action='Controle/controleUsuario.php' method='post'>
            <input type='hidden' name='id' value='0'/>
            <input type='text' name='nome' placeholder='Nome'/>
            <input type='text' name='email' placeholder='Email'/>
            <input type='text' name='telefone' placeholder='Telefone'/>
            <br/>
            <input type='submit' value='enviar' />
        </form>
    </body>
</html> 