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
              <label for="valor_a" class="form-label">Insira o valor a:</label>
              <input type="number" id="valor_a" name="valor_a" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor_b" class="form-label">Insira o valor b:</label>
              <input type="number" id="valor_b" name="valor_b" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $valor_a = $_POST['valor_a'];
    $valor_b = $_POST['valor_b'];

    if($valor_a == $valor_b)
    {
        echo "<p>Números iguais: $valor_a</p>";
    }
    else
    {
        if($valor_a < $valor_b)
        {
            echo "<p>$valor_a $valor_b</p>";
        }
        else
        {
            echo "<p>$valor_b $valor_a</p>";
        }
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>