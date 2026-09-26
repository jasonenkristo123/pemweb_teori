<?php

require 'db.php';
$stmt = $pdo->query('SELECT * FROM todos ORDER BY id DESC');
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>

    <!-- FORM CREATE -->
    <form action="create.php" method="POST" style="margin-bottom: 20px;">
        <input type="text" name="nama" placeholder="Masukkan kegiatan baru..." required autofocus>
        <button type="submit">Tambah Todo</button>
    </form>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kegiatan & Status</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todos as $todo): ?>
            <tr>
                <td><?= $todo['id'] ?></td>
                <td>
                    <form action="update.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                        <input type="text" name="nama" value="<?= htmlspecialchars($todo['nama']) ?>" required>
                        <label>
                            <input type="checkbox" name="isDone" value="1" <?= $todo['isDone'] ? 'checked' : '' ?>>
                            Selesai
                        </label>
                        <button type="submit">Simpan Perubahan</button>
                    </form>
                </td>
                <td><?= $todo['createdAt'] ?></td>
                <td>
                    <a href="delete.php?id=<?= $todo['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
            <?php if (empty($todos)): ?>
            <tr>
                <td colspan="4" align="center">Belum ada data todo.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
