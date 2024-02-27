<?php
include 'classes.php';
?>
<link rel="stylesheet" href="cadastro.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Cadastro</title>
</head>

<body>
    <?php include 'cabecalho.php'; ?>
    <div class="cadastro">
        <h2>Cadastro de Usuário</h2>
        <form  action="relatorio.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="tipo_usuario">Tipo de Usuário:</label>
            <input type="text" id="tipo_usuario" name="tipo_usuario" required>

            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit" class="btn btn-success">Registrar-se</button>
            <hr>
            <p style="font-size: 20px">Já tem uma conta?</p>
        </form>
        <a href="login.php"><button class="button">Logar</button></a>
    </div>
    <?php include 'rodape.php'; ?>
</body>

</html>
<script>
    function cadastrar() {
        let nome = document.getElementById('nome').value;
        let endereco = document.getElementById('endereco').value;
        let tipo_usuario = document.getElementById('tipo_usuario').value;
        let login = document.getElementById('login').value;
        let senha = document.getElementById('senha').value;
        window.open(`relatorio.php?nome=${nome}&&endereco=${endereco}&&tipo_usuario=${tipo_usuario}&&login=${login}&&senha=${senha}`, '_self');
    }
</script>
</body>

</html>