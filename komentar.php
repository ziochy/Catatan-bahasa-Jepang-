<?php
session_start(); // Mulai sesi
$error = "";

// Proses penambahan komentar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $komentar = trim($_POST['komentar']);

    if (!empty($komentar)) {
        // Simpan komentar ke file
        $file = fopen("komentar.txt", "a");
        fwrite($file, "$username|$komentar|" . date("Y-m-d H:i:s") . "\n");
        fclose($file);
    } else {
        $error = "Komentar tidak boleh kosong!";
    }
}

// Baca komentar dari file
$komentar_list = [];
if (file_exists("komentar.txt")) {
    $file = file("komentar.txt");
    foreach ($file as $line) {
        list($username, $komentar, $waktu) = explode("|", trim($line));
        $komentar_list[] = [
            'username' => $username,
            'komentar' => $komentar,
            'waktu' => $waktu
        ];
    }
    $komentar_list = array_reverse($komentar_list); // Tampilkan komentar terbaru di atas
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Komentar</h1>
        <p>Berikan komentar Anda tentang Luzuno:</p>

        <!-- Form komentar (hanya untuk pengguna yang sudah login) -->
        <?php if (isset($_SESSION['username'])) : ?>
            <form action="komentar.php" method="POST">
                <textarea name="komentar" rows="4" placeholder="Tulis komentar Anda..." required></textarea>
                <button type="submit" class="btn">Kirim Komentar</button>
            </form>
            <?php if ($error) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        <?php else : ?>
            <p>Anda harus <a href="login.php">login</a> untuk menambahkan komentar.</p>
        <?php endif; ?>

        <!-- Daftar komentar -->
        <h2>Komentar Terbaru</h2>
        <?php if (empty($komentar_list)) : ?>
            <p>Belum ada komentar.</p>
        <?php else : ?>
            <div class="komentar-list">
                <?php foreach ($komentar_list as $item) : ?>
                    <div class="komentar-item">
                        <p><strong><?php echo htmlspecialchars($item['username']); ?></strong> - <?php echo htmlspecialchars($item['waktu']); ?></p>
                        <p><?php echo htmlspecialchars($item['komentar']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <a href="dashboard.php" class="btn">Kembali ke Dashboard</a>
    </div>
</body>
</html>
