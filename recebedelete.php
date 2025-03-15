<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "erstryla";

// Criando a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nickname = trim($_POST["nickname"]);

    if (!empty($nickname)) {
        // Deleta apenas pelo nickname
        $sql = "DELETE FROM usuarios_servidor WHERE nickname = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nickname);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Usuário deletado com sucesso!'); window.location.href='deletar.php';</script>";
            } else {
                echo "<script>alert('Nenhum usuário encontrado com esse nickname!'); window.location.href='deletar.php';</script>";
            }
        } else {
            echo "<script>alert('Erro ao deletar usuário!'); window.location.href='deletar.php';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Por favor, digite um nickname!'); window.location.href='deletar.php';</script>";
    }
}

// Fechando conexão
$conn->close();
?>
