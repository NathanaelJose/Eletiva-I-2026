<?php
require_once('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM ordem_servico WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ordens.php');
exit();
?>