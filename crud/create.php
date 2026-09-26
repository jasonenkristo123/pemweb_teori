<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $isDone = 0; 
    $createdAt = date('Y-m-d'); 

    $stmt = $pdo->prepare("INSERT INTO todos (nama, isDone, createdAt) VALUES (?, ?, ?)");
    $stmt->execute([$nama, $isDone, $createdAt]);
}

header("Location: index.php");
exit;