<?php 
session_start();
include 'koneksi.php'; // Menghubungkan ke file koneksi database
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Daerah Kabupaten Karawang</title>
    <link rel="stylesheet" href="css/datasekolah.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  </head>
  <body>
    <header>
      <div class="logo">
        <img class="logo-pic" src="img/logo perpus.jpg" alt="#" />
      </div>
      <div class="user-icon">
        <img src="user-icon.png" alt="User Icon" />
      </div>
    </header>
    <div class="sidebar">
      <div class="profile">
        <img src="img/MIFTAHUL.png" alt="" class="profile-pic" />
        <p class="profile-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>
        <p class="profile-role">Administrator</p>
      </div>
      <ul>
        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#" class="active"><i class="fas fa-school"></i> Data Sekolah</a></li>
        <li><a href="databuku.php"><i class="fas fa-book"></i> Data Buku</a></li>
        <li><a href="datapeminjaman.php"><i class="fas fa-sign-out-alt"></i> Peminjaman</a></li>
        <li><a href="datapengembalian.php"><i class="fas fa-sign-in-alt"></i> Pengembalian</a></li>
        <li><a href="dataadmin.php"><i class="fas fa-user-shield"></i> Data Admin</a></li>
      </ul>
    </div>
    <div class="main-content">
      <h2>Data Sekolah</h2>
      <div class="tabs">
        <button class="active">Data Sekolah</button>
        <button onclick="window.location.href='sekolah.php'">Upload Data</button>
      </div>
      <div class="search-bar">
        <input type="search" placeholder="Cari" />
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>No Induk</th>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Data Buku</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Query untuk mengambil data dari tabel
          $query = "SELECT * FROM tbldata_sekolah";
          $result = mysqli_query($conn, $query);

          // Periksa apakah ada data
          if (mysqli_num_rows($result) > 0) {
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $no++ . "</td>";
                  echo "<td>" . $row['no_induk'] . "</td>";
                  echo "<td>" . $row['nm_sekolah'] . "</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td><button onclick=\"window.location.href='buku.html'\">Lihat Data</button></td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
