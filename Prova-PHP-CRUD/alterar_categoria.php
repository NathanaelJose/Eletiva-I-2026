<?php
require_once('cabecalho.php');
require_once('conexao.php');

if (!isset($_GET['id'])){
    header('Location: categorias.php');
    exit();
}

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM categoria WHERE id = ?');
$stmt->execute([$id]);
$categoria = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $stmt = $pdo->prepare('UPDATE categoria SET descricao = ? WHERE id = ?');
    $stmt->execute([$descricao, $id]);
    header('Location: categorias.php');
    exit();
}
?>

<h1>Alterar Categoria</h1>
<form method="post">
    <div class="mb-3">
        <label for="descricao" class="form-label">Informe a Descrição:</label>
        <input type="text" id="descricao" name="descricao" class="form-control" value="<?= $categoria['descricao'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="categorias.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php 
require_once('rodape.php'); 
?>