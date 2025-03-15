<?php
$servidor = "localhost";
$usuario = "root"; // Altere se necessário
$senha = ""; // Altere se necessário
$banco = "erstryla"; // Nome do banco de dados

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
