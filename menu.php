<?php
    include("versessao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Opções</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #D9DBF1; /* Azul muito claro, quase lavanda */
            color: #0B3948; /* Azul petróleo bem escuro */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #D0CDD7; /* Cinza claro com um leve tom lilás */
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            background-color: #ACB0BD; /* Cinza azulado médio */
            color: #0B3948;
            padding: 15px;
            border-radius: 8px;
            font-size: 24px;
            font-weight: bold;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
            color: #0B3948; /* Azul petróleo bem escuro */
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            margin-top: 30px;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
            flex: 1;
        }

        .button-group input[type="button"] {
            background-color: #416165; /* Azul esverdeado escuro */
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 250px;
            transition: background-color 0.3s ease;
        }

        .button-group input[type="button"]:hover {
            background-color: #0B3948; /* Azul petróleo bem escuro */
        }

        .button-group input[type="button"]:active {
            background-color: #ACB0BD; /* Cinza azulado médio */
        }

        .sair-btn {
            text-align: center;
            margin-top: 30px;
        }

        .sair-btn input[type="button"] {
            background-color: #416165; /* Azul esverdeado escuro */
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 250px;
            transition: background-color 0.3s ease;
        }

        .sair-btn input[type="button"]:hover {
            background-color: #0B3948; /* Azul petróleo bem escuro */
        }

        .sair-btn input[type="button"]:active {
            background-color: #ACB0BD; /* Cinza azulado médio */
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            Painel de Administração
        </div>

        <div class="button-container">
            <div class="button-group">
                <input type="button" value="Cargos" onClick="location.href='tabelaadm.php'">
                <input type="button" value="Pesquisa membros" onClick="location.href='pesquisa.php'">
                <input type="button" value="Excluir Pessoa" onClick="location.href='delete.php'">
            </div>
        </div>

        <div class="sair-btn">
            <input type="button" value="Sair do Sistema" onClick="location.href='fecharsessao.php'">
        </div>
    </div>

</body>
</html>