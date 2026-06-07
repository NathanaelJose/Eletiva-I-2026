<?php
require_once('cabecalho.php');
require_once('conexao.php');

if (!isset($_GET['id'])) {
    header('Location: categorias.php');
    exit();
}

$id = $_GET['id'];

// exclusão
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $stmt = $pdo->prepare('DELETE FROM categoria WHERE id = ?');
    $stmt->execute([$id]);
    header('Location: categorias.php');
    exit();
}

// consulta
$stmt = $pdo->prepare('SELECT * FROM categoria WHERE id = ?');
$stmt->execute([$id]);
$categoria = $stmt->fetch();
?>

<h1>Consultar / Excluir Categoria</h1>
<div class="mb-3 mt-4">
    <p><strong>ID:</strong> <?= $categoria['id'] ?></p>
    <p><strong>Descrição:</strong> <?= $categoria['descricao'] ?></p>
</div>

<form method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?');">
    <button type="submit" class="btn btn-danger">Excluir</button>
    <a href="categorias.php" class="btn btn-secondary">Voltar</a>
</form>

<?php require_once('rodape.php'); ?>