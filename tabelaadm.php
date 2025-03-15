<?php
    include("versessao.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Estilizada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/img2.gif'); /* Imagem de fundo */
            background-size: cover;
            color: #0B3948;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 50px;
        }

        h2 {
            margin-bottom: 10px;
            color: #416165;
        }

        p.by-alu {
            font-size: 30px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            color: #ACB0BD;
            transition: color 0.3s ease-in-out;
        }

        p.by-alu:hover {
            color: #D9DBF1;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #D0CDD7;
            outline: 5px solid  #D0CDD7;
            outline-offset: 15px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ACB0BD;
            transition: background 0.3s ease-in-out;
        }

        th {
            background: #416165;
            color: white;
            font-size: 20px;
        }

        td:hover {
            background: #D9DBF1;
            color: #0B3948;
        }

        .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background: #0B3948;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease-in-out;
        }

        .btn-voltar:hover {
            background: #416165;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Administradores e moderadores</h2>
    <p class="by-alu">by: Alu</p>

    <table>
        <tr>
            <th>Cargo</th>
            <th>Membros</th>
        </tr>
        <tr>
            <td>Administradores do Discord</td>
            <td>Zuzuck, BabaYaga, Croni, Pamonha, Legendes</td>
        </tr>
        <tr>
            <td>Administradores do Minecraft</td>
            <td>Zuzuck, BabaYaga, Pamonha, Tay</td>
        </tr>
        <tr>
            <td>Moderadores</td>
            <td> Alu, Leo, Zuzu</td>
        </tr>
    </table>
    
    <a href="javascript:history.back()" class="btn-voltar">Voltar</a>
</div>

</body>
</html>