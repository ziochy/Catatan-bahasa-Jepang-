<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Baca data dari file (contoh sederhana)
    $file = file("users.txt");
    $login_success = false;

    foreach ($file as $line) {
        list($stored_username, $stored_password) = explode(":", trim($line));
        if ($username == $stored_username && password_verify($password, $stored_password)) {
            $login_success = true;
            break;
        }
    }

    if ($login_success) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
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
