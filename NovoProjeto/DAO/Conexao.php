<?php
//Estabelecendo conexão com o banco de dados PDO

$servhost = "localhost";
$usuario  = "admin";
$senha    = "linkpe";
$dbnome   = "DB_NovoProjeto";

//Tratando erros e exeções

$conexao = "";

try {
    $conexao = new PDO("mysql:host=$servhost; dbname=$dbnome", $usuario, $senha);

    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e){
    echo "Falha na conexão: " . $e -> getMessage();
}

?>