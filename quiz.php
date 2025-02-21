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
    <title>Quiz - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Quiz Bahasa Jepang</h1>
        <p>Uji pengetahuan Anda dengan quiz berikut:</p>
        <form>
            <p><strong>1. Apa arti dari "こんにちは"?</strong></p>
            <input type="radio" name="q1" value="a"> Selamat pagi<br>
            <input type="radio" name="q1" value="b"> Halo<br>
            <input type="radio" name="q1" value="c"> Terima kasih<br>

            <p><strong>2. Bagaimana menulis "Saya pergi ke sekolah" dalam bahasa Jepang?</strong></p>
            <input type="radio" name="q2" value="a"> りんごをたべます。<br>
            <input type="radio" name="q2" value="b"> がっこうにいきます。<br>
            <input type="radio" name="q2" value="c"> わたしは学生です。<br>

            <button type="submit" class="btn">Submit Jawaban</button>
        </form>
        <a href="dashboard.php" class="btn">Kembali ke Dashboard</a>
    </div>
</body>
</html>
