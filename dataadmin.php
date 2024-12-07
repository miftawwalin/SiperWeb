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
    <link rel="stylesheet" href="css/dataadmin.css" />
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
        <li><a href="datapeminjaman.php">Peminjaman</a></li>
        <li><a href="datapengembalian.php">Pengembalian</a></li>
        <li><a href="#" class="active">Data Admin</a></li>
      </ul>
    </div>
    <div class="main-content">
      <h2>Data Admin</h2>
      <div class="tabs">
        <button class="active">Data Admin</button>
        <button onclick="window.location.href='admin.php'">Upload Data</button>
        <button>Log out</button>
      </div>
      <div class="search-bar">
        <input type="search" placeholder="Cari" />
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>NIP Induk</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>No Telepon</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>123456789</td>
            <td>Anita Silvana</td>
            <td>A</td>
            <td>085xxxxxxx</td>
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
