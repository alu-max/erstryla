<?php
    include("versessao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Pessoa</title>
    <style>
        body {
            font-family: 'Verdana', 'Geneva', sans-serif;
            background-color: #D9DBF1; /* Cor de fundo do outro site */
            color: #0B3948; /* Cor do texto */
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            width: 40%;
            margin: 50px auto;
            background-color: #D0CDD7; /* Mesma cor da tabela no outro site */
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px;
            text-align: center;
        }

        input[type="text"] {
            width: 90%;
            padding: 8px;
            border: 1px solid #ACB0BD;
            border-radius: 8px;
            font-size: 14px;
        }

        input[type="submit"], input[type="button"] {
            background-color: #416165;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #2E4A4D;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h2>Excluir Pessoa</h2>
        <form action="recebedelete.php" method="POST">
            <table>
                <tr>
                    <td align="right">Digite o nome:</td>
                    <td><input type="text" name="nickname" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Apagar Dados" name="sub">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="button" value="voltar" onClick="location.href='menu.php'">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
