<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root"; // Altere se necessário
$password = ""; // Altere se necessário
$database = "erstryla"; // Substitua pelo nome do seu banco de dados

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $nickname = trim($_POST['nickname']);
    $cargo = trim($_POST['cargo']);
    $data_entrada = trim($_POST['data_entrada']);

    // Evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO usuarios_servidor (nome, nickname, cargo, data_entrada) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $nickname, $cargo, $data_entrada);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
        echo "<br><a href='inicio.html'>Voltar</a>";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>