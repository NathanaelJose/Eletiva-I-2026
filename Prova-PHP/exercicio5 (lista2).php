<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média de Notas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Insira as Notas</h2>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nota 1</label>
                <input type="number" name="nota1" step="0.1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nota 2</label>
                <input type="number" name="nota2" step="0.1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nota 3</label>
                <input type="number" name="nota3" step="0.1" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Calcular Média</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];

            $media = ($nota1 + $nota2 + $nota3) / 3;

            echo "<div class='alert alert-success mt-4 text-center'>
                    Média: " . number_format($media, 2, ',', '.') . "
                  </div>";
        }
        ?>
    </div>
</div>

</body>
</html>