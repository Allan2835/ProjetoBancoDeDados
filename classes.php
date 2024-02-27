<?php
include 'conexao.php';


function cadastrarUsuarios($conexao, $nome_usuario, $endereco, $tipo_usuario, $login, $senha)
{
    $dados = "INSERT INTO tb_usuarios (nome_usuario, endereço, tipo_usuario, login, senha)
    VALUES ('$nome_usuario', '$endereco', '$tipo_usuario', '$login', '$senha')";

    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao; //ja usada.----------------------
}

function relatorioUsuario($conexao) //Já usada.-----------------
{
    $dados = "SELECT * FROM tb_usuarios";

    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;
}
$dadosCliente = relatorioUsuario($conexao);

function cidades($conexao, $id_cidade) //Já usada.-----------------
{
    $dados = "SELECT nome_cidade FROM tb_cidades WHERE id = '$id_cidade'";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);
    return $sql_conexao;
}

function inativarUsuario($idUsuario)
{
    global $conexao;

    $sql = "UPDATE tb_usuarios SET ativo = 0, disabled_at = CURRENT_TIMESTAMP WHERE id = $idUsuario";

    if ($conexao->query($sql)) {
        echo "Usuário inativado com sucesso!";
    } else {
        echo "Erro ao inativar usuário.";
    }
}


function atualizarUsuario($idUsuario, $novosDados)
{
    global $conexao;

    $updates = [];
    foreach ($novosDados as $campo => $valor) {
        $updates[] = "$campo = '$valor'";
    }

    $sql = "UPDATE tb_usuarios SET " . implode(', ', $updates) . " WHERE id = $idUsuario";

    if ($conexao->query($sql)) {
        echo "Informações do usuário atualizadas com sucesso!";
    } else {
        echo "Erro ao atualizar informações do usuário.";
    }
}

?>