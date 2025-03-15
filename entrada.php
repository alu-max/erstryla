<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        body {
            font-family: 'Verdana', 'Geneva', sans-serif;
            background-color: #D9DBF1; /* Azul muito claro, quase lavanda */
            color: #0B3948; /* Azul petróleo bem escuro */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .form-container {
            width: 50%;
            background-color: #D0CDD7; /* Cinza claro com um leve tom lilás */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
        }

        .form-container h2 {
            background-color: #416165; /* Azul esverdeado escuro */
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #0B3948; /* Azul petróleo bem escuro */
        }

        .form-group input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ACB0BD; /* Cinza azulado médio */
            border-radius: 5px;
            background-color: #D9DBF1; /* Fundo claro */
            font-size: 14px;
            color: #0B3948; /* Azul petróleo escuro */
        }

        .form-group input::placeholder {
            color: #ACB0BD; /* Cinza azulado médio */
        }

        .form-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .form-buttons input[type="submit"],
        .form-buttons input[type="button"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        .form-buttons input[type="submit"] {
            background-color: #0B3948; /* Azul petróleo bem escuro */
            color: white;
        }

        .form-buttons input[type="button"] {
            background-color: #416165; /* Azul esverdeado escuro */
            color: white;
        }

        .form-buttons input[type="submit"]:hover,
        .form-buttons input[type="button"]:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastrar-se</h2>
        <form action="recebecadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Nome que gostaria de ser chamado" required>
            </div>
            <div class="form-group">
                <label for="nickname">Nick Name:</label>
                <input type="text" id="nickname" name="nickname" placeholder="Coloque seu nick name do DC" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" placeholder="Qual o seu cargo atual? ADM, Moderador, Membro?" required>
            </div>
            <div class="form-group">
                <label for="data_entrada">Data de Entrada:</label>
                <input type="text" id="data_entrada" name="data_entrada" placeholder="Data em que está entrando" required>
            </div>
            <div class="form-buttons">
                <input type="submit" value="Enviar" name="sub">
                <input type="button" value="Voltar" onclick="location.href='inicio.html'">
            </div>
        </form>
    </div>
</body>
</html>