-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 03:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(4) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(17) DEFAULT NULL,
  `password` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`) VALUES
('01', 'Miftahul AI', 'mifta41', 'admin1'),
('o2', 'Miftahul AI', 'mifta41@gmail.com', 'mifta41');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Miftahul AI', 'mifta@gmail.com', '$2y$10$ndTVEiSDejJNHZ438mLhKeHl8cI1STWp8GIIHbbQ9PtrqVRNucD5a', '2024-12-02 17:50:09'),
(2, 'Reka Permana', 'rekka21@gmail.com', '$2y$10$VGuv/P0xpgkdMb3j1PHRi.wujjIASX9pPrHjYOhCT/xOEGE7r1.o2', '2024-12-05 18:06:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Struktur dari tabel `tbldata_buku`
--

CREATE TABLE `tbldata_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` varchar(4) DEFAULT NULL,
  `fk_induk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbldata_buku`
--

INSERT INTO `tbldata_buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `fk_induk`) VALUES
(1, 'Matematika Cermat', 'Handoko Siswanto', 'Fiki Nur Sabani', '2020', 12919191),
(2, 'Fisika', 'Johan Cruyf', 'Malika', '2020', 1021901011),
(3, 'Siksa Kubur', 'Muhammad Ali', 'Rojak', '2012', 2147483647),
(5, 'Si Kancil yang Licik', 'Upin', 'Ipin', '2021', 23111),
(6, 'Jalan yang jauh', 'Jay', 'Stefan', '2019', 839219191),
(7, 'awdawdaw', 'wrerqwaw', 'awd', '1323', 839219191);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldata_sekolah`
--

CREATE TABLE `tbldata_sekolah` (
  `no_induk` int(20) NOT NULL,
  `nm_sekolah` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbldata_sekolah`
--

INSERT INTO `tbldata_sekolah` (`no_induk`, `nm_sekolah`, `alamat`, `email`) VALUES
(23111, 'BINA KARYA', 'krw', 'bk@aaa.caa'),
(12919191, 'SMA', 'Jl Manunggal VII', 'akak@kaka.coa'),
(29119191, 'smk 1 krw', 'krw', 'smk1@krw.com'),
(98129891, 'smk2 krw', 'krw', 'smk2@krw.com'),
(200192188, 'SMKN 1 KARAWANG', 'JL BARU 2', 'smkn1@krw.com'),
(839219191, 'smk 3 krw', 'krw', 'smk3@krw.com'),
(888188181, 'SMK PERTANIAN', 'jl ahmad yani', 'smkpert@krw.com'),
(1021901011, 'SMAN 2 KARAWANG', 'Jl MANUNGGAL VII LAMARAN', 'sman2.krw@gmail.com'),
(1981928191, 'sman 1 krw', 'krw', 'sman1@krw.com'),
(2147483647, 'Taruna Karya', 'TK 2 tk 1', 'tktkt@alal.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpeminjaman`
--

CREATE TABLE `tblpeminjaman` (
  `pk_id` int(11) NOT NULL,
  `fk_induk_sekolah` int(11) DEFAULT NULL,
  `fk_buku` int(11) DEFAULT NULL,
  `tgl_peminjam` timestamp NULL DEFAULT NULL,
  `tgl_kembali` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblpeminjaman`
--

INSERT INTO `tblpeminjaman` (`pk_id`, `fk_induk_sekolah`, `fk_buku`, `tgl_peminjam`, `tgl_kembali`) VALUES
(1, 1021901011, 2, '2024-11-24 17:00:00', '2024-12-30 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indeks untuk tabel `tbldata_buku`
--
ALTER TABLE `tbldata_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `fk_buku_sekolah` (`fk_induk`);

--
-- Indeks untuk tabel `tbldata_sekolah`
--
ALTER TABLE `tbldata_sekolah`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indeks untuk tabel `tblpeminjaman`
--
ALTER TABLE `tblpeminjaman`
  ADD PRIMARY KEY (`pk_id`),
  ADD KEY `fk_induk_sekolah` (`fk_induk_sekolah`),
  ADD KEY `fk_buku` (`fk_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbldata_buku`
--
ALTER TABLE `tbldata_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblpeminjaman`
--
ALTER TABLE `tblpeminjaman`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbldata_buku`
--
ALTER TABLE `tbldata_buku`
  ADD CONSTRAINT `fk_buku_sekolah` FOREIGN KEY (`fk_induk`) REFERENCES `tbldata_sekolah` (`no_induk`);

--
-- Ketidakleluasaan untuk tabel `tblpeminjaman`
--
ALTER TABLE `tblpeminjaman`
  ADD CONSTRAINT `fk_buku` FOREIGN KEY (`fk_buku`) REFERENCES `tbldata_buku` (`id_buku`),
  ADD CONSTRAINT `fk_induk_sekolah` FOREIGN KEY (`fk_induk_sekolah`) REFERENCES `tbldata_sekolah` (`no_induk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
