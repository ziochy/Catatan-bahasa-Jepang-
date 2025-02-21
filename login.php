<?php
session_start(); // Mulai sesi

// Cek apakah form login sudah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Baca data pengguna dari file (contoh sederhana)
    $file = file("users.txt");
    $login_success = false;

    // Loop untuk memeriksa setiap baris di file
    foreach ($file as $line) {
        list($stored_username, $stored_password) = explode(":", trim($line));
        
        // Cek apakah username dan password cocok
        if ($username == $stored_username && password_verify($password, $stored_password)) {
            $login_success = true;
            break;
        }
    }

    // Jika login berhasil
    if ($login_success) {
        $_SESSION['username'] = $username; // Simpan username di sesi
        header("Location: dashboard.php"); // Redirect ke dashboard
        exit();
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Luzuno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login ke Luzuno</h1>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" class="btn">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a>.</p>
    </div>
</body>
</html>
