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
    <title>Latihan - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Latihan Bahasa Jepang</h1>
        <p>Latih kemampuan bahasa Jepang Anda dengan soal-soal berikut:</p>
        <form>
            <p><strong>1. Apa arti dari "ありがとう"?</strong></p>
            <input type="radio" name="q1" value="a"> Halo<br>
            <input type="radio" name="q1" value="b"> Terima kasih<br>
            <input type="radio" name="q1" value="c"> Selamat pagi<br>

            <p><strong>2. Bagaimana menulis "Saya makan apel" dalam bahasa Jepang?</strong></p>
            <input type="radio" name="q2" value="a"> りんごをたべます。<br>
            <input type="radio" name="q2" value="b"> がっこうにいきます。<br>
            <input type="radio" name="q2" value="c"> わたしは学生です。<br>

            <button type="submit" class="btn">Submit Jawaban</button>
        </form>
        <a href="dashboard.php" class="btn">Kembali ke Dashboard</a>
    </div>
</body>
</html>
