<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = trim($_POST['nama']);
    $isDone = isset($_POST['isDone']) ? 1 : 0;

    $stmt = $pdo->prepare("UPDATE todos SET nama = ?, isDone = ? WHERE id = ?");
    $stmt->execute([$nama, $isDone, $id]);
}

header("Location: index.php");
exit;