<?php 
require_once('cabecalho.php'); 
require_once('conexao.php');

if (!isset($_GET['id'])) {
    header('Location: ordens.php');
    exit();
}

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM ordem_servico WHERE id = ?");
$stmt->execute([$id]);
$os = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = $_POST['cliente'];
    $veiculo = $_POST['veiculo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $update = $pdo->prepare("UPDATE ordem_servico SET cliente = ?, veiculo = ?, descricao = ?, status = ? WHERE id = ?");
    $update->execute([$cliente, $veiculo, $descricao, $status, $id]);
    
    header('Location: ordens.php');
    exit();
}
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0 mt-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Editar Ordem de Serviço #<?= str_pad($os['id'], 4, '0', STR_PAD_LEFT) ?></h5>
            </div>
            <div class="card-body p-4">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Cliente</label>
                            <input type="text" name="cliente" class="form-control" value="<?= $os['cliente'] ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Veículo</label>
                            <input type="text" name="veiculo" class="form-control" value="<?= $os['veiculo'] ?>" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Descrição</label>
                        <textarea name="descricao" class="form-control" rows="4" required><?= $os['descricao'] ?></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Status</label>
                        <select name="status" class="form-select">
                            <option value="Pendente" <?= $os['status'] == 'Pendente' ? 'selected' : '' ?>>Pendente</option>
                            <option value="Em Andamento" <?= $os['status'] == 'Em Andamento' ? 'selected' : '' ?>>Em Andamento</option>
                            <option value="Concluído" <?= $os['status'] == 'Concluído' ? 'selected' : '' ?>>Concluído</option>
                        </select>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-2">
                        <a href="ordens.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>