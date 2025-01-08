<?php
session_start();

// exemplo de usuário e senha fictício
$valid_username = "admin";
$valid_password = "admin";

// Pegue os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verifique se as credenciais são válidas
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['loggedin'] = true;
    // Redireciona para a página inicial ou para uma página específica
    header("Location: /even-suporte-tecnico/index.php"); // Use um caminho absoluto aqui
    exit;
} else {
    echo "Usuário ou senha inválidos!";
}
?>
