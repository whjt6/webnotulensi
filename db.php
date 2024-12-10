<?php
$servername = "localhost"; // Nama server, biasanya localhost
$username = "root";         // Nama pengguna MySQL, biasanya 'root' di XAMPP
$password = "";             // Password untuk pengguna MySQL (kosong secara default di XAMPP)
$dbname = "notulensi_db";   // Nama database yang telah Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>