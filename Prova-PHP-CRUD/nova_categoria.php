<?php
require_once('cabecalho.php');
require_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $stmt = $pdo->prepare("INSERT INTO categoria (descricao, tipo) VALUES (?, ?)");
    $stmt->execute([$descricao, $_POST['tipo']]);
    header('Location: categorias.php');
    exit();
}
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-light">
                <h4 class="mb-0"><i class="bi bi-plus-circle me-2"></i>Nova Categoria</h4>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo da Categoria:</label>
                <select name="tipo" class="form-select">
                    <option value="Peça">Peça</option>
                    <option value="Serviço">Serviço</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Ex: Peças de Motor, Serviços e Elétricos..." required>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="categorias.php" class="btn btn-secondary">Cancelar</a>  
                    <button type="submit" class="btn btn-success"><i class="bi bi-check-lg me-1"></i>Salvar</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once('rodape.php'); ?>