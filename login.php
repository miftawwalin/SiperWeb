
<?php
session_start();
include 'koneksi.php'; // Menghubungkan ke file koneksi database

// Periksa apakah pengguna sudah login
if (isset($_SESSION['username'])) {
  header("Location: index.php");  // Arahkan ke dashboard jika sudah login
  exit();
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query untuk memeriksa apakah email terdaftar
    $query = "SELECT * FROM usersignup WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password (menggunakan hash yang disimpan saat signup)
        if (password_verify($password, $user['password'])) {
            // Simpan informasi pengguna ke session
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];

            echo"
            <script>    
                swal.fire({
                    title: 'Login Berhasil!',
                    icon: 'success'
                }).then(function() {
                    window.location.href = 'home.php';
                });
            </script>";

            // Redirect ke halaman index
            header("Location: index.php");
            exit();
        } else {
            // Password salah
            $error = "Password salah!";
        }
    } else {
        // Email tidak ditemukan
        $error = "Email tidak terdaftar!";
    }
  } 
      else{
        echo"
        <script>    
            swal.fire({
                  title: 'Login Gagal!',
                  icon: 'error'
            }).then(function() {
                window.location.href = 'index.php';
            });
        </script>";
      }

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Perpustakaan Daerah</title>
    <link rel="stylesheet" href="css/login.css" />
    <a></a>
  </head>
  <body>
    <div class="login-container">
      <div class="login-box">
        <div class="logo-container">
          <img src="img/logo perpus.jpg" alt="Library Logo" class="logo" />
        </div>
        <h2>Perpustakaan Daerah Kabupaten Karawang</h2>

        <!-- Menampilkan error jika ada -->
        <?php if (isset($error)): ?>
          <div class="error-message">
            <p><?php echo $error; ?></p>
          </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
          </div>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="signup">
          <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
      </div>
    </div>
  </body>
</html>

