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
    <link rel="stylesheet" href="css/datapengembalian.css" />
  </head>
  <body>
    <header>
    <div class="profile">
          <img src="img/MIFTAHUL.png" alt="" class="profile-pic" />
          <p class="profile-name"> $username </p>
          <p class="profile-role">Administrator</p>
        </div>
      <div class="logo">
        <img src="logo.png" alt="Perpustakaan Daerah Kabupaten Karawang" />
      </div>
      <div class="user-icon">
        <img src="user-icon.png" alt="User Icon" />
      </div>
    </header>
    <div class="sidebar">
      <div class="user-profile">
        <img src="user-profile.png" alt="Anita Silvana" />
        <span>Administrator</span>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="datasekolah.php">Data Sekolah</a></li>
        <li><a href="databuku.php">Data Buku</a></li>
        <li><a href="datapeminjaman.php">Peminjaman</a></li>
        <li><a href="#" class="active">Pengembalian</a></li>
        <li><a href="dataadmin.php">Data Admin</a></li>
      </ul>
    </div>
    <div class="main-content">
      <h2>Data Pengembalian</h2>
      <button class="button" onclick="window.location.href='Pengembalian.php'">Upload Data</button>
      <div class="search-bar">
        <input type="search" placeholder="Cari" />
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>No Induk</th>
            <th>Id Buku</th>
            <th>Judul Buku</th>
            <th>Tanggal Kembali</th>
            <th>Denda</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>12345678</td>
            <td>1234567</td>
            <td>A</td>
            <td>25/10/2024</td>
            <td>
              <button class="edit-icon"></button>
            </td>
          </tr>
        </tbody>
      </table>
      <button class="kembali-button">Kembali</button>
    </div>
  </body>
</html>
