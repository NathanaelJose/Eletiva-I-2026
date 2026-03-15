<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício 4</h1>
<form method="post">
<div class="mb-3">
              <label for="valor_produto" class="form-label">Insira o valor do produto:</label>
              <input type="number" id="valor_produto" name="valor_produto" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $valor_produto = $_POST['valor_produto'];

    if($valor_produto > 100)
    {
        $desconto = $valor_produto * 0.15;
        $novo_valor = $valor_produto - $desconto;

        echo "<p>Valor original: R$ $valor_produto</p>";
        echo "<p>Desconto aplicado: R$ $desconto</p>";
        echo "<p>Novo valor: R$ $novo_valor</p>";
    }
    else
    {
        echo "<p>Valor do produto: R$ $valor_produto</p>";
        echo "<p>Não há desconto.</p>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>