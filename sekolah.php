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
    <link rel="stylesheet" href="css/sekolah.css" />
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="logo.png" alt="Perpustakaan Daerah Karawang" />
      </div>
      <div class="user-icon">
        <img src="user-icon.png" alt="User Icon" />
        <span>Anita Silvana</span>
        <span>Administrator</span>
      </div>
    </header>
    <div class="sidebar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="datasekolah.html">Data Sekolah</a></li>
        <li><a href="databuku.html">Data Buku</a></li>
        <li><a href="datapeminjaman.html">Peminjaman</a></li>
        <li><a href="datapengembalian.html">Pengembalian</a></li>
        <li><a href="dataadmin.html">Data Admin</a></li>
      </ul>
    </div>
    <div class="main-content">
      <h2>Upload Data Sekolah</h2>
      <form>
        <label for="no-induk">No Induk:</label>
        <input type="text" id="no-induk" name="no-induk" />
        <br />
        <label for="nama-sekolah">Nama Sekolah:</label>
        <input type="text" id="nama-sekolah" name="nama-sekolah" />
        <br />
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea>
        <br />
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" />
        <br />
        <button type="submit">Upload</button>
      </form>
    </div>
  </body>
</html>
