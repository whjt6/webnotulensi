<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM notulensi WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE notulensi SET title='$title', content='$content' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Notulensi</title>
</head>
<body>
    <h1>Edit Notulensi</h1>
    <form method="POST">
        <input type="text" name="title" value="<?= $row['title'] ?>" required>
        <textarea name="content" required><?= $row['content'] ?></textarea>
        <button type="submit">Update Notulensi</button>
        <link rel="stylesheet" href="style.css">
    </form>
</body>
</html>