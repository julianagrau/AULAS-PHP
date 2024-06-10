<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST ['username'] ?? 'Anonimo';
    $email = $_POST ['email'] ?? 'sem email';
    $password = $_POST ['password'] ?? '';
    echo "usuario cadastrado com sucesso!<br>"; 
    echo "nome de usuario: " . htmlspecialchars($username) . "<br>";
    echo "email: " . htmlspecialchars($email) . "<br>";
}

else {
    header('Location:cadastro.html');
    exit;
}
?>