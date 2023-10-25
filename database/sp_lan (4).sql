-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Bulan Mei 2021 pada 23.32
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_lan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `id_bobot` int(5) NOT NULL,
  `nilai_bobot` double DEFAULT NULL,
  `status_bobot` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_bobot`
--

INSERT INTO `tb_bobot` (`id_bobot`, `nilai_bobot`, `status_bobot`) VALUES
(1, 0, 'Tidak'),
(2, 0.2, 'Tidak Tahu'),
(3, 0.4, 'Sedikit Yakin'),
(4, 0.6, 'Cukup'),
(5, 0.8, 'Yakin'),
(6, 1, 'Sangat Yakin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customers`
--

CREATE TABLE `tb_customers` (
  `id_customers` int(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(5) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `data_user` varchar(100) DEFAULT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `persentase` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id_diagnosa`, `user`, `data_user`, `diagnosa`, `persentase`) VALUES
(1, 'c', '', '1', 1),
(2, 'c', '', '0', 0),
(3, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(4, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(5, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(6, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(7, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(8, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(9, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(10, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(11, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(12, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(13, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(14, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(15, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(16, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(17, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(18, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(19, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(20, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(21, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(22, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '2', 2),
(23, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '2', 2),
(24, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '2', 2),
(25, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(26, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(27, 'c', '0.4, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0', 0),
(28, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(29, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(30, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(31, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(32, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(33, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(34, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(35, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(36, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(37, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(38, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(39, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(40, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(41, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(42, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(43, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(44, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '0', 0),
(45, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(46, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(47, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(48, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(49, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(50, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(51, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(52, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1),
(53, 'c', ', , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(5) NOT NULL,
  `kode_gejala` varchar(20) NOT NULL,
  `gejala` varchar(255) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `kode_gejala`, `gejala`, `id_kategori`, `id_bobot`) VALUES
(2, 'G01', 'TLP mati tidak ada nada', 3, 3),
(5, 'G02', 'Cek Rosette lembab air', 3, 3),
(6, 'G03', 'Cek Spliter tidak berfungsi', 3, 4),
(7, 'G04', 'Cek Kabel UTP Telp Rusak', 3, 4),
(8, 'G05', 'Cek Connector RJ 11 tidak berfungsi', 3, 5),
(9, 'G06', 'Nada Telepon Ngetut-tut', 3, 5),
(10, 'G07', 'Nada Telepon bernada panjang', 3, 3),
(11, 'G01', 'Internet tidak bisa connect (TBC)', 4, 6),
(12, 'G02', 'Cek PC tidak mendapatkan IP', 4, 4),
(13, 'G03', 'Cek tidak ada tunggakan pembayaran', 4, 3),
(40, 'G04', 'Koneksi Lambat', 4, 6),
(41, 'G05', 'PC pelanggan di share', 4, 2),
(42, 'G06', 'Bandwidth Kecil', 4, 5),
(43, 'G07', 'Cek paket internet kuota', 4, 4),
(44, 'G08', 'Koneksi putus-putus', 4, 4),
(45, 'G09', 'Cek modem normal', 4, 2),
(46, 'G10', 'Cek kabel parchcord rusak', 4, 5),
(47, 'G11', 'Tidak bisa browsing (TBB)', 4, 6),
(48, 'G12', 'Cek IP PC sesuai dengan IP modem', 4, 2),
(49, 'G13', 'Cek bandwidth tidak sesuai paket', 4, 2),
(50, 'G14', 'Cek konfigurasi setting hilang', 4, 3),
(51, 'G15', 'Lampu indikator PON mati', 4, 5),
(52, 'G16', 'Lampu Indikator LOS merah', 4, 6),
(53, 'G17', 'Cek fast connector tidak berfungsi/rusak', 4, 2),
(54, 'G18', 'Lampu Indikator Power mati', 4, 5),
(55, 'G19', 'Modem ONT tidak menyala', 4, 4),
(56, 'G20', 'Tidak bisa membuka web tertentu', 4, 2),
(57, 'G21', 'Cek proxy sudah sesuai', 4, 2),
(58, 'G22', 'Cek DNS sudah sesuai', 4, 2),
(59, 'G23', 'Modem STB tidak menyala atua tidak berfungsi ', 4, 3),
(60, 'G24', 'Lampu indikator LINK mati', 4, 3),
(61, 'G01', 'Gambar UseeTB Black', 2, 4),
(62, 'G02', 'Cek konfigurasi sudah sesuai', 2, 4),
(63, 'G03', 'Error 1302', 2, 5),
(64, 'G04', 'Koneksi ke EPG gagal', 2, 2),
(65, 'G05', 'Error 1305', 2, 4),
(66, 'G06', 'Cek username tidak sesuai', 2, 4),
(67, 'G07', 'Cek password tidak sesuai', 2, 4),
(68, 'G08', 'Error 1901', 2, 3),
(69, 'G09', 'Error 4514', 2, 2),
(70, 'G10', 'Chanel multicast mengalami data timeout', 2, 2),
(71, 'G11', 'Gambar UseeTV putus-putus', 2, 4),
(72, 'G12', 'Cek Konfigurasi setting hilang', 2, 5),
(73, 'G13', 'Penggantian modem STB baru', 2, 6),
(74, 'G14', 'Error 70116204', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala_user`
--

CREATE TABLE `tb_gejala_user` (
  `id_gejala_user` int(5) NOT NULL,
  `kode_gejala_user` varchar(20) DEFAULT NULL,
  `gejala_user` varchar(255) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `id_bobot` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_gejala_user`
--

INSERT INTO `tb_gejala_user` (`id_gejala_user`, `kode_gejala_user`, `gejala_user`, `id_kategori`, `id_bobot`) VALUES
(2, 'G01', 'Apakah semua kondisi lampu indikator modem ONT menyala hijau', 4, 5),
(3, 'G02', 'Apakah lampu indikator power mati', 4, 5),
(4, 'G03', 'Apakah lampu indikator LOS/PON menyala merah', 4, 6),
(5, 'G04', 'Apakah hanya lampu indikator internet yang mati', 4, 6),
(6, 'G05', 'Apakah modem ONT tersambung dengan aliran listrik', 4, 2),
(7, 'G06', 'Apakah tombol power dalam keadaan ON (aktif)', 4, 5),
(8, 'G07', 'Apakah kabel dibalik modem ONT sudah terpasang dengan baik ?', 4, 3),
(9, 'G08', 'Apakah kecepatan akses internet anda lambat?', 4, 6),
(10, 'G09', 'Apakah hasil tes kecepatan internet anda kurang dari 75% dari paket anda ?', 4, 5),
(11, 'G10', 'Apakah saat menggunakan internet sering putus-putus', 4, 4),
(12, 'G11', 'Apakah situ layanan game tidak masuk dalam internet positif', 4, 3),
(13, 'G12', 'Apakah situs yang diakses tidak dibatasi oleh firewall pada laptop atau komputer', 4, 4),
(14, 'G13', 'Apakah game/console sudah terupdate', 4, 3),
(15, 'G14', 'Apakah setiap kabel LAN sudah terpasang pada port yang tepat pada modem ONT anda', 4, 4),
(16, 'G15', 'Apakah PC/Device anda berada jauh dari modem', 4, 4),
(17, 'G16', 'Apakah anda tidak menggunakan Wifi Extender', 4, 5),
(18, 'G17', 'Apakah alamat web yang diketik sudah benar', 4, 4),
(19, 'G18', 'Apakah website tidak masuk dalam internet positif', 4, 5),
(20, 'G19', 'Apakah anda belum menghapus histofy pencarian pada browser anda', 4, 5),
(21, 'G20', 'Apakah anda selalu mengizinkan Cookie pop up iklan yang muncul ', 4, 4),
(22, 'G21', 'Apakah anda membuka situs yang telah di blok oleh pemerintah atau mengandung spaming', 4, 2),
(23, 'G01', 'Apakah kabel LAN dari Gybrid Box/Decoder ke modem ONT sudah terpasang dengan benar', 2, 6),
(24, 'G02', 'Apakah kabel LAN dari STB sudah terpasang dengan benar pada maisng-masing portnya', 2, 6),
(25, 'G03', 'A[akah pengaturan di TV sudah benar', 2, 5),
(26, 'G04', 'Apakah chanel yang anda tonton sesuai dengan paket yang dimiliki', 2, 3),
(27, 'G05', 'Apakah anda belum berlangganan pada chanel yang ingin di tonton', 2, 2),
(28, 'G06', 'Apakah username sudah diinputkan dengan benar ', 2, 3),
(29, 'G07', 'Apakah password dari username sudah diinputkan dengan benar', 2, 3),
(30, 'G08', 'Apakah sebelumnya anda belum melakukan login pada Indihome TV', 2, 4),
(31, 'G09', 'Cek keadaan kabel LAN yang terhubung dari modem ke TV apakah dalam keadaan baik ', 2, 2),
(32, 'G10', 'Apakah kabel LAN yang terhubung ke TV sudah pada Port yang benar', 2, 3),
(33, 'G11', '`Apakah pada saat menekan tombol pada remote, lampu infrared pada remote menyala dan mengarah ke STB Indihome TV', 2, 4),
(34, 'G12', 'Apakah posisi pemasangan baterai sudah pada petunjuk yang ada pada remote', 2, 5),
(35, 'G13', 'Apakah baterai yang digunakan sudah habis', 2, 5),
(36, 'G01', 'Pastikan layanan Indihome tidak dalam keadaan terisolir', 3, 5),
(37, 'G02', 'Apakah anda mempunyai tunggakan pembayaran', 3, 3),
(38, 'G03', 'Apakah nomor yang dituju adalah no tujuan yang benar', 3, 2),
(39, 'G04', 'Aapakah kabel patch cord / kabel FO dibalik modem ONT sudah terpasang dengan baik pada posisinya', 3, 3),
(40, 'G05', 'Apakah lampu LOS masih menyala merah', 3, 4),
(41, 'G06', 'Apakah kondisi volume pada telepon anda kecil ', 3, 4),
(42, 'G00', 'Langsung menuju ke pusat pelayanan, jika ingin mendiagnosis lebih lanjut dapat melakukan diagnosis di sisi teknisi.', 4, 1),
(43, 'G00', 'Langsung menuju ke pusat pelayanan, jika ingin mendiagnosis lebih lanjut dapat melakukan diagnosis di sisi teknisi.', 3, 1),
(44, 'G00', 'Langsung menuju ke pusat pelayanan, jika ingin mendiagnosis lebih lanjut dapat melakukan diagnosis di sisi teknisi.', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_judul`
--

CREATE TABLE `tb_judul` (
  `id_judul` int(5) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `quote` varchar(200) DEFAULT NULL,
  `gambar1` varchar(100) DEFAULT NULL,
  `gambar2` varchar(100) DEFAULT NULL,
  `gambar3` varchar(100) DEFAULT NULL,
  `gambar4` varchar(100) DEFAULT NULL,
  `gambar5` varchar(100) DEFAULT NULL,
  `gambar6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_judul`
--

INSERT INTO `tb_judul` (`id_judul`, `judul`, `quote`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`) VALUES
(5, 'SISTEM DIAGNOSIS ', 'KAMI HADIR UNTUK KEBUTUHAN SOLUSI GANGGUAN LAYANAN ANDA', 'ujb.png', 'sistem-pakar.png', 'indihome.png', 'belden.png', 'html5.png', 'ti.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id_kabupaten` int(5) NOT NULL,
  `id_provinsi` int(5) DEFAULT NULL,
  `kode_kabupaten` varchar(10) DEFAULT NULL,
  `nama_kabupaten` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id_kabupaten`, `id_provinsi`, `kode_kabupaten`, `nama_kabupaten`) VALUES
(1, 1, '03', 'Gunung Kidul'),
(2, 1, '02', 'Bantul'),
(3, 1, '01', 'Kulon Progo'),
(4, 1, '04', 'Sleman'),
(5, 1, '71', 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kantor`
--

CREATE TABLE `tb_kantor` (
  `id_kantor` int(5) NOT NULL,
  `nama_kantor` varchar(100) DEFAULT NULL,
  `id_provinsi` int(5) DEFAULT NULL,
  `id_kabupaten` int(5) DEFAULT NULL,
  `id_kecamatan` int(5) DEFAULT NULL,
  `id_kelurahan` int(5) NOT NULL,
  `alamat_kantor` varchar(200) DEFAULT NULL,
  `email_kantor` varchar(100) NOT NULL,
  `no_telp_kantor` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kantor`
--

INSERT INTO `tb_kantor` (`id_kantor`, `nama_kantor`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `id_kelurahan`, `alamat_kantor`, `email_kantor`, `no_telp_kantor`) VALUES
(1, 'Kantor Pusat Indihome Yogyakarta', 1, 5, 69, 400, 'Jl. Yos Sudarso No.9, 001, DIY (55224)', 'kantorpusat@gmail.com', '081245788956'),
(2, 'Kantor Cabang Indihome Sleman', 1, 4, 64, 377, 'Jl. Parasarnya No.22, Beran Lor, DIY (55511)', 'indihomesleman@gmail.com', '081245789636'),
(3, 'Kantor Cabang Indihome Bantul', 1, 2, 5, 14, 'Jl. Dr. Wahidin Sudirohusodo No.37, Karangbayam, DIY (55224)', 'indihomebantul@gmail.com', '081278455457'),
(4, 'Kantor Cabang Indihome Gunung Kidul', 1, 1, 37, 216, 'Jl Pangarsan No.22 Pubosari (55851', 'indihomegunkid@gmail.com', '081244574565'),
(5, 'Kantor Cabang Indihome Kulon Progo', 1, 3, 49, 305, 'Jl Sudibyo No, 4, Driyan, Wates (55651)', 'indihomekp@gmail.com', '081278459698');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kasus`
--

CREATE TABLE `tb_kasus` (
  `id_kasus` int(5) NOT NULL,
  `kode_kasus` varchar(20) NOT NULL,
  `kasus` varchar(255) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kasus`
--

INSERT INTO `tb_kasus` (`id_kasus`, `kode_kasus`, `kasus`, `id_kategori`, `id_bobot`) VALUES
(1, 'K01', 'Telp Rusak', 3, 1),
(17, 'K02', 'Kabel UTP telepon rusak', 3, 2),
(18, 'K03', 'IP PC tidak sesuai dengan IP modem', 4, 2),
(19, 'K04', 'Terisolir', 4, 2),
(20, 'K05', 'Spam, Virus', 4, 2),
(21, 'K06', 'Profile paket kouta habis', 4, 2),
(22, 'K07', 'Kabel Patchcord rusak', 4, 2),
(23, 'K08', 'DNS/Proxy', 4, 2),
(24, 'K09', 'Profile di port tidak sesuai paket', 4, 2),
(25, 'K11', 'Fast connector rusak', 4, 2),
(26, 'K10', 'Kabel Dropcore rusak', 4, 2),
(27, 'K12', 'Adaptor rusak / modem rusak', 4, 2),
(28, 'K13', 'Maintenance server', 4, 2),
(29, 'K14', 'Modem STB Rusak', 4, 2),
(30, 'K15', 'KAbel RCA /HDMI rusak', 2, 2),
(31, 'K16', 'Alamat dari server otentikasi tidak sesuai', 2, 2),
(32, 'K17', 'Profile DHCP tidak valid', 2, 2),
(33, 'K18', 'Kabel UTP LAN / Connector RJ 45 rusak', 2, 2),
(34, 'K19', 'Konfigurasi Vlan multicast hilang', 2, 2),
(35, 'K20', 'Konfigurasi setting hilang', 2, 2),
(36, 'K21', 'Kebinding', 2, 2),
(37, 'K22', 'Salah username/password', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kasus_user`
--

CREATE TABLE `tb_kasus_user` (
  `id_kasus_user` int(5) NOT NULL,
  `kode_kasus_user` varchar(20) DEFAULT NULL,
  `kasus_user` varchar(255) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `id_bobot` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kasus_user`
--

INSERT INTO `tb_kasus_user` (`id_kasus_user`, `kode_kasus_user`, `kasus_user`, `id_kategori`, `id_bobot`) VALUES
(1, 'K02', 'Seluruh layanan (internet/TV/Telepon) tidak berfungsi', 4, 4),
(3, 'K01', 'Internet tidak bisa diakses', 4, 5),
(4, 'K03', 'Internet Lambat', 4, 3),
(5, 'K04', 'Internet putus-putus', 4, 4),
(6, 'K05', 'Modem ONT rusak', 4, 4),
(7, 'K06', 'Gangguan Game Online', 4, 5),
(8, 'K07', 'Tidak bisa koneksi lebih dari satu device', 4, 4),
(9, 'K08', 'Tidak bisa ke web tertentu', 4, 5),
(10, 'K09', 'Gangguan Iklan', 4, 3),
(11, 'K01', 'Error 1901', 2, 4),
(12, 'K02', 'Error 1302', 2, 3),
(13, 'K03', 'STB tidak mendapatkan IP', 2, 3),
(14, 'K04', 'Error 4514', 2, 3),
(15, 'K05', 'Error 2003', 2, 3),
(16, 'K06', 'Error 70116204/06', 2, 3),
(17, 'K07', 'Muncul username dan password pada saat login Indihome TV', 2, 2),
(18, 'K08', 'Live TV putus-putus', 2, 5),
(19, 'K09', 'STB tidak dapat digunakan', 2, 3),
(20, 'K10', 'Remote TV indihome tidak dapat digunakan', 2, 3),
(21, 'K01', 'TIdak bisa melakukan panggilan telepon', 3, 4),
(22, 'K02', 'Jaringan Layak-Fiber-Gangguan-Japati/IN/ISDN/Jasnita', 3, 4),
(23, 'K03', 'Jaringan Layak FIber Gangguan Hunting', 3, 2),
(24, 'K04', 'Tidak bisa menerima panggilan', 3, 4),
(25, 'K05', 'Tidak bisa dihubungi/menghubungi nomor tertentu', 3, 4),
(26, 'K06', 'Telp mati tidak ada nada', 3, 4),
(27, 'K07', 'Jaringan Layak - FIber - Salah sambung', 3, 4),
(28, 'K08', 'Suara lawan bicara tidak dapat terdengan dengan jelas', 3, 4),
(29, 'K09', 'Suara lawan bicara terputus-putus', 3, 4),
(30, 'K10', 'Suara lawan bicara tidak dapat terdengar', 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(2, 'UseeTV'),
(3, 'Telepon'),
(4, 'Indihome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_des`
--

CREATE TABLE `tb_kategori_des` (
  `id_kat_des` int(5) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(5) NOT NULL,
  `id_provinsi` int(5) DEFAULT NULL,
  `id_kabupaten` int(5) DEFAULT NULL,
  `kode_kecamatan` varchar(10) DEFAULT NULL,
  `nama_kecamatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `id_provinsi`, `id_kabupaten`, `kode_kecamatan`, `nama_kecamatan`) VALUES
(3, 1, 2, '05', 'Bambanglipuro'),
(4, 1, 2, '12', 'Banguntapan'),
(5, 1, 2, '08', 'Bantul'),
(6, 1, 2, '11', 'Dlingo'),
(7, 1, 2, '10', 'Imogiri'),
(9, 1, 2, '16', 'Kasihan'),
(10, 1, 2, '03', 'Kretek'),
(11, 1, 2, '07', 'Pajangan'),
(12, 1, 2, '06', 'Pandak'),
(13, 1, 2, '14', 'Piyungan'),
(14, 1, 2, '13', 'Pleret'),
(15, 1, 2, '04', 'Pundong'),
(16, 1, 2, '02', 'Sanden'),
(17, 1, 2, '17', 'Sedayu'),
(18, 1, 2, '15', 'Sewon'),
(19, 1, 2, '01', 'Srandakan'),
(20, 1, 1, '14', 'Gedangsari'),
(21, 1, 1, '16', 'Girisubo'),
(22, 1, 1, '09', 'Karangmojo'),
(23, 1, 1, '13', 'Ngawen'),
(24, 1, 1, '02', 'Nglipar'),
(25, 1, 1, '05', 'Paliyan'),
(26, 1, 1, '06', 'Panggang'),
(27, 1, 1, '04', 'Patuk'),
(28, 1, 1, '03', 'Playen'),
(29, 1, 1, '10', 'Ponjong'),
(30, 1, 1, '18', 'Purwosari'),
(31, 1, 1, '11', 'Rongkop'),
(32, 1, 1, '15', 'Saptosari'),
(33, 1, 1, '08', 'Semanu'),
(34, 1, 1, '12', 'Semin'),
(35, 1, 1, '17', 'Tanjungsari'),
(36, 1, 1, '07', 'Tepus'),
(37, 1, 1, '01', 'Wonosari'),
(38, 1, 3, '04', 'Galur'),
(39, 1, 3, '09', 'Girimulyo'),
(40, 1, 3, '12', 'Kalibawang'),
(41, 1, 3, '08', 'Kokap'),
(42, 1, 3, '05', 'Lendah'),
(43, 1, 3, '10', 'Nanggulan'),
(44, 1, 3, '03', 'Panjatan'),
(45, 1, 3, '07', 'Pengasih'),
(46, 1, 3, '11', 'Samigaluh'),
(47, 1, 3, '06', 'Sentolo'),
(48, 1, 3, '07', 'Temon'),
(49, 1, 3, '02', 'Wates'),
(50, 1, 4, '08', 'Berbah'),
(51, 1, 4, '17', 'Cangkringan'),
(52, 1, 4, '07', 'Depok'),
(53, 1, 4, '01', 'Gamping'),
(54, 1, 4, '02', 'Godean'),
(55, 1, 4, '10', 'Kalasan'),
(56, 1, 4, '04', 'Minggir'),
(57, 1, 4, '06', 'Mlati'),
(58, 1, 4, '03', 'Moyudan'),
(59, 1, 4, '12', 'Ngaglik'),
(60, 1, 4, '11', 'Ngemplak'),
(61, 1, 4, '16', 'Pakem'),
(62, 1, 4, '09', 'Prambanan'),
(63, 1, 4, '05', 'Sayegan'),
(64, 1, 4, '13', 'Sleman'),
(65, 1, 4, '14', 'Tempel'),
(66, 1, 4, '15', 'Turi'),
(67, 1, 5, '04', 'Danurejan'),
(68, 1, 5, '05', 'Gedongtengen'),
(69, 1, 5, '03', 'Gondokusuman'),
(70, 1, 5, '10', 'Gondomanan'),
(71, 1, 5, '14', 'Kotagede'),
(72, 1, 5, '09', 'Kraton'),
(73, 1, 5, '08', 'Mantrijeron'),
(74, 1, 5, '12', 'Mergangsan'),
(75, 1, 5, '06', 'Ngampilan'),
(76, 1, 5, '11', 'Pakualaman'),
(77, 1, 5, '01', 'Tegalrejo'),
(78, 1, 5, '13', 'Umbulharjo'),
(79, 1, 5, '02', 'Jetis'),
(80, 1, 2, '09', 'Jetis'),
(81, 1, 5, '07', 'Wirobrajan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id_kelurahan` int(5) NOT NULL,
  `id_provinsi` int(5) DEFAULT NULL,
  `id_kabupaten` int(5) DEFAULT NULL,
  `id_kecamatan` int(5) DEFAULT NULL,
  `kode_kelurahan` varchar(10) DEFAULT NULL,
  `nama_kelurahan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id_kelurahan`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `kode_kelurahan`, `nama_kelurahan`) VALUES
(1, 1, 2, 3, '02', 'Sidomulyo'),
(3, 1, 2, 3, '01', 'Mulyodadi'),
(4, 1, 2, 3, '03', 'Sumbermulyo'),
(6, 1, 2, 4, '01', 'Banguntapan'),
(7, 1, 2, 4, '02', 'Baturetno'),
(8, 1, 2, 4, '03', 'Jagalan'),
(9, 1, 2, 4, '04', 'Jambidan'),
(10, 1, 2, 4, '05', 'Potorono'),
(11, 1, 2, 4, '06', 'Singosaren'),
(12, 1, 2, 4, '07', 'Tamanan'),
(13, 1, 2, 4, '08', 'Wirokerten'),
(14, 1, 2, 5, '01', 'Bantul'),
(15, 1, 2, 5, '02', 'Palbapang'),
(16, 1, 2, 5, '03', 'Ringinharjo'),
(17, 1, 2, 5, '04', 'Sabdodadi'),
(18, 1, 2, 5, '05', 'Trirenggo'),
(19, 1, 2, 6, '01', 'Dlingo'),
(20, 1, 2, 6, '02', 'Jatimulyo'),
(21, 1, 2, 6, '03', 'Mangunan'),
(22, 1, 2, 6, '04', 'Muntuk'),
(23, 1, 2, 6, '05', 'Temuwuh'),
(24, 1, 2, 6, '06', 'Terong'),
(25, 1, 2, 7, '01', 'Girirejo'),
(26, 1, 2, 7, '02', 'Imogiri'),
(27, 1, 2, 7, '03', 'Karangtalun'),
(28, 1, 2, 7, '04', 'Karangtengah'),
(29, 1, 2, 7, '05', 'Kebonagung'),
(30, 1, 2, 7, '06', 'Selopamioro'),
(31, 1, 2, 7, '07', 'Sriharjo'),
(32, 1, 2, 7, '08', 'Wukirsari'),
(33, 1, 2, 9, '01', 'Bangunjiwo'),
(34, 1, 2, 9, '02', 'Ngestiharjo'),
(35, 1, 2, 9, '03', 'Tamantirto'),
(36, 1, 2, 9, '04', 'Tirtonirmolo'),
(37, 1, 2, 10, '01', 'Donotirto'),
(38, 1, 2, 10, '02', 'Parangtritis'),
(39, 1, 2, 10, '03', 'Tirtohargo'),
(40, 1, 2, 10, '04', 'Tirtomulyo'),
(41, 1, 2, 10, '05', 'Tirtosari'),
(42, 1, 2, 11, '01', 'Guwosari'),
(43, 1, 2, 11, '02', 'Sendangsari'),
(44, 1, 2, 11, '03', 'Triwidadi'),
(45, 1, 2, 12, '01', 'Caturharjo'),
(46, 1, 2, 12, '02', 'Gilangharjo'),
(47, 1, 2, 12, '03', 'Triharjo'),
(48, 1, 2, 12, '04', 'Wijirejo'),
(49, 1, 2, 13, '01', 'Srimulyo'),
(50, 1, 2, 13, '02', 'Sitimulyo'),
(51, 1, 2, 13, '03', 'Srimartani'),
(52, 1, 2, 14, '01', 'Bawuran'),
(53, 1, 2, 14, '02', 'Pleret'),
(54, 1, 2, 14, '03', 'Segoroyoso'),
(55, 1, 2, 14, '04', 'Wonokromo'),
(56, 1, 2, 14, '05', 'Wonolelo'),
(57, 1, 2, 15, '01', 'panjangrejo'),
(58, 1, 2, 15, '02', 'Bangunharjo'),
(59, 1, 2, 15, '03', 'Srihardono'),
(60, 1, 2, 16, '01', 'Gadingsari'),
(61, 1, 2, 16, '02', 'Gadingharjo'),
(62, 1, 2, 16, '03', 'Murtigading'),
(63, 1, 2, 16, '04', 'Srigading'),
(64, 1, 2, 17, '01', 'Argodadi'),
(65, 1, 2, 17, '02', 'Argorejo'),
(66, 1, 2, 17, '03', 'Argosari'),
(67, 1, 2, 17, '04', 'Argomulyo'),
(68, 1, 2, 18, '01', 'Bangunharjo'),
(69, 1, 2, 18, '02', 'Panggungharjo'),
(70, 1, 2, 18, '03', 'Pendowoharjo'),
(71, 1, 2, 18, '04', 'Timbulharjo'),
(72, 1, 2, 19, '01', 'Poncosari'),
(73, 1, 2, 19, '02', 'Trimurti'),
(74, 1, 2, 80, '01', 'Canden'),
(75, 1, 2, 0, '02', 'Patalan'),
(76, 1, 2, 80, '03', 'Sumberagung'),
(77, 1, 2, 80, '04', 'Trimulyo'),
(78, 1, 1, 20, '11', 'Hargomulyo'),
(79, 1, 1, 20, '12', 'Mertelu'),
(80, 1, 1, 20, '13', 'Ngalang'),
(81, 1, 1, 20, '14', 'Sampang'),
(82, 1, 1, 20, '15', 'Serut'),
(83, 1, 1, 20, '16', 'Tegalrejo'),
(84, 1, 1, 20, '17', 'Watugajah'),
(85, 1, 1, 21, '11', 'Balong'),
(86, 1, 1, 21, '12', 'Jepitu'),
(87, 1, 1, 21, '13', 'Jerukwudel'),
(88, 1, 1, 21, '14', 'Karangawen'),
(89, 1, 1, 21, '15', 'Nglindur'),
(90, 1, 1, 21, '17', 'Songbanyu'),
(91, 1, 1, 21, '18', 'Tileng'),
(92, 1, 1, 22, '11', 'Bendungan'),
(93, 1, 1, 22, '12', 'Bejiharjo'),
(94, 1, 1, 22, '13', 'Gedangrejo'),
(95, 1, 1, 22, '14', 'Karangmojo'),
(96, 1, 1, 22, '15', 'Kelor Ngawis'),
(97, 1, 1, 22, '16', 'Ngipak'),
(98, 1, 1, 22, '17', 'Wiladeg'),
(99, 1, 1, 23, '11', 'Beji'),
(100, 1, 1, 23, '12', 'Jurangjero'),
(101, 1, 1, 23, '13', 'Kampung'),
(102, 1, 1, 23, '14', 'Sambirejo'),
(103, 1, 1, 23, '15', 'Tancep'),
(104, 1, 1, 23, '16', 'Watusigar'),
(105, 1, 1, 24, '11', 'Kedungkeris'),
(106, 1, 1, 24, '12', 'Nglipar'),
(107, 1, 1, 23, '13', 'Pengkol'),
(108, 1, 1, 24, '14', 'Kedungpoh'),
(109, 1, 1, 24, '15', 'Katongan'),
(110, 1, 1, 24, '16', 'Pilangrejo'),
(111, 1, 1, 24, '17', 'Natah'),
(112, 1, 1, 25, '11', 'Giring'),
(113, 1, 1, 25, '12', 'Grogor'),
(114, 1, 1, 25, '12', 'Karangasem'),
(115, 1, 1, 25, '14', 'Karangduwet'),
(116, 1, 1, 25, '15', 'Mulusan'),
(117, 1, 1, 25, '16', 'Pampang'),
(118, 1, 1, 25, '17', 'Sodo'),
(119, 1, 1, 26, '11', 'Girikarto'),
(120, 1, 1, 26, '12', 'Girisekar'),
(121, 1, 1, 26, '13', 'Girimulyo'),
(122, 1, 1, 26, '14', 'Giriwungu'),
(123, 1, 1, 26, '15', 'Girisuko'),
(124, 1, 1, 26, '16', 'Giriharjo'),
(125, 1, 1, 27, '11', 'Beji'),
(126, 1, 1, 27, '12', 'Bunder'),
(127, 1, 1, 27, '13', 'Ngelanggeran'),
(128, 1, 1, 27, '14', 'Nglegi'),
(129, 1, 1, 27, '15', 'Ngoro-oro'),
(130, 1, 1, 27, '16', 'Patuk'),
(131, 1, 1, 27, '17', 'Pengok'),
(132, 1, 1, 27, '18', 'Putat'),
(133, 1, 1, 0, '19', 'Salam'),
(134, 1, 1, 27, '10', 'Semoyo'),
(135, 1, 1, 27, '11', 'Terbah'),
(136, 1, 1, 28, '11', 'Banaran'),
(137, 1, 1, 28, '12', 'Bandung'),
(138, 1, 1, 28, '13', 'Banyusoco'),
(139, 1, 1, 28, '15', 'Blebaran'),
(140, 1, 1, 28, '14', 'Dengok'),
(141, 1, 1, 28, '16', 'Gading'),
(142, 1, 1, 28, '17', 'Getas'),
(143, 1, 1, 28, '18', 'Logandeng'),
(144, 1, 1, 28, '19', 'Playen'),
(145, 1, 1, 28, '20', 'Plembutan'),
(146, 1, 1, 28, '21', 'Ngawu'),
(147, 1, 1, 28, '22', 'Ngleri'),
(148, 1, 1, 28, '23', 'Ngunut'),
(149, 1, 1, 29, '11', 'Bedoyo'),
(150, 1, 1, 29, '12', 'Genjahan'),
(151, 1, 1, 29, '13', 'Gombang'),
(152, 1, 1, 29, '14', 'Karangasem'),
(153, 1, 1, 29, '15', 'Kenteng'),
(154, 1, 1, 29, '16', 'Ponjong'),
(155, 1, 1, 29, '17', 'Sawahan'),
(156, 1, 1, 29, '18', 'Siderejo'),
(157, 1, 1, 29, '19', 'Sumbergiri'),
(158, 1, 1, 29, '20', 'Tambakromo'),
(159, 1, 1, 29, '21', 'Umbulrejo'),
(160, 1, 1, 30, '11', 'Giripurwo'),
(161, 1, 1, 30, '12', 'Girijati'),
(162, 1, 1, 30, '13', 'Giriasih'),
(163, 1, 1, 30, '14', 'Giricahyo'),
(164, 1, 1, 30, '15', 'Giritirto'),
(165, 1, 1, 31, '11', 'Batodayaan'),
(166, 1, 1, 31, '12', 'Bohol'),
(167, 1, 1, 31, '13', 'Karangwuni'),
(168, 1, 1, 30, '14', 'Melikan'),
(169, 1, 1, 31, '15', 'Petir'),
(170, 1, 1, 31, '16', 'Pringombo'),
(171, 1, 1, 31, '17', 'Pucanganom'),
(172, 1, 1, 31, '18', 'Semugih'),
(173, 1, 1, 32, '11', 'Jetis'),
(174, 1, 1, 32, '12', 'Kanigoro'),
(175, 1, 1, 32, '13', 'Kepek'),
(176, 1, 1, 32, '14', 'Krambilsawit'),
(177, 1, 1, 32, '15', 'Monggol'),
(178, 1, 1, 32, '16', 'Ngloro'),
(179, 1, 1, 32, '17', 'Planjan'),
(180, 1, 1, 33, '11', 'Candirejo'),
(181, 1, 1, 33, '12', 'Dadapayu'),
(182, 1, 1, 33, '13', 'Ngeposari'),
(183, 1, 1, 33, '14', 'Pacarejo'),
(184, 1, 1, 33, '15', 'Semanu'),
(185, 1, 1, 34, '11', 'Candirejo'),
(186, 1, 1, 34, '12', 'Bendung'),
(187, 1, 1, 34, '13', 'Bulurejo'),
(188, 1, 1, 34, '14', 'Kalitekuk'),
(189, 1, 1, 34, '15', 'Karangsari'),
(190, 1, 1, 34, '16', 'Kemijing'),
(191, 1, 1, 34, '17', 'Pundungsari'),
(192, 1, 1, 34, '18', 'Rejosari'),
(193, 1, 1, 34, '19', 'Semin'),
(194, 1, 1, 34, '20', 'Sumberejo'),
(195, 1, 1, 35, '11', 'Banjarejo'),
(196, 1, 1, 35, '12', 'Kemandang'),
(197, 1, 1, 35, '13', 'Kemiri'),
(198, 1, 1, 35, '14', 'Ngestiharjo'),
(199, 1, 1, 36, '11', 'Giripanggung'),
(200, 1, 1, 36, '12', 'Purwodadi'),
(201, 1, 1, 36, '13', 'Sidoharjo'),
(202, 1, 1, 36, '14', 'Sumberwungu'),
(203, 1, 1, 36, '15', 'Tepus'),
(204, 1, 1, 37, '11', 'Baleharjo'),
(205, 1, 1, 37, '12', 'Duwet'),
(206, 1, 1, 37, '13', 'Gari'),
(207, 1, 1, 37, '14', 'Karangtengah'),
(208, 1, 1, 37, '15', 'Karangngejek'),
(209, 1, 1, 37, '16', 'Kepek'),
(210, 1, 1, 37, '17', 'Mulo'),
(211, 1, 1, 37, '18', 'Piyaman'),
(212, 1, 1, 37, '19', 'Pulutan'),
(213, 1, 1, 37, '20', 'Selang'),
(214, 1, 1, 37, '21', 'Siraman'),
(215, 1, 1, 37, '22', 'Wareng'),
(216, 1, 1, 37, '23', 'Wonosari'),
(217, 1, 1, 37, '24', 'Wunung'),
(218, 1, 3, 38, '11', 'Banaran'),
(219, 1, 3, 38, '12', 'Brosot'),
(220, 1, 3, 38, '13', 'Karangsewu'),
(221, 1, 3, 38, '14', 'Kranggan'),
(222, 1, 3, 38, '15', 'Nomporejo'),
(223, 1, 3, 38, '16', 'Pandowan'),
(224, 1, 3, 38, '17', 'Tirtarahayu'),
(225, 1, 3, 39, '11', 'Giripurwo'),
(226, 1, 3, 39, '12', 'Jatimulyo'),
(227, 1, 3, 39, '13', 'Pendoworejo'),
(228, 1, 3, 39, '14', 'Purwosari'),
(229, 1, 3, 40, '11', 'Banjararum'),
(230, 1, 3, 40, '12', 'Banjarsari'),
(231, 1, 3, 40, '13', 'Banjarharjo'),
(232, 1, 3, 40, '14', 'Banjaroyo'),
(233, 1, 3, 41, '11', 'Hargomulyo'),
(234, 1, 3, 41, '12', 'Hargorejo'),
(235, 1, 3, 41, '13', 'Hargotirto'),
(236, 1, 3, 41, '14', 'Hargowilis'),
(237, 1, 3, 41, '15', 'Kalirejo'),
(238, 1, 3, 42, '11', 'Bumirejo'),
(239, 1, 3, 42, '12', 'Gulurejo'),
(240, 1, 3, 42, '13', 'Jatirejo'),
(241, 1, 3, 42, '14', 'Ngentakrejo'),
(242, 1, 3, 42, '15', 'Sidorejo'),
(243, 1, 3, 42, '16', 'Wahyuharjo'),
(244, 1, 3, 43, '11', 'Banyuroto'),
(245, 1, 3, 43, '12', 'Kembang'),
(246, 1, 3, 43, '13', 'Donomulyo'),
(247, 1, 3, 43, '14', 'Jatisarono'),
(248, 1, 3, 43, '15', 'Tanjungharjo'),
(249, 1, 3, 43, '16', 'Wijimulyo'),
(250, 1, 3, 44, '11', 'Bojong'),
(251, 1, 3, 44, '12', 'Bugel'),
(252, 1, 3, 43, '13', 'Cerme'),
(253, 1, 3, 44, '13', 'Depok'),
(254, 1, 3, 44, '14', 'Garongan'),
(255, 1, 3, 44, '15', 'Gotakan'),
(256, 1, 3, 44, '16', 'Kanoman'),
(257, 1, 3, 44, '17', 'Krembangan'),
(258, 1, 3, 44, '18', 'Panjatan'),
(259, 1, 3, 44, '19', 'Pleret'),
(260, 1, 3, 44, '21', 'Tayuban'),
(261, 1, 3, 45, '11', 'Karangsari'),
(262, 1, 3, 45, '12', 'Kedungsari'),
(263, 1, 3, 45, '13', 'Margosari'),
(264, 1, 3, 45, '14', 'Pengasih'),
(265, 1, 3, 45, '15', 'Sidomulyo'),
(266, 1, 3, 45, '16', 'Sendangsari'),
(267, 1, 3, 45, '17', 'Tawangsari'),
(268, 1, 3, 46, '11', 'Banjarsari'),
(269, 1, 3, 46, '12', 'Gerbosari'),
(270, 1, 3, 46, '13', 'Kebonharjo'),
(271, 1, 3, 46, '14', 'Ngargosari'),
(272, 1, 3, 46, '15', 'Pagerharjo'),
(273, 1, 3, 46, '16', 'Purwoharjo'),
(274, 1, 3, 46, '17', 'Sidoharjo'),
(275, 1, 3, 47, '11', 'Banguncipto'),
(276, 1, 3, 47, '12', 'Demangrejo'),
(277, 1, 3, 47, '13', 'Kaliagung'),
(278, 1, 3, 47, '14', 'Salamrejo'),
(279, 1, 3, 47, '15', 'Sentolo'),
(280, 1, 3, 47, '16', 'Srikayangan'),
(281, 1, 3, 47, '17', 'Sukoreno'),
(282, 1, 3, 47, '18', 'Tuksono'),
(283, 1, 3, 48, '11', 'Demen'),
(284, 1, 3, 48, '12', 'Glagah'),
(285, 1, 3, 48, '13', 'Jangkaran'),
(286, 1, 3, 48, '14', 'Janten'),
(287, 1, 3, 48, '15', 'Kalidengen'),
(288, 1, 3, 48, '16', 'Kaligintung'),
(289, 1, 3, 48, '17', 'Karangwuluh'),
(290, 1, 3, 48, '18', 'Kebonrejo'),
(291, 1, 3, 48, '19', 'Kedundang'),
(292, 1, 3, 48, '20', 'Kulur'),
(293, 1, 3, 48, '21', 'Palihan'),
(294, 1, 3, 48, '22', 'Plumbon'),
(295, 1, 3, 48, '23', 'Sindutan'),
(296, 1, 3, 48, '24', 'Temon Kulon'),
(297, 1, 3, 48, '25', 'Temon Wetan'),
(298, 1, 3, 49, '11', 'Bendungan'),
(299, 1, 3, 49, '12', 'Giripeni'),
(300, 1, 3, 49, '13', 'Karangwuni'),
(301, 1, 3, 49, '14', 'Kulwaru'),
(302, 1, 3, 49, '15', 'Ngestiharjo'),
(303, 1, 3, 49, '16', 'Sogan'),
(304, 1, 3, 49, '17', 'Triharjo'),
(305, 1, 3, 49, '18', 'Wates'),
(306, 1, 4, 50, '11', 'Jogotirto'),
(307, 1, 4, 50, '12', 'Kalitirto'),
(308, 1, 4, 50, '13', 'Sendangtirto'),
(309, 1, 4, 50, '14', 'Tegaltirto'),
(310, 1, 4, 51, '11', 'Argomulyo'),
(311, 1, 4, 51, '12', 'Glagaharjo'),
(312, 1, 4, 51, '13', 'Kepuharjo'),
(313, 1, 4, 51, '14', 'Wukisari'),
(314, 1, 4, 51, '15', 'Umbulharjo'),
(315, 1, 4, 52, '11', 'Caturtunggal'),
(316, 1, 4, 52, '12', 'Condongcatur'),
(317, 1, 4, 52, '13', 'Maguwoharjo'),
(318, 1, 4, 53, '11', 'Ambarketawang'),
(319, 1, 4, 53, '12', 'Balecatur'),
(320, 1, 4, 53, '13', 'Banyuraden'),
(321, 1, 4, 53, '14', 'Nogotirto'),
(322, 1, 4, 53, '15', 'Trihanggo'),
(324, 1, 4, 54, '11', 'Sidoagung'),
(325, 1, 4, 54, '12', 'Sidoarum'),
(326, 1, 4, 54, '13', 'Sidokarto'),
(327, 1, 4, 54, '14', 'Sidoluhur'),
(328, 1, 4, 54, '15', 'Sidomoyo'),
(329, 1, 4, 54, '16', 'Sidomulyo'),
(330, 1, 4, 54, '17', 'Sidorejo'),
(331, 1, 4, 55, '11', 'Purwomartani'),
(332, 1, 4, 55, '12', 'Selomartani'),
(333, 1, 4, 55, '13', 'Tamanmartani'),
(334, 1, 4, 55, '14', 'Tirtomartani'),
(335, 1, 4, 56, '11', 'Sendangagung'),
(336, 1, 4, 56, '12', 'Sendangarum'),
(337, 1, 4, 56, '13', 'Sendangmulyo'),
(338, 1, 4, 56, '14', 'Sendangrejo'),
(339, 1, 4, 56, '15', 'Sendangsari'),
(340, 1, 4, 57, '11', 'Sendangadi'),
(341, 1, 4, 57, '12', 'Sinduadi'),
(342, 1, 4, 57, '13', 'Tirtoadi'),
(343, 1, 4, 57, '14', 'Tlogoadi'),
(344, 1, 4, 58, '11', 'Sumberagung'),
(345, 1, 4, 58, '12', 'Sumberarum'),
(346, 1, 4, 58, '13', 'Sumberrahayu'),
(347, 1, 4, 58, '14', 'Sumbersari'),
(348, 1, 4, 59, '11', 'Donoharjo'),
(349, 1, 4, 59, '12', 'Minomartani'),
(350, 1, 4, 59, '13', 'Sardonoharjo'),
(351, 1, 4, 59, '14', 'Sariharjo'),
(352, 1, 4, 59, '15', 'Sinduharjo'),
(353, 1, 4, 59, '16', 'Sukoharjo'),
(354, 1, 4, 60, '11', 'Bimomartani'),
(355, 1, 4, 60, '12', 'Sindumartani'),
(356, 1, 4, 60, '13', 'Umbulmartani'),
(357, 1, 4, 60, '14', 'Wedomartani'),
(358, 1, 4, 60, '15', 'Widodomartani'),
(359, 1, 4, 61, '11', 'Candibinangun'),
(360, 1, 4, 61, '12', 'Hargobinangun'),
(361, 1, 4, 61, '13', 'Harjobinangun'),
(362, 1, 4, 61, '14', 'Pakembinangun'),
(363, 1, 4, 61, '15', 'Purwabinangun'),
(364, 1, 4, 62, '11', 'Bokoharjo'),
(365, 1, 4, 62, '12', 'Gayamharjo'),
(366, 1, 4, 62, '13', 'Madurejo'),
(367, 1, 4, 62, '14', 'Sambirejo'),
(368, 1, 4, 62, '15', 'Sumberharjo'),
(369, 1, 4, 62, '16', 'Wukiharjo'),
(370, 1, 4, 63, '11', 'Margoagung'),
(371, 1, 4, 63, '12', 'Margodadi'),
(372, 1, 4, 63, '13', 'Margokaton'),
(373, 1, 4, 63, '14', 'Margoluwih'),
(374, 1, 4, 63, '15', 'Margomulyo'),
(375, 1, 4, 64, '11', 'Caturharjo'),
(376, 1, 4, 64, '12', 'Pandowoharjo'),
(377, 1, 4, 64, '13', 'Tridadi'),
(378, 1, 4, 64, '14', 'Triharjo'),
(379, 1, 4, 64, '15', 'Trimulyo'),
(380, 1, 4, 65, '11', 'Banyurejo'),
(381, 1, 4, 65, '12', 'Lumbungrejo'),
(382, 1, 4, 65, '13', 'Margorejo'),
(383, 1, 4, 65, '14', 'Merdikorejo'),
(384, 1, 4, 65, '15', 'Mojorejo'),
(385, 1, 4, 65, '16', 'Pondokrejo'),
(386, 1, 4, 65, '17', 'Sumberejo'),
(387, 1, 4, 65, '18', 'Tambakrejo'),
(388, 1, 4, 66, '11', 'Bangunkerto'),
(389, 1, 4, 66, '12', 'Donokerto'),
(390, 1, 4, 66, '13', 'Girikerto'),
(391, 1, 4, 66, '14', 'Wonokerto'),
(392, 1, 5, 67, '11', 'Bausasran'),
(393, 1, 5, 67, '12', 'Tegalpanggung'),
(394, 1, 5, 67, '13', 'Suryatmajan'),
(395, 1, 5, 68, '11', 'Pringgokusuman'),
(396, 1, 5, 68, '12', 'Sosromenduran'),
(397, 1, 5, 69, '11', 'Baciro'),
(398, 1, 5, 69, '12', 'Demangan'),
(399, 1, 5, 69, '13', 'Klitren'),
(400, 1, 5, 69, '14', 'Kotabaru'),
(401, 1, 5, 69, '15', 'Terban'),
(402, 1, 5, 70, '11', 'Ngupasan'),
(403, 1, 5, 70, '12', 'Prawirodirjan'),
(404, 1, 5, 79, '11', 'Bumijo'),
(405, 1, 5, 79, '12', 'Cokrodiningratan'),
(406, 1, 5, 79, '13', 'Gowongan'),
(407, 1, 5, 71, '11', 'Prenggan'),
(408, 1, 5, 71, '12', 'Purbayan'),
(409, 1, 5, 71, '13', 'Rejowinangun'),
(410, 1, 5, 72, '11', 'Panembahan'),
(411, 1, 5, 72, '12', 'Kadipaten'),
(412, 1, 5, 72, '13', 'Patehan'),
(413, 1, 5, 73, '11', 'Gedongkiwo'),
(414, 1, 5, 73, '12', 'Suryodiningratan'),
(415, 1, 5, 73, '13', 'Mantrijeron'),
(416, 1, 5, 74, '11', 'Brontokusuman'),
(417, 1, 5, 74, '12', 'Keparakan'),
(418, 1, 5, 74, '13', 'Wirogunan'),
(419, 1, 5, 75, '11', 'Ngampilan'),
(420, 1, 5, 75, '12', 'Notoprajan'),
(421, 1, 5, 76, '11', 'Gunungketur'),
(422, 1, 5, 76, '12', 'Purwokinanti'),
(423, 1, 5, 77, '11', 'Bener'),
(424, 1, 5, 77, '12', 'Karangwaru'),
(425, 1, 5, 77, '13', 'Kricak'),
(426, 1, 5, 77, '14', 'Tegalrejo'),
(427, 1, 5, 78, '11', 'Pandeyan'),
(428, 1, 5, 78, '12', 'Sorosutan'),
(429, 1, 5, 78, '13', 'Giwangan'),
(430, 1, 5, 78, '14', 'Warungboto'),
(431, 1, 5, 78, '15', 'Mujamuju'),
(432, 1, 5, 78, '16', 'Semaki'),
(433, 1, 5, 78, '17', 'Tahunan'),
(434, 1, 5, 81, '11', 'Pakuncen'),
(435, 1, 5, 81, '12', 'Patangpuluhan'),
(436, 1, 5, 81, '13', 'Wirobrajan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(5) NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `link_menu` varchar(100) NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `menu`, `link_menu`, `status`) VALUES
(1, 'Home', '#header', '1'),
(2, 'Tentang', '#tentang', '1'),
(3, 'Deskripsi', '', '1'),
(5, 'Layanan', '#services', '1'),
(7, 'Contact', '#contact', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengetahuan`
--

CREATE TABLE `tb_pengetahuan` (
  `id_pengetahuan` int(5) NOT NULL,
  `id_rule` int(5) DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `n_gejala1` double DEFAULT NULL,
  `n_gejala2` double DEFAULT NULL,
  `n_gejala3` double DEFAULT NULL,
  `n_gejala4` double DEFAULT NULL,
  `n_gejala5` double DEFAULT NULL,
  `n_gejala6` double DEFAULT NULL,
  `n_gejala7` double DEFAULT NULL,
  `presentase` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_pengetahuan`
--

INSERT INTO `tb_pengetahuan` (`id_pengetahuan`, `id_rule`, `id_kategori`, `n_gejala1`, `n_gejala2`, `n_gejala3`, `n_gejala4`, `n_gejala5`, `n_gejala6`, `n_gejala7`, `presentase`) VALUES
(32, 18, 3, 0.8, 0.4, 0, 0, 0, 0, 0, 69.76),
(33, 19, 4, 1, 0.6, 0, 0, 0, 0, 0, 100),
(34, 20, 4, 1, 0.2, 0, 0, 0, 0, 0, 100),
(36, 22, 4, 1, 0.8, 0.6, 0, 0, 0, 0, 100),
(37, 23, 4, 0.6, 0.2, 0.8, 0, 0, 0, 0, 77.8816),
(38, 24, 4, 1, 0.2, 0, 0, 0, 0, 0, 100),
(39, 25, 4, 1, 0.2, 0.4, 0, 0, 0, 0, 100),
(40, 26, 4, 0.4, 0.8, 0, 0, 0, 0, 0, 69.76),
(41, 27, 4, 1, 0.2, 0, 0, 0, 0, 0, 100),
(42, 28, 4, 0.8, 0.6, 0.2, 0, 0, 0, 0, 77.8816),
(43, 29, 4, 0.2, 0.2, 0, 0, 0, 0, 0, 7.84),
(44, 30, 4, 0.4, 0.4, 0, 0, 0, 0, 0, 29.44),
(45, 31, 2, 0.6, 0.6, 0, 0, 0, 0, 0, 59.04),
(46, 32, 2, 0.8, 0.2, 0, 0, 0, 0, 0, 65.44),
(47, 33, 2, 0.6, 0.6, 0.6, 0, 0, 0, 0, 73.7856),
(48, 34, 2, 0.2, 0.4, 0, 0, 0, 0, 0, 19.36),
(49, 35, 2, 0.2, 0.2, 0, 0, 0, 0, 0, 7.84),
(50, 36, 2, 0.6, 0.8, 0, 0, 0, 0, 0, 76.96),
(51, 37, 2, 1, 0.2, 0, 0, 0, 0, 0, 100),
(53, 21, 4, 1, 0.2, 0, 0, 0, 0, 0, 100),
(56, 1, 3, 0.4, 0.4, 0.6, 0.6, 0.8, 0, 0, 89.59550464),
(57, 40, 2, 0.6, 0.6, 0, 0, 0, 0, 0, 59.04);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengetahuan_user`
--

CREATE TABLE `tb_pengetahuan_user` (
  `id_pengetahuan_user` int(5) NOT NULL,
  `id_rule` int(5) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `n_gejala_user1` double DEFAULT NULL,
  `n_gejala_user2` double DEFAULT NULL,
  `n_gejala_user3` double DEFAULT NULL,
  `n_gejala_user4` double DEFAULT NULL,
  `n_gejala_user5` double DEFAULT NULL,
  `n_gejala_user6` double DEFAULT NULL,
  `n_gejala_user7` double DEFAULT NULL,
  `presentase_user` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_pengetahuan_user`
--

INSERT INTO `tb_pengetahuan_user` (`id_pengetahuan_user`, `id_rule`, `id_kategori`, `n_gejala_user1`, `n_gejala_user2`, `n_gejala_user3`, `n_gejala_user4`, `n_gejala_user5`, `n_gejala_user6`, `n_gejala_user7`, `presentase_user`) VALUES
(2, 2, 4, 0.8, 0.8, 1, 1, 0, 0, 0, 100),
(3, 3, 4, 0.4, 0.2, 0.8, 0.4, 0, 0, 0, 80.259328),
(4, 4, 4, 1, 0.8, 0, 0, 0, 0, 0, 100),
(5, 5, 4, 0.6, 0.2, 0, 0, 0, 0, 0, 38.56),
(6, 6, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, 4, 0.4, 0.6, 0.4, 0, 0, 0, 0, 51.4816),
(8, 8, 4, 0.6, 0.6, 1, 0, 0, 0, 0, 91.808),
(9, 9, 4, 0.6, 0.8, 0, 0, 0, 0, 0, 76.96),
(10, 32, 4, 0.8, 0.6, 0.2, 0, 0, 0, 0, 77.8816),
(11, 11, 2, 1, 0, 0, 0, 0, 0, 0, 100),
(12, 12, 2, 1, 0.8, 0, 0, 0, 0, 0, 100),
(13, 13, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 14, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 15, 2, 0.4, 0.2, 0, 0, 0, 0, 0, 19.36),
(16, 16, 2, 0.4, 0.4, 0, 0, 0, 0, 0, 29.44),
(17, 17, 2, 0.6, 0, 0, 0, 0, 0, 0, 36),
(18, 19, 2, 0.2, 0.4, 0, 0, 0, 0, 0, 19.36),
(19, 20, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 21, 2, 0.6, 0.8, 0.8, 0, 0, 0, 0, 91.7056),
(21, 22, 3, 0.8, 0.4, 0, 0, 0, 0, 0, 69.76),
(22, 23, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 24, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 25, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 26, 3, 0.2, 0, 0, 0, 0, 0, 0, 4),
(26, 27, 3, 0.4, 0.6, 0, 0, 0, 0, 0, 46.24),
(27, 28, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 29, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 30, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 31, 3, 0.6, 0, 0, 0, 0, 0, 0, 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `id_provinsi` int(5) DEFAULT NULL,
  `id_kabupaten` int(5) DEFAULT NULL,
  `id_kecamatan` int(5) DEFAULT NULL,
  `id_kelurahan` int(5) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `no_internet` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `id_kelurahan`, `alamat`, `email`, `no_telp`, `no_internet`) VALUES
(1, 'Bambang', 1, 2, 3, 1, 'Langensuryo', 'Bambang@gmail.com', '08123332123', '123123120100'),
(9, 'Suryo', 1, 1, 4, 4, 'jakartasasd', 'aaasssudah@gmail.com', '0123123', '147134122220');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(5) NOT NULL,
  `kode_provinsi` varchar(10) DEFAULT NULL,
  `nama_provinsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `kode_provinsi`, `nama_provinsi`) VALUES
(1, '14', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekap`
--

CREATE TABLE `tb_rekap` (
  `id_rekap` int(5) NOT NULL,
  `id_pengguna` int(5) DEFAULT NULL,
  `id_kasus` int(5) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `id_kantor` int(5) DEFAULT NULL,
  `id_teknisi` int(5) DEFAULT NULL,
  `laporan_kerusakan` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_rekap`
--

INSERT INTO `tb_rekap` (`id_rekap`, `id_pengguna`, `id_kasus`, `id_kategori`, `id_kantor`, `id_teknisi`, `laporan_kerusakan`, `status`) VALUES
(3, 1, 0, 0, NULL, NULL, NULL, '1'),
(4, 1, 1, 3, NULL, NULL, NULL, '1'),
(5, 1, 1, 0, 0, 0, 'rusak telp', '0'),
(6, 1, 1, 3, 0, 0, 'Telp Rusak Lagi', '0'),
(7, 1, 1, 3, 3, 0, 'Rusak terus', '1'),
(8, 1, 1, 3, NULL, NULL, NULL, '1'),
(9, 1, 1, 3, 3, 0, 'ASD', '0'),
(10, 1, 1, 3, 3, 0, 'QQQQ', '0'),
(11, 1, 1, 3, 3, 12, 'ccccc', '0'),
(12, 1, 17, 3, 3, 12, 'zxc', '1'),
(13, 9, 22, 2, 2, 10, 'berla;i', '1'),
(14, 9, 27, 2, 4, 16, 'asdfasdasdasdasd', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(5) NOT NULL,
  `kode_rule` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_kategori` int(5) NOT NULL,
  `gejala1` varchar(5) DEFAULT NULL,
  `gejala2` varchar(5) DEFAULT NULL,
  `gejala3` varchar(5) DEFAULT NULL,
  `gejala4` varchar(5) DEFAULT NULL,
  `gejala5` varchar(5) DEFAULT NULL,
  `gejala6` varchar(5) DEFAULT NULL,
  `gejala7` varchar(5) DEFAULT NULL,
  `id_kasus` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_rule`
--

INSERT INTO `tb_rule` (`id_rule`, `kode_rule`, `id_kategori`, `gejala1`, `gejala2`, `gejala3`, `gejala4`, `gejala5`, `gejala6`, `gejala7`, `id_kasus`) VALUES
(1, 'R01', 3, 'G01', 'G02', 'G03', 'G04', 'G05', NULL, NULL, 1),
(18, 'R02', 3, 'G06', 'G07', NULL, NULL, NULL, NULL, NULL, 17),
(19, 'R03', 4, 'G01', 'G02', NULL, NULL, NULL, NULL, NULL, 18),
(20, 'R04', 4, 'G01', 'G03', NULL, NULL, NULL, NULL, NULL, 19),
(21, 'R05', 4, 'G04', 'G05', NULL, NULL, NULL, NULL, NULL, 20),
(22, 'R06', 4, 'G04', 'G06', 'G07', NULL, NULL, NULL, NULL, 21),
(23, 'R07', 4, 'G08', 'G09', 'G10', NULL, NULL, NULL, NULL, 22),
(24, 'R08', 4, 'G11', 'G12', NULL, NULL, NULL, NULL, NULL, 23),
(25, 'R09', 4, 'G11', 'G13', 'G14', NULL, NULL, NULL, NULL, 24),
(26, 'R10', 4, 'G14', 'G15', NULL, NULL, NULL, NULL, NULL, 26),
(27, 'R11', 4, 'G16', 'G17', NULL, NULL, NULL, NULL, NULL, 25),
(28, 'R12', 4, 'G18', 'G19', 'G20', NULL, NULL, NULL, NULL, 27),
(29, 'R13', 4, 'G21', 'G22', NULL, NULL, NULL, NULL, NULL, 28),
(30, 'R14', 4, 'G23', 'G24', NULL, NULL, NULL, NULL, NULL, 29),
(31, 'R15', 2, 'G01', 'G02', NULL, NULL, NULL, NULL, NULL, 30),
(32, 'R16', 2, 'G03', 'G04', NULL, NULL, NULL, NULL, NULL, 31),
(33, 'R17', 2, 'G05', 'G06', 'G07', NULL, NULL, NULL, NULL, 32),
(34, 'R18', 2, 'G04', 'G08', NULL, NULL, NULL, NULL, NULL, 33),
(35, 'R19', 2, 'G09', 'G10', NULL, NULL, NULL, NULL, NULL, 34),
(36, 'R20', 2, 'G11', 'G12', NULL, NULL, NULL, NULL, NULL, 35),
(37, 'R21', 2, 'G13', 'G14', NULL, NULL, NULL, NULL, NULL, 36),
(40, 'R22', 2, 'G06', 'G07', NULL, NULL, NULL, NULL, NULL, 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rule_user`
--

CREATE TABLE `tb_rule_user` (
  `id_rule_user` int(5) NOT NULL,
  `kode_rule_user` varchar(10) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `gejala_user1` varchar(5) DEFAULT NULL,
  `gejala_user2` varchar(5) DEFAULT NULL,
  `gejala_user3` varchar(5) DEFAULT NULL,
  `gejala_user4` varchar(5) DEFAULT NULL,
  `gejala_user5` varchar(5) DEFAULT NULL,
  `gejala_user6` varchar(5) DEFAULT NULL,
  `gejala_user7` varchar(5) DEFAULT NULL,
  `id_kasus_user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_rule_user`
--

INSERT INTO `tb_rule_user` (`id_rule_user`, `kode_rule_user`, `id_kategori`, `gejala_user1`, `gejala_user2`, `gejala_user3`, `gejala_user4`, `gejala_user5`, `gejala_user6`, `gejala_user7`, `id_kasus_user`) VALUES
(2, 'R01', 4, 'G01', 'G02', 'G03', 'G04', NULL, NULL, NULL, 3),
(3, 'R02', 4, 'G01', 'G05', 'G06', 'G07', NULL, NULL, NULL, 1),
(4, 'R03', 4, 'G08', 'G09', NULL, NULL, NULL, NULL, NULL, 4),
(5, 'R04', 4, 'G10', 'G05', NULL, NULL, NULL, NULL, NULL, 5),
(6, 'R05', 4, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(7, 'R06', 4, 'G11', 'G13', 'G12', NULL, NULL, NULL, NULL, 7),
(8, 'R07', 4, 'G14', 'G15', 'G16', NULL, NULL, NULL, NULL, 8),
(9, 'R08', 4, 'G17', 'G18', NULL, NULL, NULL, NULL, NULL, 9),
(11, 'R10', 2, 'G01', NULL, NULL, NULL, NULL, NULL, NULL, 11),
(12, 'R11', 2, 'G02', 'G03', NULL, NULL, NULL, NULL, NULL, 12),
(13, 'R12', 2, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 13),
(14, 'R13', 2, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 14),
(15, 'R14', 2, 'G04', 'G05', NULL, NULL, NULL, NULL, NULL, 15),
(16, 'R15', 2, 'G06', 'G07', NULL, NULL, NULL, NULL, NULL, 16),
(17, 'R16', 2, 'G08', NULL, NULL, NULL, NULL, NULL, NULL, 17),
(19, 'R17', 2, 'G09', 'G10', NULL, NULL, NULL, NULL, NULL, 18),
(20, 'R18', 2, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 19),
(21, 'R19', 2, 'G11', 'G12', 'G13', NULL, NULL, NULL, NULL, 20),
(22, 'R20', 3, 'G01', 'G02', NULL, NULL, NULL, NULL, NULL, 21),
(23, 'R21', 3, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 22),
(24, 'R22', 3, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 23),
(25, 'R23', 3, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 24),
(26, 'R24', 3, 'G03', NULL, NULL, NULL, NULL, NULL, NULL, 25),
(27, 'R25', 3, 'G04', 'G05', NULL, NULL, NULL, NULL, NULL, 26),
(28, 'R26', 3, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 27),
(29, 'R27', 3, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 28),
(30, 'R28', 3, 'G00', NULL, NULL, NULL, NULL, NULL, NULL, 29),
(31, 'R29', 3, 'G06', NULL, NULL, NULL, NULL, NULL, NULL, 30),
(32, 'R09', 4, 'G19', 'G20', 'G21', NULL, NULL, NULL, NULL, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(5) NOT NULL,
  `id_kasus` int(5) NOT NULL,
  `solusi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `id_kasus`, `solusi`) VALUES
(1, 1, 'Solusi yang diberikan apabila telepon mati tidak ada nada adalah cek dengan test phone kemungkinan pesawat telepon pelanggan yang rusak, jika jaringan telepon, rekonek kabel UTP telepon, cek pada splitter pastikan RJ 11 yang masuk pada phone dan modem tidak terbalik. Apabila tlp di paralel, cek pada sambungan rosette pastikan tidak lembab air. Jika masih belum bisa coba ganti splitter dan rosette baru, atau ganti kabel dan connector RJ 11 yang baru.'),
(20, 17, 'Pertama kali cabut RJ 11 pada pesawat telepon, kemudian pasang kembali. Jika masih belum bisa, dilakukan penggantian kabel UTP TLP yang baru'),
(21, 18, 'Pertama kali cabut RJ 11 pada pesawat telepon, kemudian pasang kembali. Jika masih belum bisa, dilakukan penggantian kabel UTP TLP yang baru'),
(22, 19, 'Buka aplikasi SAMS, lakukan bukis (buka isolir) dengan memasukkan nomor internet pelanggan. '),
(23, 20, 'Meng-offkan semua firewall, pastikan antivirus tidak blocking koneksi.'),
(24, 21, 'Cek pada aplikasi spins untuk cek sisa kuota, edukasi pelanggan.'),
(25, 22, 'Ganti kabel patchcord baru, melakukan penyambungan ulang dengan kabel dropcore.'),
(26, 23, 'Bisa dilakukan cek/ganti proxy yang ada di browser. Mengubah DNS, masukkan DNS google Preferred DNS Server 8.8.8.8, Alternate DNS Server 8.8.4.4).'),
(27, 24, 'Setting-an create pada modem hilang, lakukan create ulang, masuk pada putty, masukkan script create setting konfigurasi dan masukkan data nomor telepon, nomor internet, dan SN (Serial Number) modem. '),
(28, 26, 'Cek ukuran/redaman kabel dengan menggunakan OPM meter (ukuran baik tidak >25dBm), lalu lakukan rekoneksi sambungan/pergantian dropcore. Setting create pada modem hilang, lakukan create ulang, masuk pada putty, masukkan script create setting konfigurasi dan masukkan data nomor telepon, nomor internet, dan SN (Serial Number) modem.'),
(29, 25, 'Dilakukan penggantian fast connector baru, kemudian lakukan penyambungan ulang'),
(30, 27, 'Dilakukan pengecekan dengan adaptor dan modem test, apabila tidak berfungsi dapat diganti dengan adaptor atau modem ONT baru.'),
(31, 28, 'Kemungkinan terdapat perbaikan server pada alamat web yang dituju.'),
(32, 29, 'Jika lampu indikator LINK mati, Cek kelayakan kabel UTP, connector RJ 45 dari ONT ke STB. Cek dengan modem test, apabila STB rusak dapat dilakukan penggantian modem baru.'),
(33, 31, 'Jika gangguan error 1302. Disebabkan alamat homepage EPG (Electronic Program Guide) gagal terhubung atau alamat dari server otentikasi tidak sesuai. Dicoba dengan reboot STB (set top box) dengan cara: pencet tombol SET pada remote useetv> pilih konfigurasi> isi password dengan 6321> tingkat lanjut> reboot. Pastikan kabel UTP dari STB menancap di LAN Port 4 modem, agar mendapatkan alamat dari server yaitu ip 10 .x.x.x'),
(34, 30, 'Dilakukan penggantian kabel RCA/HDMI baru.'),
(35, 32, 'Jika gangguan error 1305. Kemungkinan parameter DHCP (Dinamic Host Configuration Protocol) dari modem tidak benar. Dilakukan reboot modem seperti gangguan 1302, dilanjutkan dengan cek info jaringan: pilih menu tingkat lanjut> pilih sistem informasi> pilih info jaringan> pastikan ip mendapatkan ip 10.x.x.x dengan memastikan parameter otentikasi, nomor internet, dan password useetv sudah benar.'),
(36, 33, 'Jika gangguan error 1901. Disebabkan kabel jaringan tidak tersambung. Periksa koneksi fisik dari kabel jaringan. Cek koneksi kabel UTP & RJ 45 dari modem ke arah STB, coba di-reconnect ulang. Apabila kabel UTP & RJ 45 sudah tidak berfungsi dapat dilakukan penggantian baru.'),
(37, 34, 'Jika gangguan error code 4514 sama dengan gangguan channel live TV tidak muncul. Cek pada embassy, pastikan data Rx Power untuk OLT dan ONU tidak > 25 dBm. Cek konfigurasi vlan multicast apabila konfigurasi hilang atau channel multicast mengalami data timeout, maka create lagi dengan memasukkan script konfigurasi vlan pada putty, dengan mendaftarkan nomor internet dan SN (serial number) modem.'),
(38, 35, 'Jika kualitas gambar tv putus-putus, tekan tombol info pada remote control> panah kanan [volume +] > tampil signal power & quality standard>70%. Atau dilakukan create ulang konfigurasi.'),
(39, 36, 'Jika gangguan error code 70116204, disebabkan account pelanggan di lock, cek pada aplikasi embassy jika kebinding maka di unbinding, terutama untuk modem baru.'),
(40, 37, 'Jika gangguan error code 70116206, disebabkan username/nomor rekening dan password salah pada settingan menu STB, cek pada aplikasi SOAP username dan password useetv yang benar> setting ulang kembali di STB.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_solusi_user`
--

CREATE TABLE `tb_solusi_user` (
  `id_solusi_user` int(5) NOT NULL,
  `id_kasus_user` int(5) DEFAULT NULL,
  `solusi_user` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_solusi_user`
--

INSERT INTO `tb_solusi_user` (`id_solusi_user`, `id_kasus_user`, `solusi_user`) VALUES
(1, 1, '1. Pastikan semua kondisi lampu indikator ONT menyala hijau.\r\n2. Jika Lampu indikator power mati maka lakukan perintah ini\r\n   a. Pastikan modem ONT terhubung dengan aliran listrik.\r\n   b. Bila belum menyala, lakukan cabut dan pasang adaptor modem ONT ke sambungan listrik.\r\n   c. Pastikan tombol power dalam keadaan ON dengan cara menekan tombol power pada Modem ONT.\r\n   d. Apabila  restart modem ONT gagal, isi form bagian bawah untuk melaporkan gangguan layanan anda.\r\n3. Jika lampu indikator LOS/PON menyala merah maka lakukan langkah berikut ini :\r\n   a. Pastikan kabel patch cord/kabel Fiber Optic (FO) dibalik modem ONT sudah terpasang sampai berbunyi klik pada port optical modem ONT.\r\n   b. Apabila lampu LOS masih menyala merah, matikan modem ONT dengan cara tekan tombol power, tunggu sekitar 30 detik lalu  nyalakan kembali.\r\n   c. apabila restart ONT gagal, isi form bagian bawah untuk melaporkan gangguan layanan anda.\r\n4. Jika hanya lampu indikator internet mati.\r\n   a. Tekan dan tahan tombol reset pada modem ONT menggunakan tusuk gigi agak lama lalu lepas.\r\n   b. tunggu hingga lampu indikator menyala semua.'),
(2, 1, 'aaaaaaaaaaaaassss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_submenu`
--

CREATE TABLE `tb_submenu` (
  `id_submenu` int(5) NOT NULL,
  `submenu` varchar(100) NOT NULL,
  `id_menu` int(5) DEFAULT NULL,
  `link_submenu` varchar(100) NOT NULL,
  `status` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_submenu`
--

INSERT INTO `tb_submenu` (`id_submenu`, `submenu`, `id_menu`, `link_submenu`, `status`) VALUES
(1, 'LAN', 3, '', '1'),
(2, 'MAN', 3, '', '1'),
(4, 'Internet', 3, '#deskripsi', '1'),
(5, 'WAN', 3, '#wan', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` int(5) NOT NULL,
  `id_kantor` int(5) DEFAULT NULL,
  `kode_teknisi` varchar(100) DEFAULT NULL,
  `nama_teknisi` varchar(100) DEFAULT NULL,
  `alamat_teknisi` varchar(200) DEFAULT NULL,
  `no_telp_teknisi` char(13) DEFAULT NULL,
  `job_disk` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `id_kantor`, `kode_teknisi`, `nama_teknisi`, `alamat_teknisi`, `no_telp_teknisi`, `job_disk`) VALUES
(1, 1, 'T002', 'Zulkarnain', 'Jl. Pasaraya No 15, Kota Baru', '0812787854698', 3),
(6, 1, 'I001', 'Sulaiman', 'Jalan Muja-Muju', '081287875454', 4),
(7, 1, 'U003', 'Adam', 'Jl. Selisih Satu No.5 Kota Baru', '081278459632', 0),
(8, 2, 'I012', 'Idris ', 'Jl. Nakula No.01 Nogotirto', '081278784545', 4),
(9, 2, 'T013', 'Daud', 'Jl. Damar Kasih No.1 Jayakerto', '081245787845', 3),
(10, 2, 'U014', 'Ilyas', 'Jl. Sadewa No.02 Wirosaban', '081269698585', 2),
(11, 3, 'I021', 'Yunus', 'Jl. Yudistira No.98 Wirokerten ', '081278963652', 4),
(12, 3, 'T022', 'Zakariya', 'Jl. Pandu No.02 Wiworojati', '081245456565', 3),
(13, 3, 'U023', 'Sholeh', 'Jl. Kurawa No.100, Imogiri', '081263987458', 2),
(14, 4, 'I031', 'Ibrahim', 'Jl. Pandawa No.05, Sedayu', '081245787845', 4),
(15, 4, 'T032', 'Ismail', 'Jl. Diponegoro No.01 Sinduadi', '081201012121', 3),
(16, 4, 'U033', 'Yakup', 'Jl. Arjuna No.03, Surodadi', '081296968585', 2),
(17, 5, 'I041', 'Labibul', 'Jl. Ahmad Yani No.05, Sentolo', '081245457896', 4),
(18, 5, 'T042', 'Muhammad Aryo', 'Jl. Suropati No.09, Segoroamarto', '081297976464', 3),
(19, 5, 'U043', 'Langit ', 'Jl. MT Haryono No.12, Wonocoroko', '08124558787', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wil_penanganan`
--

CREATE TABLE `tb_wil_penanganan` (
  `id_wil_penanganan` int(5) NOT NULL,
  `id_kantor` int(5) DEFAULT NULL,
  `id_provinsi` int(5) DEFAULT NULL,
  `id_kabupaten` int(5) DEFAULT NULL,
  `id_kecamatan` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_wil_penanganan`
--

INSERT INTO `tb_wil_penanganan` (`id_wil_penanganan`, `id_kantor`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`) VALUES
(1, 1, 1, 5, 67),
(2, 1, 1, 5, 68),
(3, 1, 1, 5, 69),
(4, 1, 1, 5, 70),
(5, 1, 1, 5, 71),
(6, 1, 1, 5, 72),
(7, 1, 1, 5, 73),
(8, 1, 1, 5, 74),
(9, 1, 1, 5, 75),
(10, 1, 1, 5, 76),
(11, 1, 1, 5, 77),
(12, 1, 1, 5, 78),
(13, 1, 1, 5, 81),
(14, 1, 1, 5, 81),
(15, 2, 1, 4, 50),
(16, 2, 1, 4, 51),
(17, 2, 1, 4, 52),
(18, 2, 1, 4, 53),
(19, 2, 1, 4, 54),
(20, 2, 1, 4, 55),
(21, 2, 1, 4, 56),
(22, 2, 1, 4, 57),
(23, 2, 1, 4, 58),
(24, 2, 1, 4, 59),
(25, 2, 1, 4, 60),
(26, 2, 1, 4, 61),
(27, 2, 1, 4, 62),
(28, 2, 1, 4, 63),
(29, 2, 1, 4, 64),
(30, 2, 1, 4, 65),
(31, 2, 1, 4, 66),
(32, 3, 1, 2, 3),
(33, 3, 1, 2, 4),
(34, 3, 1, 2, 5),
(35, 3, 1, 2, 6),
(36, 3, 1, 2, 7),
(37, 3, 1, 2, 9),
(38, 3, 1, 2, 10),
(39, 3, 1, 2, 11),
(40, 3, 1, 2, 12),
(41, 3, 1, 2, 13),
(42, 3, 1, 2, 14),
(43, 3, 1, 2, 15),
(44, 3, 1, 2, 16),
(45, 3, 1, 2, 17),
(46, 3, 1, 2, 18),
(47, 3, 1, 2, 19),
(48, 3, 1, 2, 80),
(49, 4, 1, 1, 20),
(50, 4, 1, 1, 21),
(51, 4, 1, 1, 22),
(52, 4, 1, 1, 23),
(53, 4, 1, 1, 24),
(54, 4, 1, 1, 25),
(55, 4, 1, 1, 26),
(56, 4, 1, 1, 27),
(57, 4, 1, 1, 28),
(58, 4, 1, 1, 29),
(59, 4, 1, 1, 30),
(60, 4, 1, 1, 31),
(61, 4, 1, 1, 32),
(62, 4, 1, 1, 33),
(63, 4, 1, 1, 34),
(64, 4, 1, 1, 35),
(65, 4, 1, 1, 36),
(66, 4, 1, 1, 37),
(67, 5, 1, 3, 38),
(68, 5, 1, 3, 39),
(69, 5, 1, 3, 40),
(70, 5, 1, 3, 41),
(71, 5, 1, 3, 42),
(72, 5, 1, 3, 43),
(73, 5, 1, 3, 44),
(74, 5, 1, 3, 45),
(75, 5, 1, 3, 47),
(76, 5, 1, 3, 46),
(77, 5, 1, 3, 48),
(78, 5, 1, 3, 49);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `level` enum('Admin','User') DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `level`, `nama`, `email`, `username`, `password`, `hash`, `active`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', 'admin', '$2y$10$r.0rR5eYbP7CEY5nBA.lWu3HUT8GnGoUM1ZdKQ5dgR2wHehaBI4Mi', '303ed4c69846ab36c2904d3ba8573050', '1'),
(3, 'Admin', 'sadewo', 'user@gmal.com', 'user', '$2y$10$MyxP4bP5QDMBAEK6WyCYN.fRrZOTcoUl7ShNtnUmV6Osksz6fFfeW', '10a5ab2db37feedfdeaab192ead4ac0e', '1'),
(4, NULL, 'Bambang', 'bambang@gmail.com', 'bambang', '$2y$10$uYTC0Lht0JJ7k4MrtfUkS.YCjSPuUzPGFJ2RpMZqr8I5MdxdJY7Va', '4c27cea8526af8cfee3be5e183ac9605', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `tb_customers`
--
ALTER TABLE `tb_customers`
  ADD PRIMARY KEY (`id_customers`);

--
-- Indeks untuk tabel `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tb_gejala_user`
--
ALTER TABLE `tb_gejala_user`
  ADD PRIMARY KEY (`id_gejala_user`);

--
-- Indeks untuk tabel `tb_judul`
--
ALTER TABLE `tb_judul`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indeks untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `tb_kantor`
--
ALTER TABLE `tb_kantor`
  ADD PRIMARY KEY (`id_kantor`);

--
-- Indeks untuk tabel `tb_kasus`
--
ALTER TABLE `tb_kasus`
  ADD PRIMARY KEY (`id_kasus`);

--
-- Indeks untuk tabel `tb_kasus_user`
--
ALTER TABLE `tb_kasus_user`
  ADD PRIMARY KEY (`id_kasus_user`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kategori_des`
--
ALTER TABLE `tb_kategori_des`
  ADD PRIMARY KEY (`id_kat_des`);

--
-- Indeks untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indeks untuk tabel `tb_pengetahuan_user`
--
ALTER TABLE `tb_pengetahuan_user`
  ADD PRIMARY KEY (`id_pengetahuan_user`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `tb_rekap`
--
ALTER TABLE `tb_rekap`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indeks untuk tabel `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indeks untuk tabel `tb_rule_user`
--
ALTER TABLE `tb_rule_user`
  ADD PRIMARY KEY (`id_rule_user`);

--
-- Indeks untuk tabel `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indeks untuk tabel `tb_solusi_user`
--
ALTER TABLE `tb_solusi_user`
  ADD PRIMARY KEY (`id_solusi_user`);

--
-- Indeks untuk tabel `tb_submenu`
--
ALTER TABLE `tb_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indeks untuk tabel `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indeks untuk tabel `tb_wil_penanganan`
--
ALTER TABLE `tb_wil_penanganan`
  ADD PRIMARY KEY (`id_wil_penanganan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bobot`
--
ALTER TABLE `tb_bobot`
  MODIFY `id_bobot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_customers`
--
ALTER TABLE `tb_customers`
  MODIFY `id_customers` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_gejala_user`
--
ALTER TABLE `tb_gejala_user`
  MODIFY `id_gejala_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tb_judul`
--
ALTER TABLE `tb_judul`
  MODIFY `id_judul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id_kabupaten` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kantor`
--
ALTER TABLE `tb_kantor`
  MODIFY `id_kantor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kasus`
--
ALTER TABLE `tb_kasus`
  MODIFY `id_kasus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_kasus_user`
--
ALTER TABLE `tb_kasus_user`
  MODIFY `id_kasus_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_des`
--
ALTER TABLE `tb_kategori_des`
  MODIFY `id_kat_des` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  MODIFY `id_kelurahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pengetahuan`
--
ALTER TABLE `tb_pengetahuan`
  MODIFY `id_pengetahuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_pengetahuan_user`
--
ALTER TABLE `tb_pengetahuan_user`
  MODIFY `id_pengetahuan_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_rekap`
--
ALTER TABLE `tb_rekap`
  MODIFY `id_rekap` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_rule_user`
--
ALTER TABLE `tb_rule_user`
  MODIFY `id_rule_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id_solusi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_solusi_user`
--
ALTER TABLE `tb_solusi_user`
  MODIFY `id_solusi_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_submenu`
--
ALTER TABLE `tb_submenu`
  MODIFY `id_submenu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `id_teknisi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_wil_penanganan`
--
ALTER TABLE `tb_wil_penanganan`
  MODIFY `id_wil_penanganan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
