<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Página de Login</title>


</head>

<body>
    <div class="login">
        <h2>Login</h2>
        <form class="login-form" action="validar.php" method="post">
            <div class="pagLogin">
                <label for="login"></label>
                <input type="text" id="login" name="login" placeholder="Usuário" required>
            </div>
            <div class="pagLogin">
                <label for="senha"></label>
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
            </div>
            <div class="pagLogin">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
        <hr><br>
        <a href="cadastro.php"><button class="button">Criar conta</button></a>
    </div>
</body>


</html>
<script>
    function logar() {
        let login = document.getElementById('login').value;
        let senha = document.getElementById('senha').value;

        window.open(`validar.php?login=${login}&&senha=${senha}`, '_self');
    }
</script>
