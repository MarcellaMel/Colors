<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Formulário de Login</h2>
    <form action="login.php" method="post">
    <fieldset class="ladoB">

                    <div class="form-outline mb-4">
                        <label for="emailUser">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emailUser" name="emailUser" required
                                    placeholder="Digite seu email"><br><br>
                            </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="senhaUser">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="senhaUser" required
                                    placeholder="Digite sua senha"><br><br>
                            </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Enviar">
                    <input type="reset" class="btn btn-warning" value="Cancelar">
    </form>
</body>
</html>
