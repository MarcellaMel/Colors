<?php
    //validar login
    
    require_once("conexao.php"); //inclui o arquivo de conexao
    session_start(); //starta a session
    //recebendo usuario e senha vindo do login
    $email = $conn->real_escape_string($_POST["emailUser"]);
    $senha = md5($_POST["senhaUser"]);

    $sql = "SELECT * from usuario where emailUser = '$email' and senhaUser = '$senha'";

    //echo $sql;

    $resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    $dados_usuario = $resultado->fetch_assoc();
    //preenchenr a session com os dados do usuario
    $_SESSION["nome"] = $dados_usuario["nomeUser"];
    $_SESSION["sobrenome"] = $dados_usuario["sobrenomeUser"];
    header("location: selecionarPessoa.php");
}else{
    ?>
    <script>window.history.back();</script>
    <?php
}
?>
