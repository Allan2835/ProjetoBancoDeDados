<?php

include 'classes.php';
include 'conexao.php';?>
<?php
if(isset($_POST['submit']))
{
$nome_usuario = $_POST['nome'];
$endereco = $_POST['endereco'];
$tipo_usuario = $_POST['tipo_usuario'];
$login = $_POST['login'];
$senha = $_POST['senha'];

echo $nome_usuario . '<br>' . $endereco . '<br>' . $tipo_usuario . '<br>' . $login . '<br>' . $senha;

cadastrarUsuarios($conexao, $nome_usuario, $endereco, $tipo_usuario, $login, $senha);
}
?>
