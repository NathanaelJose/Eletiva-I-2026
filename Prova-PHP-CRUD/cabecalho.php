<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['acesso']) || $_SESSION['acesso'] == false){
        header('Location: index.php');
        exit();
    }
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OficinaPro - Controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f6f9; } /* Fundo cinza super claro */
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="principal.php">
        <i class="bi bi-tools text-warning me-2"></i>OficinaPro
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuTopo">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menuTopo">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="principal.php"><i class="bi bi-house-door me-1"></i>Início</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-gear me-1"></i>Gerenciar
            </a>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="categorias.php">Categorias (Peças/Serviços)</a></li>
                <li><a class="dropdown-item" href="pecas.php">Estoque de Peças</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-file-earmark-text me-1"></i>Ordens de Serviço
            </a>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="nova_ordem.php">Nova O.S.</a></li>
                <li><a class="dropdown-item" href="ordens.php">Histórico de O.S.</a></li>
            </ul>
        </li>
      </ul>
      
      <div class="d-flex align-items-center">
          <span class="text-light me-3"><i class="bi bi-person-circle me-1"></i> Olá, <?= $_SESSION['nome'] ?></span>
          <a class="btn btn-outline-danger btn-sm" href="logout.php"><i class="bi bi-box-arrow-right me-1"></i>Sair</a>
      </div>
    </div>
  </div>
</nav>

<div class="container pb-5">