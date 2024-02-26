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
    <title>Relatórios</title>
</head>
<?php include 'cabecalho.php'; ?>
<body>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>id</th>
                <th>nome_usuario</th>
                <th>cpf</th>
                <th>data_nascimento</th>
                <th>telefone</th>
                <th>endereço</th>
                <th>num_casa</th>
                <th>bairro</th>
                <th>fk_id_cidades</th>
                <th>ativo</th>
                <th>created_at</th>
                <th>disable_at</th>
                <th>tipo_usuario</th>
                <th>login</th>
                <th>senha</th>
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
                        <?php echo $usuarios['endereco']; ?>
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
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
<?php include 'rodape.php'; ?>
</html>