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
    <title>Dashboard - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Silakan pilih menu belajar bahasa Jepang:</p>
        <div class="menu">
    <a href="kosakata.php" class="btn">Kosakata</a>
    <a href="tata_bahasa.php" class="btn">Tata Bahasa</a>
    <a href="latihan.php" class="btn">Latihan</a>
    <a href="quiz.php" class="btn">Quiz</a>
    <a href="kamus.php" class="btn">Kamus</a>
    <a href="komentar.php" class="btn">Komentar</a>
      </div>
        <a href="logout.php" class="btn logout">Logout</a>
    </div>
</body>
</html>
