-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 14.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leon_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `harga_awal` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `slug_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `tanggal`, `waktu`, `harga_awal`, `deskripsi`, `slug_kategori`) VALUES
(30, 'Keramik kuno dinasty Vas Biru Putih Lukis Naga', '2020-06-06', '13:30:10', '1400000', 'Tinggi : 27 cm\r\n\r\nDiameter : 15 cm\r\n\r\nJual Vas Biru Putih Motif Naga halus. Silahkan Dicermati Sendiri. kondisi utuh tanpa cacat.\r\n\r\nsilahkan dicermati foto2 nya. ane dapat koleksi ini dari kolektor di surabaya.. yang sudah pensiun\r\n\r\nmasalah namanya apa? atau usia berapa? dan dynasty apa? cing, ming, yuan, sung, tang, kangxi, song silahkan dinilaii sendiri gan. yang pasti agan agan pasti lebih pintar hehe. ane gaktau gan, daripada ngarang2 sejarah yang belum tentu benar. lebih baik nanya mbah google aja.\r\n\r\nkoleksi eksklusif, langka dan jarang ada gan. layak dikoleksi untuk agan agan penggemar barang antik,, atau kolektor keramik monggo.\r\n\r\nane buka harga cuma 1,4 jt nego halus (silahkan lihat part lainnya di iklan saya)\r\n\r\nposisi barang ada di perum citra harmoni blok F2 no 59 sidoarjo', 'barang_antik'),
(31, 'Barang Antik Peninggalan Voc', '2020-06-06', '13:34:39', '5000000', 'Assalamualaikum.\r\n\r\nKali disini ada kolektor yg tertarik, boleh langsung aja hub nomer yg tertera ya.\r\n\r\nTerima Kasih.', 'barang_antik'),
(32, 'Pintu bali dari kayu nangka', '2020-06-06', '13:37:24', '7000000', 'Pintu bali asli , barang lama', 'barang_antik'),
(33, 'Casio dual time kuno', '2020-06-06', '15:42:33', '500000', 'Casio model kuno\r\n\r\nDual time\r\n\r\nMinus digital habis batre, Analog hidup, Rantai sedang, Buat cwo cwe', 'barang_antik'),
(34, 'Vellfire 2.5 G ATPM 2018 White', '2020-06-06', '15:47:29', '895000000', 'Jl. Sultan Iskandarmuda No.79B\r\n\r\nArteri Pondok Indah, Jakarta Selatan\r\n\r\n(Deretan dari arah Gandaria City Mall ke arah Pondok Indah Mall 1, pas sebelum rumah makan Padang Garuda)', 'mobil'),
(35, 'Suzuki Karimun Kotak th 2001', '2020-06-06', '15:52:45', '41000000', 'Suzuki Karimun kotak th 2001, pajak Hidup sampai 12-2020, Body mulus kinclong orginal luar dalam', 'mobil'),
(36, 'VESPA 946 EMPORIO ARMANI', '2020-06-06', '18:09:48', '370000000', 'Vespa 946 Emporio Armani pmk 2016 Plat D, Tangan Pertama, Pajak Juni 2021, Mulus', 'motor'),
(37, 'Fs koleksian softail deluxe full paper', '2020-06-06', '18:12:21', '585000000', 'Kondisi motor simpenan jarang pake , udah full opsion', 'motor'),
(38, 'test', '2020-06-08', '13:59:48', '40000', 'test test test test test', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_kategori`
--

CREATE TABLE `barang_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_kategori`
--

