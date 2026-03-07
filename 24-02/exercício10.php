<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 10</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 10</h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">Digite o raio do retângulo:</label>
              <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $largura = 10;
        $altura = 5;
        
        // Calcula a diagonal usando Pitágoras
        $diagonal = sqrt(pow($largura, 2) + pow($altura, 2));
        
        // O raio é a metade da diagonal
        $raio = $diagonal / 2;
        
        echo "O raio da circunferência é: " . $raio;
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>