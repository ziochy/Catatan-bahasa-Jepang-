<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kosakata - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Belajar Kosakata Bahasa Jepang</h1>
        <p>Berikut adalah beberapa kosakata dasar:</p>
        <ul>
            <li>こんにちは (Konnichiwa) - Halo</li>
            <li>ありがとう (Arigatou) - Terima kasih</li>
            <li>はい (Hai) - Ya</li>
            <li>いいえ (Iie) - Tidak</li>
            <li>おはよう (Ohayou) - Selamat pagi</li>
        </ul>
        <a href="dashboard.php" class="btn">Kembali ke Dashboard</a>
    </div>
</body>
</html>