INSERT INTO `barang_kategori` (`id`, `nama`, `slug`) VALUES
(7, 'Mobil', 'mobil'),
(8, 'Motor', 'motor'),
(9, 'Rumah', 'rumah'),
(10, 'Barang antik', 'barang_antik'),
(11, 'Lainnya', 'lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_barang`
--

CREATE TABLE `gambar_barang` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_barang`
--

INSERT INTO `gambar_barang` (`id_gambar`, `id_barang`, `id_petugas`, `nama_gambar`) VALUES
(7, 30, 7, 'MTAwMTYz_z65A4ibpzE.jpg'),
(8, 31, 7, 'MTAwMTYz_LmiSXIHqW0.jpg'),
(9, 32, 7, 'MTAwMTYz_UTm8Qrnk0z.jpg'),
(10, 33, 7, 'MTAwMTYz_AuMlnVrRsW.jpg'),
(11, 34, 7, 'MTAwMTYz_Eh9aw7mJOl.jpg'),
(12, 35, 7, 'MTAwMTYz_hVPByBOdX0.jpg'),
(13, 36, 7, 'MTAwMTYz_OZp7xL3k1x.jpg'),
(14, 37, 7, 'MTAwMTYz_gMixUlKLqN.jpg'),
(15, 38, 7, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_lelang`
--

CREATE TABLE `history_lelang` (
  `id_history` int(11) NOT NULL,
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `harga_penawaran` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_lelang`
--

INSERT INTO `history_lelang` (`id_history`, `id_lelang`, `id_barang`, `id_user`, `harga_penawaran`, `tanggal`, `waktu`) VALUES
(44, 27, 30, 4, '1450000000', '2020-06-08', '07:48:18'),
(45, 35, 38, 4, '4000000', '2020-06-08', '14:27:15'),
(46, 27, 30, 3, '1460000000', '2020-06-08', '15:22:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lelang`
--

CREATE TABLE `lelang` (
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_lelang` date DEFAULT NULL,
  `waktu_lelang` time DEFAULT NULL,
  `harga_akhir` int(15) NOT NULL,
  `id_user` int(11) DEFAULT 1,
  `id_petugas` int(11) NOT NULL,
  `status` enum('buka','tutup','berakhir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lelang`
--

INSERT INTO `lelang` (`id_lelang`, `id_barang`, `tanggal_lelang`, `waktu_lelang`, `harga_akhir`, `id_user`, `id_petugas`, `status`) VALUES
(27, 30, NULL, NULL, 1460000000, 3, 7, 'buka'),
(28, 31, NULL, NULL, 5000000, 1, 7, 'buka'),
(29, 32, NULL, NULL, 7000000, 1, 7, 'buka'),
(30, 33, NULL, NULL, 500000, 1, 7, 'buka'),
(31, 34, NULL, NULL, 895000000, 1, 7, 'buka'),
(32, 35, NULL, NULL, 41000000, 1, 7, 'buka'),
(33, 36, NULL, NULL, 370000000, 1, 7, 'buka'),
(34, 37, NULL, NULL, 585000000, 1, 7, 'buka'),
(35, 38, NULL, NULL, 4000000, 4, 7, 'berakhir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id_user`, `nama_lengkap`, `username`, `password`, `telp`, `foto`) VALUES
(1, 'default', 'default', 'default', '', ''),
(2, 'albi fajar', 'alfarama', '$2y$10$ug7TnRKx88GlH7ju8UnM/O5n4mXaPXYA1ZhcJUw3QwXDKp9VLUQBe', '089691527986', ''),
(3, 'albi fajar ramadhan', 'alfa', '$2y$10$.TDIFxXcZnx67qCxBFiopO69tJRdohZf24wV3R7/6uARnv32lOEUq', '009900000000', ''),
(4, 'albi fajar ramadhan', 'house', '$2y$10$d4UbEMOFZghMIu3wxQGWSeFYP4fWq6/sS.emdRbLpzzc6.KQZjo0G', '089691527986', ''),
(5, 'memusnakan kelise', 'muse', '$2y$10$5jriCqDS.W9J4AZOd2xVXO7ktf0sJbbdkluKL4MJRhkxjRkAUiX32', '089691527986', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('selesai','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_status`
--

CREATE TABLE `pesan_status` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level_user` enum('user','petugas','admin') NOT NULL,
  `status_now` enum('notifikasi','pesan','dibaca') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL,
  `status` enum('off','on') NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `foto`, `id_level`, `status`) VALUES
(4, 'albi fajar ramadhan', 'admin', '$2y$10$Biszd01NKMjEH7ab0c/0NODVHYB4CQb4j9sGSZp/i8SDlDc8dKjoG', '', 1, 'off'),
(7, 'albi fajar ramadhan', 'petugas', '$2y$10$346UQo1cgtWzMrZJpBJ1he3dNADsYAVuafdSvL4fyT6QVj76cBOse', '', 2, 'off');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `slug_kategori` (`slug_kategori`);

--
-- Indeks untuk tabel `barang_kategori`
--
ALTER TABLE `barang_kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indeks untuk tabel `gambar_barang`
--
ALTER TABLE `gambar_barang`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_gambar` (`id_gambar`,`id_barang`,`id_petugas`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_lelang` (`id_lelang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_history` (`id_history`);

--
-- Indeks untuk tabel `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id_lelang`),
  ADD KEY `id_lelang` (`id_lelang`,`id_barang`,`id_user`,`id_petugas`),
  ADD KEY `id_lelang_2` (`id_lelang`,`id_barang`,`id_user`,`id_petugas`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `pesan_status`
--
ALTER TABLE `pesan_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`,`id_level`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `barang_kategori`
--
ALTER TABLE `barang_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gambar_barang`
--
ALTER TABLE `gambar_barang`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `lelang`
--
ALTER TABLE `lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_status`
--
ALTER TABLE `pesan_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar_barang`
--
ALTER TABLE `gambar_barang`
  ADD CONSTRAINT `gambar_barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `gambar_barang_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD CONSTRAINT `history_lelang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `masyarakat` (`id_user`),
  ADD CONSTRAINT `history_lelang_ibfk_2` FOREIGN KEY (`id_lelang`) REFERENCES `lelang` (`id_lelang`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `history_lelang_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `lelang`
--
ALTER TABLE `lelang`
  ADD CONSTRAINT `lelang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `lelang_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
