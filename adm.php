<!DOCTYPE html> 
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <style>
        body {
            font-family: 'Verdana', 'Geneva', sans-serif;
            background-color: #D9DBF1; /* Azul muito claro, quase lavanda */
            color: #0B3948; /* Azul petróleo bem escuro */
            margin: 0;
        }

        header {
            background-color: #416165; /* Azul esverdeado escuro */
            color: white;
            padding: 15px;
            width: 100%;
            text-align: center;
            position: relative;
        }

        .top-bar-buttons {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
        }

        .top-bar-buttons a {
            background-color: #ACB0BD; /* Cinza azulado médio */
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        .top-bar-buttons a:hover {
            background-color: #0B3948; /* Azul petróleo escuro */
        }

        .restricted-form {
            width: 50%;
            margin: 50px auto;
            background-color: #D0CDD7; /* Cinza claro com tom lilás */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }

        .restricted-form h2 {
            background-color: #ACB0BD; /* Cinza azulado médio */
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin: -30px -30px 20px -30px;
        }

        .restricted-form form {
            display: flex;
            flex-direction: column;
        }

        .restricted-form label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .restricted-form input[type="text"],
        .restricted-form input[type="password"] {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ACB0BD; /* Borda cinza azulado médio */
            border-radius: 5px;
            font-size: 16px;
        }

        .restricted-form button {
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #0B3948; /* Azul petróleo escuro */
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .restricted-form button:hover {
            background-color: #416165; /* Azul esverdeado escuro */
        }
    </style>
</head>

<body>

    <header>
        <div class="top-bar-buttons">
            <a href="inicio.html">Voltar ao Início</a>
        </div>
        Área Restrita
    </header>

    <main>
        <section class="restricted-form">
            <h2>Área Administrativa</h2>
            <form action="recebelogin.php" method="post">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="login" required>
                
                <label for="password">Senha:</label>
                <input type="password" id="password" name="senha" required>

                <button type="submit">Enviar</button>
                <button type="button" onclick="location.href='fecharsessao.php'">Sair</button>
            </form>
        </section>
    </main>

</body>

</html>