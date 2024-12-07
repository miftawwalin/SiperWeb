<?php 
session_start();
include 'koneksi.php'; // Menghubungkan ke file koneksi database

// Periksa apakah pengguna sudah login
if (isset($_SESSION['username'])) {
  header("Location: login.php");  // Arahkan ke halaman login jika sudah signup
  exit();
}

// Proses jika form dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $confirm_password = trim($_POST['confirm_password']);

  // Validasi input
  if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    $error = "All fields are required.";
  } elseif ($password !== $confirm_password) {
    $error = "Password tidak cocok.";
  } else {
    // Hashing password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Periksa apakah email sudah digunakan
    $query_check_email = "SELECT * FROM usersignup WHERE email = ?";
    $stmt = $conn->prepare($query_check_email);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $error = "Email already in use.";
    } else {
      // Insert data ke tabel usersignup
      $query_insert = "INSERT INTO usersignup (username, email, password) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($query_insert);
      $stmt->bind_param("sss", $username, $email, $hashed_password);

      if ($stmt->execute()) {
        // Redirect ke login.php setelah berhasil
        header("Location: login.php");
        exit();
      } else {
        $error = "Registrasi gagal. Mohon dicoba kembali.";
      }
    }

    $stmt->close();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup - Perpustakaan Daerah</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <div class="signup-container">
      <div class="signup-box">
        <div class="logo-container">
          <img src="img/logo perpus.jpg" alt="Library Logo" class="logo" />
        </div>
        <h2>Perpustakaan Daerah Kabupaten Karawang</h2>
        <form action="signup.php" method="POST">
          <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
          <?php endif; ?>
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
          </div>
          <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm_password" required />
          </div>
          <button type="submit" class="signup-btn">Sign up</button>
        </form>
        <div class="login">
          <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
