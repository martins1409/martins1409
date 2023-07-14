<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu Dropdown Horizontal - Linha de Código</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <!--[if lte IE 8]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body>
<nav>
  <ul class="menu">
	  	<li><a href="#">Funcionario</a>
	       	<ul>
                <li><a href="http://localhost/NovoProjeto/CadastrarFuncionario.php">Cadastar</a></li>
	            <li><a href="http://localhost/NovoProjeto/AtualizarFuncionario.php">Alterar</a></li>
                <li><a href="http://localhost/NovoProjeto/ListarFuncionario.php">Listar</a></li>
	            <li><a href="http://localhost/NovoProjeto/ExcluirFuncionario.php">Excluir</a></li>
	     	</ul>
		</li>
        <li><a href="#">Usuario</a>
	       	<ul>
	            <li><a href="http://localhost/NovoProjeto/CadastrarUsuario.php">Cadastrar</a></li>
                <li><a href="http://localhost/NovoProjeto/AtualizarUsuario.php">Alterar</a></li>
                <li><a href="http://localhost/NovoProjeto/ListarUsuarios.php">Listar</a></li>
                <li><a href="http://localhost/NovoProjeto/ExcluirUsuario.php">Excluir</a></li>
	     	</ul>
		</li>
        <li><a href="#">Autor</a>
	       	<ul>
                <li><a href="http://localhost/NovoProjeto/CadastrarAutor.php">Cadastar</a></li>
	            <li><a href="http://localhost/NovoProjeto/AtualizarAutor.php">Alterar</a></li>
                <li><a href="http://localhost/NovoProjeto/ListarAutor.php">Listar</a></li>
	            <li><a href="http://localhost/NovoProjeto/ExcluirAutor.php">Excluir</a></li>
	     	</ul>
             <li><a href="#">Livro</a>
	       	<ul>
                <li><a href="http://localhost/NovoProjeto/CadastrarLivros.php">Cadastar</a></li>
	            <li><a href="#">Alterar</a></li>
                <li><a href="#">Listar</a></li>
	            <li><a href="#">Excluir</a></li>
	     	</ul>
             <li><a href="#">Emprestimo</a>
	       	<ul>
                <li><a href="#">Cadastar</a></li>
	            <li><a href="#">Alterar</a></li>
                <li><a href="#">Listar</a></li>
	            <li><a href="#">Excluir</a></li>
	     	</ul>
		</li>		
</nav>
</body>
</html>