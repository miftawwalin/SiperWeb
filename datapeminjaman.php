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
    <link rel="stylesheet" href="css/datapeminjaman.css" />
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
      <div class="user-profile">
        <img src="user-profile.png" alt="Anita Silvana" />
        <span>Anita Silvana</span>
        <span>Administrator</span>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="datasekolah.php">Data Sekolah</a></li>
        <li><a href="databuku.php">Data Buku</a></li>
        <li><a href="#" class="active">Peminjaman</a></li>
        <li><a href="datapengembalian.php">Pengembalian</a></li>
        <li><a href="dataadmin.php">Data Admin</a></li>
      </ul>
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
