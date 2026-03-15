<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="primeiro_numero" class="form-label">Digite o 1º número:</label>
              <input type="text" id="primeiro_numero" name="primeiro_numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="segundo_numero" class="form-label">Digite o 2º número:</label>
              <input type="text" id="segundo_numero" name="segundo_numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="terceiro_numero" class="form-label">Digite o 3º número:</label>
              <input type="text" id="terceiro_numero" name="terceiro_numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="quarto_numero" class="form-label">Digite o 4º número:</label>
              <input type="text" id="quarto_numero" name="quarto_numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="quinto_numero" class="form-label">Digite o 5º número:</label>
              <input type="text" id="quinto_numero" name="quinto_numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="sexto_numero" class="form-label">Digite o 6º número:</label>
              <input type="text" id="sexto_numero" name="sexto_numero" class="form-control" required="">
            </div><div class="mb-3">
              <label for="setimo_numero" class="form-label">Digite o 7º número:</label>
              <input type="text" id="setimo_numero" name="setimo_numero" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $primeiro_numero = $_POST['primeiro_numero'];
    $segundo_numero = $_POST['segundo_numero'];
    $terceiro_numero = $_POST['terceiro_numero'];
    $quarto_numero = $_POST['quarto_numero'];
    $quinto_numero = $_POST['quinto_numero'];
    $sexto_numero = $_POST['sexto_numero'];
    $setimo_numero = $_POST['setimo_numero'];

    $numeros = [
        $primeiro_numero,
        $segundo_numero,
        $terceiro_numero,
        $quarto_numero,
        $quinto_numero,
        $sexto_numero,
        $setimo_numero
    ];

    $menor = $numeros[0];
    $posicao = 0;

    for($i = 0; $i < 7; $i++)
    {
        if($numeros[$i] < $menor)
        {
            $menor = $numeros[$i];
            $posicao = $i;
        }
    }

    echo "<p>Menor valor: $menor</p>";
    echo "<p>Posição do menor valor: $posicao</p>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>