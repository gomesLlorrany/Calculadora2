<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Tabuada</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f0e5d8, #f8f2eb);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff7e6;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .container h1 {
            color: #d4a373;
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        .container ul {
            list-style: none;
            padding: 0;
        }
        .container li {
            background: #fdfaf6;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            font-size: 1.2em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #d4a373;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .container a:hover {
            background: #b0885a;
        }
        .footer {
            background: #d4a373;
            padding: 10px;
            text-align: center;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST['numero']);
            echo "<h1>Tabuada do $numero</h1>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<h1>Erro ao processar o formulário.</h1>";
        }
        ?>
        <a href="cal.html">Voltar</a>
    </div>
    <div class="footer">
        <p>Desenvolvido por Brenda Lorrany</p>
    </div>
</body>
</html>