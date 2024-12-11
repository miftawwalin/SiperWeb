<?php 
session_start();
include 'koneksi.php'; // Menghubungkan ke file koneksi database

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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Daerah Kabupaten Karawang</title>
    <link rel="stylesheet" href="css/datapeminjaman.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  </head>
  <body>
  <div class="sidebar">
        <div class="profile">
          <img src="img/MIFTAHUL.png" alt="" class="profile-pic" />
          <p class="profile-name"> <?php echo($username); ?> </p>
          <p class="profile-role">Administrator</p>
        </div>
        <nav>
          <ul>
            <li>
              <a href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
              <a href="datasekolah.php"><i class="fas fa-school"></i> Data Sekolah</a>
            </li>
            <li>
              <a href="databuku.php"><i class="fas fa-book"></i> Data Buku</a>
            </li>
            <li>
              <a href="#" class="active"><i class="fas fa-sign-out-alt"></i> Peminjaman</a>
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
    <div class="main-content">
      <h2>Data Peminjaman</h2>
      <button class="button" onclick="window.location.href='peminjaman.php'">Upload Data</button>
      <div class="search-bar">
        <input type="search" placeholder="Cari" />
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>No.Induk</th>
            <th>Id Buku</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>12345678</td>
            <td>1234567</td>
            <td>A</td>
            <td>18/10/2024</td>
            <td>25/10/2024</td>
            <td>
              <button class="edit-icon"></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
