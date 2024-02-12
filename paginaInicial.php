<?php include 'cabecalho.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login h2 {
            color: #333;
        }

        .formulario {
            margin-bottom: 15px;
        }

        .formulario label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .formulario input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .formulario input {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .formulario input:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="login">
        <h2>Fazer login</h2>
        <form class="formulario" action="#" method="post">
            <label for="usuario"></label>
            <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>

            <label for="senha"></label>
            <input type="senha" id="senha" name="senha" placeholder="Senha" required>

            <input class="formulario" type="submit" value="Login">
        </form>
        <h4>Não tem uma conta?<a href="cadastro.php"> Crie sua conta<a\>
        </h4>
    </div>

</body>

</html>