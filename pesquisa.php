<?php

include("versessao.php");

// Configurações do banco de dados
$host = "localhost"; // Nome do servidor
$user = "root"; // Usuário do banco de dados (padrão do XAMPP)
$pass = ""; // Senha do banco (geralmente vazia no XAMPP)
$dbname = "erstryla"; // Substitua pelo nome correto do banco de dados

// Criando a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consultando os usuários
$sql = "SELECT nome, nickname, cargo, data_entrada FROM usuarios_servidor";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: 'Verdana', 'Geneva', sans-serif;
            background-color: #D9DBF1;
            color: #0B3948;
            text-align: center;
        }
        .table-container {
            width: 80%;
            margin: 20px auto;
            background-color: #D0CDD7;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ACB0BD;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #416165;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #F1F1F1;
        }
        .btn-voltar {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #416165;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-voltar:hover {
            background-color: #2E4A4D;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>Lista de Usuários Cadastrados</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Nickname</th>
                <th>Cargo</th>
                <th>Data de Entrada</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['nome']}</td>
                            <td>{$row['nickname']}</td>
                            <td>{$row['cargo']}</td>
                            <td>{$row['data_entrada']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum usuário cadastrado.</td></tr>";
            }
            ?>
        </table>
        <button class="btn-voltar" onclick="window.history.back();">Voltar</button>
    </div>
</body>
</html>

<?php
// Fechando a conexão com o banco de dados
$conn->close();
?>
