<?php
session_start(); // Mulai sesi
session_destroy(); // Hapus semua data sesi
header("Location: login.php"); // Redirect ke halaman login
exit();
?>
