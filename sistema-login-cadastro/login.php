<?php

// Inclui o arquivo de conexão com o banco de dados
include("conexao.php");

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário (email e senha)
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Prepara a consulta SQL usando prepared statement para evitar SQL Injection
    $sql = "SELECT * FROM dados WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Obtém o resultado da consulta
    $resultado = $stmt->get_result();

    // Verifica se foi encontrado um usuário com o e-mail informado
    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        // Verifica se a senha digitada corresponde à senha criptografada no banco
        if (password_verify($senha, $usuario["senha"])) {
            echo "Login realizado com sucesso. Bem-vindo, " . $usuario["nome"];
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // Fecha o statement e a conexão
    $stmt->close();
    $conn->close();
}

?>
