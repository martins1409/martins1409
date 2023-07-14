<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Livros</title>
</head>
<body>
    <h1>Cadastrar Livro</h1>
    <br/>
    <form action='Controle/controleLivros.php' method='post'>
        <input type='hidden' name='id' value='0'/>
        <div>
            <label for="autor">Autores:</label>
            <textarea id="autor" name='autor' cols="30" rows="5" placeholder='Digite os nomes dos autores'></textarea>
        </div>
        <div>
            <label for="titulo">Título do Livro:</label>
            <input type='text' id="titulo" name='titulo' placeholder='Digite o título do livro'/>
        </div>
        <div>
            <label for="editora">Editora:</label>
            <input type='text' id="editora" name='editora' placeholder='Digite a editora'/>
        </div>
        <div>
            <label for="edicao">Edição:</label>
            <input type='text' id="edicao" name='edicao' placeholder='Digite a edição'/>
        </div>
        <div>
            <label for="fichaCatalogo">Ficha Catalográfica:</label>
            <textarea id="fichaCatalogo" name='fichaCatalogo' cols="30" rows="5" placeholder='Digite a ficha catalográfica'></textarea>
        </div>
        <br/>
        <input type='submit' value='Enviar' />
    </form>
</body>
</html>