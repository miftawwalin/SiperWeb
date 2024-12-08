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
    <header>
      <div class="logo">
        <img src="logo.png" alt="Perpustakaan Daerah Kabupaten Karawang" />
      </div>
      <div class="user-icon">
        <img src="user-icon.png" alt="User Icon" />
      </div>
    </header>
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
          <tr>
            <td>1</td>
            <td>123456</td>
            <td>Buku A</td>
            <td>A</td>
            <td>A</td>
            <td>2019</td>
            <td>SMPN A</td>
            <td>
              <button class="edit-icon"></button>
              <button class="delete-icon"></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
