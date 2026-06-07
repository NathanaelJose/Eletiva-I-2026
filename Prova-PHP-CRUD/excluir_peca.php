<?php
require_once ('conexao.php');

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM peca WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header("Location: pecas.php");
exit();
?>