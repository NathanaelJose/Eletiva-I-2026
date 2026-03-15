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
              <label for="primeiro_valor" class="form-label">Digite o 1º número:</label>
              <input type="number" id="primeiro_valor" name="primeiro_valor" class="form-control" required="">
            </div><div class="mb-3">
              <label for="segundo_valor" class="form-label">Digite o 2º número:</label>
              <input type="number" id="segundo_valor" name="segundo_valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $primeiro_valor = $_POST['primeiro_valor'];
    $segundo_valor = $_POST['segundo_valor'];

    $soma = $primeiro_valor + $segundo_valor;

    if($primeiro_valor == $segundo_valor)
    {
        $resultado = $soma * 3;
        echo "<p>Os valores são iguais.</p>";
        echo "<p>O triplo do valor é: $resultado</p>";
    }
    else
    {
        echo "<p>Soma dos valores fica em: $soma</p>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>