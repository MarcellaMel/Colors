<?php
include_once("conexao.php");

// Recebe os dados do formulário
$username = $_POST['emailUser'];
$password = $_POST['senhaUser'];

// Consulta SQL para verificar o login
$sql = "SELECT * FROM usuario WHERE emailUser = '$username' AND senhaUser = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login bem-sucedido
    echo "Login bem-sucedido. Bem-vindo, $username!";
} else {
    // Login falhou
    echo "Login falhou. Verifique suas credenciais.";
}

$conn->close();
?>
