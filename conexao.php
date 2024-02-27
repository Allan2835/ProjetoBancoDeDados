<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "prj_php_db";

$conexao = new mysqli($hostname, $username, $password, $dbname);

if ($conexao->connect_errno) {
    echo "Falha na conexão: (". $conexao->connect_errno.") " .$conexao->connect_error;
// } else {
//     echo "OK";
}

?>