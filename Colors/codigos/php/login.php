<?php
    //validar login
    
    require_once("conexao.php"); //inclui o arquivo de conexao
    session_start(); //starta a session
    //recebendo usuario e senha vindo do login
    $usuario = $conn->real_escape_string($_POST["emailUser"]);
    $senha = md5($_POST["senhaUser"]);

    $sql = "SELECT * from usuario where emailUser = '$usuario' and password = '$senha'";

    echo $sql;
?>
