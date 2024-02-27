<?php include 'conexao.php' ?>
<?php include 'classes.php' ?>
<?php

relatorioUsuario($conexao)
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Relatórios</title>
</head>
<?php include 'cabecalho.php'; ?>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Nascimento</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Número da casa</th>
                    <th>bairro</th>
                    <th></th>
                    <th>Status</th>
                    <th>Data Registro</th>
                    <th>Desatviado em</th>
                    <th>Cargo</th>
                    <th>Login</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dadosCliente as $usuarios) { ?>
                    <tr>
                        <td>
                            <?php echo $usuarios['id']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['nome_usuario']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['cpf']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['data_nascimento']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['telefone']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['endereço']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['num_casa']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['bairro']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['fk_id_tb_cidades']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['ativo']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['created_at']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['disabled_at']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['tipo_usuario']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['login']; ?>
                        </td>
                        <td>
                            <?php echo $usuarios['senha']; ?>
                        </td>
                        <td>
                            <a href="editarUsuario.php?id=<?php echo $usuarios['id']; ?>" class="btn btn-primary"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <button type="submit" onclick="atualizarUsuario(<?php echo $usuarios['id']; ?>)"
                                class="btn btn-success"><i class="fa-solid fa-rotate-right"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<?php include 'rodape.php'; ?>

</html>