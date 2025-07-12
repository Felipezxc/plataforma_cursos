<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "plataforma_cursos";

// Criar a conexao
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}else {
    echo "Conexão bem-sucedida!";
}