<?php 
require_once('cabecalho.php'); 
require_once('conexao.php');

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM peca WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $peca = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (!$peca) {
    header('Location: pecas.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("UPDATE peca SET nome = ?, codigo_peca = ?, quantidade = ?, preco = ? WHERE id = ?");
    $stmt->execute([$_POST['nome'], $_POST['codigo'], $_POST['qtd'], $_POST['preco'], $_GET['id']]);
    
    header('Location: pecas.php');
    exit();
}
?>

<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-warning text-dark"><h5>Editar Peça</h5></div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Nome da Peça:</label>
                        <input type="text" name="nome" class="form-control" value="<?= $peca['nome'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Código (SKU):</label>
                        <input type="text" name="codigo" class="form-control" value="<?= $peca['codigo_peca'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Quantidade:</label>
                            <input type="number" name="qtd" class="form-control" value="<?= $peca['quantidade'] ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Preço (R$):</label>
                            <input type="text" name="preco" class="form-control" value="<?= $peca['preco'] ?>" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning w-100"><i class="bi bi-save"></i> Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>