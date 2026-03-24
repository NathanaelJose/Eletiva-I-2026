<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card p-4 shadow" style="width: 350px;">
    <h3 class="text-center mb-3">Sistema de Controle de Estoque</h3>

    <form method="post">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email "type="text" class="form-control" placeholder="Digite seu email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input name="senha" type="number" class="form-control" placeholder="Digite sua senha" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>

    <div class="text-center mt-3">
      <a href="cadastro.html">Criar conta</a>
    </div>
  </div>

</body>
</html>