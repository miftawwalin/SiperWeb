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
    <link rel="stylesheet" href="css/buku.css" />
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
        <li><a href="dataadmin.php">Data Admin</a></li>
      </ul>
    </div>
    <div class="main-content">
      <h2>Upload Data Buku</h2>
      <form>
        <label for="id-buku">Id Buku:</label>
        <input type="text" id="id-buku" name="id-buku" />
        <br />
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" />
        <br />
        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="penulis" />
        <br />
        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" />
        <br />
        <label for="tahun-terbit">Tahun Terbit:</label>
        <input type="text" id="tahun-terbit" name="tahun-terbit" />
        <br />
        <label for="asal-sekolah">Asal Sekolah:</label>
        <input type="text" id="asal-sekolah" name="asal-sekolah" />
        <br />
        <button type="submit">Upload</button>
      </form>
    </div>
  </body>
</html>
