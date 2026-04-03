<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Alunos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Cadastro de Alunos</h2>

        <form method="post">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "
                <div class='border rounded p-3 mb-3'>
                    <h5>Aluno $i</h5>

                    <div class='mb-2'>
                        <input type='text' name='nome$i' class='form-control' placeholder='Nome' required>
                    </div>

                    <div class='row'>
                        <div class='col'>
                            <input type='number' step='0.1' name='n1_$i' class='form-control' placeholder='Nota 1' required>
                        </div>
                        <div class='col'>
                            <input type='number' step='0.1' name='n2_$i' class='form-control' placeholder='Nota 2' required>
                        </div>
                        <div class='col'>
                            <input type='number' step='0.1' name='n3_$i' class='form-control' placeholder='Nota 3' required>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Calcular Médias</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $alunos = [];

            for ($i = 1; $i <= 5; $i++) {
                $nome = $_POST["nome$i"];
                $n1 = $_POST["n1_$i"];
                $n2 = $_POST["n2_$i"];
                $n3 = $_POST["n3_$i"];

                $media = ($n1 + $n2 + $n3) / 3;

                $alunos[$nome] = $media;
            }

            arsort($alunos);

            echo "<h4 class='mt-4 text-center'>📊 Resultados</h4>";

            echo "<table class='table table-striped table-hover mt-3 text-center'>";
            echo "<thead class='table-dark'>
                    <tr>
                        <th>Nome</th>
                        <th>Média</th>
                    </tr>
                  </thead><tbody>";

            foreach ($alunos as $nome => $media) {
                echo "<tr>
                        <td>$nome</td>
                        <td>" . number_format($media, 2, ',', '.') . "</td>
                      </tr>";
            }
            echo "</tbody></table>";
        }
        ?>
    </div>
</div>
</body>
</html>