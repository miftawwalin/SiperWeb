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
    <link rel="stylesheet" href="css/peminjaman.css" />
  </head>
  <body>
    <header>
    <div class="profile">
          <img src="img/MIFTAHUL.png" alt="" class="profile-pic" />
          <p class="profile-name"> $username </p>
          <p class="profile-role">Administrator</p>
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
      <h2>Data Peminjaman</h2>
      <form>
        <label for="no-induk">No Induk:</label>
        <input type="text" id="no-induk" name="no-induk" />
        <br />
        <label for="id-buku">Id Buku:</label>
        <input type="text" id="id-buku" name="id-buku" />
        <br />
        <label for="judul-buku">Judul Buku:</label>
        <input type="text" id="judul-buku" name="judul-buku" />
        <br />
        <label for="tanggal-pinjam">Tanggal Pinjam:</label>
        <input type="text" id="tanggal-pinjam" name="tanggal-pinjam" />
        <br />
        <label for="tanggal-kembali">Tanggal Kembali:</label>
        <input type="text" id="tanggal-kembali" name="tanggal-kembali" />
        <br />
        <button type="submit">Upload</button>
      </form>
    </div>
  </body>
</html>
