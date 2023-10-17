<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class= "container mt-5"> 
    <h2>Formulário de Login</h2>
    <form action="login.php" method="post">
    <fieldset class="ladoB">

        <div class="form-outline mb-4">
            <label for="emailUser">Email:</label>
                    <input type="text" class="form-control" name="emailUser" id="emailUser" required placeholder="Digite seu email"><br><br>
        </div>

        <div class="form-outline mb-4">
            <label for="senhaUser">Senha:</label>
                    <input type="password" class="form-control" name="senhaUser" required placeholder="Digite sua senha"><br><br>
        </div>

        <input type="submit" class="btn btn-primary" value="Enviar">
        <input type="reset" class="btn btn-warning" value="Cancelar">
    </form>
</div>

</body>
</html>
