<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card p-4 shadow" style="width: 350px;">
    <h3 class="text-center mb-3">Cadastro</h3>

    <form>
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" placeholder="Digite seu nome" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Digite seu email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" placeholder="Crie uma senha" required>
      </div>

      <button type="submit" class="btn btn-success w-100">Cadastrar</button>
    </form>

    <div class="text-center mt-3">
      <a href="login.html">Já tem conta? Entrar</a>
    </div>
  </div>

</body>
</html>