<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("INSERT INTO notulensi (title, content) VALUES ('$title', '$content')");
    header("Location: index.php");
    <link rel="stylesheet" href="style.css">
}
?>