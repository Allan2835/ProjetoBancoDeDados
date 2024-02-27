<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .cabecalho {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .cabecalho nav {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .cabecalho a {
        font-size: 1.5rem;
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        transition: color 0.3s ease-in-out;
    }

    .cabecalho a:hover {
        color: black;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="cabecalho">
        <nav>
            <a href="home.php">Home</a>
            <a href="relatorio.php">Usuários</a>
            <a href="cadastro.php">Cadastrar usuário</a>
        </nav>
        <a href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>