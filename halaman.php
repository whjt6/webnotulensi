<?php
session_start();
include 'db.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Ambil data notulensi untuk ditampilkan
$result = $conn->query("SELECT * FROM notulensi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notulensi</title>
</head>
<body>
    <h1>Notulensi</h1>
    <p>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
    <a href="logout.php">Logout</a>

    <form method="POST" action="create.php">
        <input type="text" name="title" placeholder="Judul Notulensi" required>
        <textarea name="content" placeholder="Isi Notulensi" required></textarea>
        <button type="submit">Tambah Notulensi</button>
    </form>

    <h2>Daftar Notulensi</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Dibuat Pada</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['created_at']) ?></td>
            <td>
                <a href="edit.php?id=<?= htmlspecialchars($row['id']) ?>">Edit</a>
                <a href="delete.php?id=<?= htmlspecialchars($row['id']) ?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
        <link rel="stylesheet" href="style.css">
    </table>
</body>
</html>