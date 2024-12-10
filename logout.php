<?php
session_start(); // Memulai sesi
session_destroy(); // Menghancurkan semua data sesi
header("Location: login.php"); // Mengarahkan pengguna ke halaman login
exit(); // Menghentikan eksekusi script setelah pengalihan
<link rel="stylesheet" href="style.css">
?>