<?php

// Configurações de conexão com o banco de dados
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "banco_cadastro";

// Cria a conexão usando mysqli
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>
