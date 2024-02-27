<?php
include 'conexao.php';

$login = $_POST['login']; 
$senha = $_POST['senha']; 

$sql = "SELECT * FROM tb_usuarios WHERE login = '$login' AND senha = '$senha'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    header("Location: home.php");
} else {
    echo "Login ou senha inválidos.";
}
?>