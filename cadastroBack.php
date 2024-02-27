<?php include 'classes.php' ?>

<?php
cadastrarUsuarios($conexao, $nome_usuario, $cpf, $data_nascimento, $telefone, $endereco, $num_casa, $bairro, $fk_id_cidades, $tipo_usuario, $login, $senha)

?>

<?php 
$nome_usuario = $_POST["nome_usuario"];
$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nascimento"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$num_casa = $_POST["num_casa"];
$bairro = $_POST["bairro"];
$fk_id_cidades = $_POST["fk_id_tb_cidades"];
$tipo_usuario = $_POST["tipo_usuario"];
$login = $_POST["login"];
$senha = $_POST["senha"];

echo $nome_usuario . '<br>' . $cpf . '<br>' . $data_nascimento . '<br>' . $telefone . '<br>' . $endereco . '<br>' . $num_casa . '<br>' . $bairro
    . '<br>' . $fk_id_tb_cidades . '<br>' . $tipo_usuario . '<br>' . $login . '<br>' . $senha;

cadastrarUsuarios($conexao, $nome_usuario, $cpf, $data_nascimento, $telefone, $endereco, $num_casa, $bairro, $fk_id_cidades, $tipo_usuario, $login, $senha);
?>