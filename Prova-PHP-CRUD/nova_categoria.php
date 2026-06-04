<?php
require_once 'cabecalho.php';
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $stmt = $pdo->prepare("INSERT INTO categorias (descricao) VALUES (?)");
    $stmt->execute([$descricao]);
    header('Location: categorias.php');
    exit();
}
?>
<h1>Nova Categoria</h1>
<form method="post">
    <div class="mb-3">
        <label for="descricao" class="form-label">Informe a Descrição:</label>
        <input type="text" id="descricao" name="descricao" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="categorias.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php require_once('rodape.php'); ?>