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
    <link rel="stylesheet" href="css/databuku.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  </head>
  <body>
    <div class="sidebar">
        <div class="profile">
          <img src="img/MIFTAHUL.png" alt="" class="profile-pic" />
          <p class="profile-name"> $username </p>
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
              <a href="#" class="active"><i class="fas fa-book"></i> Data Buku</a>
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
    <div class="main-content">
      <h2>Data Buku</h2>
      <div class="tabs">
        <button class="active">Data Buku</button>
        <button onclick="window.location.href='buku.php'">Upload Data</button>
      </div>
      <div class="search-bar">
        <input type="search" placeholder="Cari" />
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Asal Sekolah</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          // Query untuk mengambil data dari tabel
          $query = "SELECT * FROM tbldata_buku";
          $result = mysqli_query($conn, $query);

          // Periksa apakah ada data
          if (mysqli_num_rows($result) > 0) {
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $no++ . "</td>";
                  echo "<td>" . $row['id_buku'] . "</td>";
                  echo "<td>" . $row['judul'] . "</td>";
                  echo "<td>" . $row['penulis'] . "</td>";
                  echo "<td>" . $row['penerbit'] . "</td>";
		  echo "<td>" . $row['tahun_terbit'] . "</td>";
		  echo "<td>" . $row['fk_induk'] . "</td>";
                  echo "<td><button onclick=\"window.location.href='buku.php'\">Lihat Data</button></td>";
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
