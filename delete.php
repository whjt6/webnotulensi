<?php
session_start();
include 'db.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Mengambil ID dari URL
$id = $_GET['id'];

// Menggunakan prepared statement untuk keamanan
$stmt = $conn->prepare("DELETE FROM notulensi WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error; // Menampilkan pesan kesalahan jika ada
    <link rel="stylesheet" href="style.css">
}

$stmt->close();
$conn->close();
?>