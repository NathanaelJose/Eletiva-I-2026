<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Insira um Número</h2>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Digite um número:</label>
                <input type="number" name="numero" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Mostrar Números</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            echo "<div class='alert alert-info mt-4'>";
            echo "<strong>Números de 1 até $numero:</strong><br>";

            for ($i = 1; $i <= $numero; $i++) {
                echo $i . " ";
            }

            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>