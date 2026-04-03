<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #4e73df, #36b9cc);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card-form {
      width: 100%;
      max-width: 800px;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    h2 {
      font-weight: bold;
      color: #4e73df;
    }

    label {
      font-weight: 500;
    }

    .btn-custom {
      background-color: #4e73df;
      border: none;
      border-radius: 10px;
      padding: 10px;
      font-weight: bold;
      width: 200px;
    }

    .btn-custom:hover {
      background-color: #2e59d9;
    }
  </style>
</head>

<body>

<div class="card-form">
  <h4 class="text-muted">Formulário 3</h4>
  <h2 class="text-center mb-4">Formulário Simples</h2>

  <form>
    <div class="row mb-3">
      <div class="col-md-6">
        <label>Nome do Parceiro:</label>
        <input type="text" class="form-control">
      </div>

      <div class="col-md-6">
        <label>ID de E-mail do Parceiro:</label>
        <input type="email" class="form-control">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label>Nome Legal do Sócio:</label>
        <input type="text" class="form-control">
      </div>

      <div class="col-md-6">
        <label>Parceiro Móvel:</label>
        <input type="text" class="form-control">
      </div>
    </div>

    <div class="mb-3">
      <label>Endereço do Parceiro:</label>
      <textarea class="form-control"></textarea>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label>Data de Início do Contrato:</label>
        <input type="date" class="form-control">
      </div>

      <div class="col-md-6">
        <label>Data de Expiração do Contrato:</label>
        <input type="date" class="form-control">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label>Valor Mínimo do Empréstimo:</label>
        <input type="number" class="form-control">
      </div>

      <div class="col-md-6">
        <label>Valor Máximo do Empréstimo:</label>
        <input type="number" class="form-control">
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md-6">
        <label>Taxa de Juro:</label>
        <input type="number" step="0.01" class="form-control">
      </div>

      <div class="col-md-6">
        <label>Valor do Depósito:</label>
        <input type="number" class="form-control">
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-custom">
        Salvar
      </button>
    </div>

  </form>
</div>
</body>
</html>