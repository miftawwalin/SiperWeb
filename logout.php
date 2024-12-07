<?php
session_start();
session_destroy(); // Mengakhiri semua sesi
header("Location: login.php"); // Arahkan ke halaman login
exit();
?>
