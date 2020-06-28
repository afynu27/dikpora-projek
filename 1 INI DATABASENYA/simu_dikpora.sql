-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2020 pada 10.34
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simu_dikpora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nomer_telpon` varchar(14) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `nama`, `email`, `nomer_telpon`, `password`) VALUES
('', '', '', '', ''),
('aa', 'danda', 'dandalion@gmail.com', '08123456', 'dada'),
('danu', 'danu de lavonte', 'danu@gmail.com', '08123456', 'danu'),
('hahang', 'hahang sudirhang', 'suhang@gmail.com', '08123456', 'hahaha'),
('jefriy', 'jefri havana', 'jejef@gmail.com', '018166161', 'jefriy'),
('lalunalamaba', 'luna maba', 'luna@wikipedia.com', '08121211', 'lalunalamaba'),
('Rudi_habibi', 'rudi habibi', 'rudi@gmail.com', '081384272142', 'rudihabibi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `komentar` text NOT NULL,
  `tujuan` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `judul`, `komentar`, `tujuan`, `username`) VALUES
(4, 'fasilitas', 'fasilitas pendidikan kurang', 'Guru', 'danu'),
(5, 'www', 'www', 'Umum_Balai Tekkomdik_Guru', 'danu'),
(6, 'jam kerja', 'kenapa saya tidak bisa mengunjungi kantor padahal jam kerja sudah tertera didepan pintu itu jam 9. saya dikantor jam 9 lewat tapi tidak ada yang datang', 'Balai Tekkomdik', 'danu'),
(7, 'penilaian pribadi', 'menurut saya pribadi DIKPORA DIY sudah sangat baik kinerjanya', 'Umum', 'lalunalamaba'),
(8, 'pembagian masker', 'saya sarankan dikpora dan lembaga lainnya turut serta membantu dalam pembagian masker gratis', 'Umum', 'jefriy'),
(9, 'Pembangunan sekolah', 'saya berharap pembangunan sekolah dapat direalisasikan bukan hanya dari segi infrastruktur tapi juga dari dimensi kualitas pengajarnya', 'Guru dan Tenaga Kependidikan', 'Rudi_habibi'),
(10, 'pembagian masker', 'haha', 'Guru dan Tenaga Kependidikan', 'danu'),
(11, 'aku baru masuk', 'aku baru buat akun lhooo', 'Umum', 'hahang'),
(12, 'penilaian pribadi', 'sangat baik kinerjanya', 'Balai Tekkomdik', 'hahang'),
(13, 'www', 'contoh', 'Umum', 'hahang'),
(14, 'contoh', 'contoh', 'umum', 'hahang'),
(15, 'berhasil', 'berhasil', 'umum', 'hahang'),
(16, 'pusing', 'pusing saya kalau ngurus ini itu di Tekkomdik', 'Balai Tekkomdik', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
