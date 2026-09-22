<?php
$host = 'localhost';
$db_name = 'todolist';
$username = 'root';
$password = 'rahasia';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "berhasil";
} catch (PDOException $e) {
    die("Koneksi gagal: ". $e->getMessage());
}
?>