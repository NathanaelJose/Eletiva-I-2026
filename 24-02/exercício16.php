<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 16</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 16</h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">Insira o preço:</label>
              <input type="number" id="precoOriginal" name="precoOriginal" class="form-control" required="">
              <label for="valor1" class="form-label">Insira o percentual:</label>
              <input type="number" id="percentualDesconto" name="percentualDesconto" class="form-control" required="" step="0.01">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $precoOriginal = $_POST['precoOriginal'];
        $percentualDesconto = $_POST['percentualDesconto'];

        $valorDesconto = precoOriginal * (percentualDesconto / 100);
        $precoComDesconto = precoOriginal - $valorDesconto;

        echo "Preço original do produto: R$" . number_format($precoOriginal, 2);
        echo "Desconto: " . $percentualDesconto . "%";
        echo "Preço Final: R$" . number_format($precoComDesconto, 2);
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>