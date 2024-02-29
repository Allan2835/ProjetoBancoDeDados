<?php

include 'classes.php';
include 'conexao.php'; ?>
<?php
$nome_usuario = $_GET['nome'];
$endereco = $_GET['endereco'];
$tipo_usuario = $_GET['tipo_usuario'];
$login = $_GET['login'];
$senha = $_GET['senha'];

echo $nome_usuario . '<br>' . $endereco . '<br>' . $tipo_usuario . '<br>' . $login . '<br>' . $senha;

cadastrarUsuarios($conexao, $nome_usuario, $endereco, $tipo_usuario, $login, $senha);

header('Location: relatorio.php');
exit; 
?>

