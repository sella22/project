-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2022 pada 17.57
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemanandata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `c` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `gambar`, `tanggal`, `aktif`) VALUES
(1, 'Ubahlah plaintext : MAHASISWA AKHIR menggunakan algoritma zigzag cipher', 'MHSASKIAIAWAHR', 'MHSSAKIAAIWAHR', 'MAHASISWAAKHIR', 'MHAASISWAHAIHR', 'b', '', '2018-07-02', 'Y'),
(2, 'Lakukan deskripsi dari clipertext: VDEWX dengan kunci 3 menggunakan caesar cipher', 'DALAM', 'KAMAR', 'SABTU', 'TANGGA', 'c', '', '2018-07-02', 'Y'),
(3, 'Plainteks : DATA, enkripsikanlah dengan caesar cipher kunci 5 menggunakan caesar cipher', 'IDYD', 'IGYG', 'IHYH', 'IFYF', 'd', '', '2018-07-18', 'Y'),
(4, 'Dibawah ini manakah kriptografi yang merupakan perluasan dari Caesar cipper?', 'Plyfair cipher', 'Caesar cipher', 'Transposisi cipher', 'Affine cipher', 'd', '', '2018-07-02', 'Y'),
(5, 'Buatlah Plaintext: CUCI BAJUMU dengan kunci 5 dengan transposisi cipher', 'CAUJCUIMBU', 'CJAUCUIMBU', 'CUIMBUCAJU', 'World Web Wide', 'JUCAIMCUBU', '', '2018-07-02', 'Y'),
(6, 'Buatlah plyfair chipper dari MAKAN', 'PSSGDY', 'GSDYPS', 'PSGSDY', 'DYPASG', 'C', '', '2018-07-02', 'Y'),
(7, 'Algoritma apakah yang dipublikasikan oleh diplomat prancis bernama Blaise de Vigènere', 'Plyfair cipher', 'Caesar cipher ', 'Vigenere cipher', 'Transposisi cipher', 'c', '', '2020-10-04', 'Y'),
(8, 'Diketahui plainteks :BUNGA, enkripsikanlah dengan Affine cipher b=3 dan m=5', 'IFGDY', 'DSYPS', 'PGSDY', 'IZQHD', 'd', '', '0000-00-00', 'Y'),
(9, 'Pada tahun berapakah playfair cipher dipopulerkan oleh baron lyon playfair ', '1853', '1854', '1855', '1856', 'b', '', '0000-00-00', 'Y'),
(10, 'Siapakah nama tokoh penemu yang ada dibawah ini:', 'Algoritma Hill Cipher', 'Algoritma Vigenere Cipher', 'Algoritma Caesar Cipher', 'Algoritma Playfair Cipher', 'a', 'Hill2.jpg', '2022-10-26', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
