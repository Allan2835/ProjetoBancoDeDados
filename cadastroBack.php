<?php include 'classes.php' ?>

<?php
cadastrarUsuarios($conexao, $nome_usuario, $cpf, $data_nascimento, $telefone, $endereco, $num_casa, $bairro, $fk_id_cidades, $tipo_usuario, $login, $senha)

?>

<?php 
$nome_usuario = $_GET["nome_usuario"];
$cpf = $_GET["cpf"];
$data_nascimento = $_GET["data_nascimento"];
$telefone = $_GET["telefone"];
$endereco = $_GET["endereco"];
$num_casa = $_GET["num_casa"];
$bairro = $_GET["bairro"];
$fk_id_cidades = $_GET["fk_id_tb_cidades"];
$tipo_usuario = $_GET["tipo_usuario"];
$login = $_GET["login"];
$senha = $_GET["senha"];

echo $nome_usuario . '<br>' . $cpf . '<br>' . $data_nascimento . '<br>' . $telefone . '<br>' . $endereco . '<br>' . $num_casa . '<br>' . $bairro
    . '<br>' . $fk_id_tb_cidades . '<br>' . $tipo_usuario . '<br>' . $login . '<br>' . $senha;

cadastrarUsuarios($conexao, $nome_usuario, $cpf, $data_nascimento, $telefone, $endereco, $num_casa, $bairro, $fk_id_cidades, $tipo_usuario, $login, $senha);
?>