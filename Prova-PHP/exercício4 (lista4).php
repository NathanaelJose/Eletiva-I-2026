<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de Data</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 350px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 80px;
            padding: 8px;
            margin: 5px;
            text-align: center;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .sucesso {
            margin-top: 15px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
        }

        .erro {
            margin-top: 15px;
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Informe a Data</h2>

    <form method="post">
        <input type="number" name="dia" placeholder="Dia" required>
        <input type="number" name="mes" placeholder="Mês" required>
        <input type="number" name="ano" placeholder="Ano" required>

        <button type="submit">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $ano = $_POST["ano"];

        if (checkdate($mes, $dia, $ano)) {
            echo "<div class='sucesso'>
                    Data válida: " . sprintf("%02d/%02d/%04d", $dia, $mes, $ano) . "
                  </div>";
        } else {
            echo "<div class='erro'>
                    Data inválida!
                  </div>";
        }
    }
    ?>
</div>

</body>
</html>