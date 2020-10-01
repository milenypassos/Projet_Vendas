
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>

        <form action="processa_login.php" method="post">
            <p>Digite seu Email:</p>
            <input type="text" name="email" placeholder="sitema@gmail.com"><br>
            <p>Digite sua Senha: </p>
            <input type="text" name="senha" placeholder="senha"><br>
            <br>
            <hr>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>