<?php
require_once ('cabecalho.php');
require_once ('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = $_POST['cliente'];
    $veiculo = $_POST['veiculo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $stmt = $pdo->prepare("INSERT INTO ordem_servico (cliente, veiculo, descricao, status) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$cliente, $veiculo, $descricao, $status])) {
        echo "<script>window.location.href = 'ordens.php';</script>";
        exit();
    } 
}
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0 mt-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="bi bi-tools me-2"></i>Abertura de Ordem de Serviço</h5>
            </div>
            <div class="card-body p-4">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Nome do Cliente</label>
                            <input type="text" name="cliente" class="form-control" placeholder="Ex: João Silva" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Veículo / Placa</label>
                            <input type="text" name="veiculo" class="form-control" placeholder="Ex: BMW M3 Competition - REV2O27" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Descrição do Problema</label>
                        <textarea name="descricao" class="form-control" rows="4" placeholder="Detalhe o problema relatado pelo cliente..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Status Inicial</label>
                        <select name="status" class="form-select">
                            <option value="Pendente">Pendente (Aguardando Análise)</option>
                            <option value="Em Andamento">Em Andamento (No elevador)</option>
                            <option value="Concluído">Concluído (Pronto para entrega)</option>
                        </select>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-2">
                        <a href="ordens.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Abrir O.S.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('rodape.php'); ?>