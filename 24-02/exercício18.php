<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 18</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 18</h1>
<form method="post">
<div class="mb-3">
              <label for="capital" class="form-label">Insira uma capital:</label>
              <input type="number" id="capital" name="capital" class="form-control" required="">
              <label for="taxa_juros" class="form-label">Insira uma taxa de juros:</label>
              <input type="number" id="taxa_juros" name="taxa_juros" class="form-control" required="" step="0.01">
              <label for="periodo" class="form-label">Insira um período:</label>
              <input type="number" id="periodo" name="periodo" class="form-control" required="" step="0.01">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $capital = $_POST['capital'];
        $taxa_juros = $_POST['taxa_juros'];
        $periodo = $_POST['periodo'];

        $taxa_juros = ($taxa_juros / 100);
        $montante = ($capital * (1+ $taxa_juros) ^ $periodo);

        echo "Juros: " . $taxa_juros . "\n";
        echo "Montante total: " . $montante;
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>