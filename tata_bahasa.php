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
    <title>Tata Bahasa - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Belajar Tata Bahasa Jepang</h1>
        <p>Berikut adalah beberapa pola kalimat dasar:</p>
        <ul>
            <li><strong>Subjek + は + Predikat:</strong> わたしは学生です。 (Watashi wa gakusei desu.) - Saya adalah seorang pelajar.</li>
            <li><strong>Subjek + を + Verb:</strong> りんごをたべます。 (Ringo o tabemasu.) - Saya makan apel.</li>
            <li><strong>Subjek + に + Verb:</strong> がっこうにいきます。 (Gakkou ni ikimasu.) - Saya pergi ke sekolah.</li>
        </ul>
        <a href="dashboard.php" class="btn">Kembali ke Dashboard</a>
    </div>
</body>
</html>
