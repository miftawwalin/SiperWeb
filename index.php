<?php 
session_start();
include 'koneksi.php';

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil username dari sesi
$username = $_SESSION['username'];

// Default nama pengguna jika tidak ditemukan
$nama_user = "Guest";

// Query untuk mendapatkan nama pengguna berdasarkan username
$query = "SELECT username FROM user WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Jika data ditemukan, ambil nama pengguna
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_user = $row['username'];
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Daerah</title>
    <link rel="stylesheet" href="css/index.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  </head>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="profile">
          <img src="img/MIFTAHUL.png" alt="" class="profile-pic" />
          <span class="profile-name"><?php echo($username); ?></span> 
          <p class="profile-role">Administrator</p>
        </div>
        <nav>
          <ul>
            <li>
              <a href="#" class="active"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
              <a href="datasekolah.php"><i class="fas fa-school"></i> Data Sekolah</a>
            </li>
            <li>
              <a href="databuku.php"><i class="fas fa-book"></i> Data Buku</a>
            </li>
            <li>
              <a href="datapeminjaman.php"><i class="fas fa-sign-out-alt"></i> Peminjaman</a>
            </li>
            <li>
              <a href="datapengembalian.php"><i class="fas fa-sign-in-alt"></i> Pengembalian</a>
            </li>
            <li>
              <a href="dataadmin.php"><i class="fas fa-user-shield"></i> Data Admin</a>
            </li>
            <li>
              <a href="logout.php"><i class="fas fa-user-shield"></i>Logout</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Akhir Sidebar -->
      <!-- Main content -->
      <div class="main-content">
        <header>
          <div class="user-icon">
            <img style="width: 80px; height: 80px" src="img/LAMBANG_KABUPATEN_KARAWANG.png" width="250" height="250" alt="User Icon" />
          </div>
          <h1>Perpustakaan Daerah Kabupaten Karawang</h1>
        </header>
        <div class="dashboard">
          <div class="card">
            <div class="card-icon">
              <img src="" class="fas fa-graduation-cap" />
            </div>
            <div class="card-details">
              <p>Total Siswa</p>
              <h2>1</h2>
            </div>
          </div>
          <div class="card">
            <div class="card-icon">
              <img src="" class="fas fa-book" />
            </div>
            <div class="card-details">
              <p>Total Buku</p>
              <h2>1</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Main Content -->
    </div>
  </body>
</html>
