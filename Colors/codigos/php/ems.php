<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci minha senha</title>
</head>
<body>
    <h1>Esqueci minha senha, gata! E agora?!</h1>

    

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['sendRecuperar'])){
        var_dump($dados);
                $query_usuario = "SELECT emailUser
                        FROM usuario
                        WHERE emailUser = :emailUser
                        LIMIT 1";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->bindParam(':emailUser', $dados['emailUser'], PDO::PARAM_STR);
        $result_usuario->execute();

        if(($result_usuario) AND ($result_usuario->rowCount() !=0)){
    
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000'>Error: Usuario nao encontrado!</p>";
        }
    }

    if(isset($_SESSON['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>

    <form method="POST" action="">
        <label>Email</label>
        <input type="text"  name="emailUser" id="emailUser" class="form-control" placeholder="Digite seu email cadastrado"
        value="<?php if(isset($dados['emailUser'])){ echo $dados['emailUser'];}?>"<br><br>
    
        <input type="submit" value="Recuperar" name="sendRecuperar" id="sendRecuperar">
    </form>

</body>
< !-- TA DANDO ERRO POR ENQUANTO
array(2) { ["emailUser"]=> string(17) "teste44@gmail.com" ["sendRecuperar"]=> string(9) "Recuperar" }
Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ':emailUser LIMIT 1' at line 3 in C:\Programas\xampp\htdocs\Colors-main\Colors-main\Colors\codigos\php\ems.php:28 Stack trace: #0 C:\Programas\xampp\htdocs\Colors-main\Colors-main\Colors\codigos\php\ems.php(28): mysqli->prepare('SELECT idUser, ...') #1 {main} thrown in C:\Programas\xampp\htdocs\Colors-main\Colors-main\Colors\codigos\php\ems.php on line 28-- >
</html>
