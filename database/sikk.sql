-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Sep 2020 pada 05.18
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
-- Database: `sikk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dampak`
--

CREATE TABLE `tb_dampak` (
  `id_dampak` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) NOT NULL,
  `kesehatan_fisik` text,
  `kesehatan_jiwa` text,
  `perilaku` text,
  `kesehatan_reproduksi` text,
  `kondisi_kronis` text,
  `ekonomi` text,
  `anak_keluarga` text,
  `lain_lain` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_dampak`
--

INSERT INTO `tb_dampak` (`id_dampak`, `id_registrasi`, `id_konselor`, `kesehatan_fisik`, `kesehatan_jiwa`, `perilaku`, `kesehatan_reproduksi`, `kondisi_kronis`, `ekonomi`, `anak_keluarga`, `lain_lain`) VALUES
(1, 40, 1, 'sekali Sekali', 'Sehat Sekali', 'Sehat Sekali', 'Sehat Sekali', 'Sehat Sekali', 'Sehat Sekali', 'Sehat Sekali', 'Sehat Sekali'),
(2, 41, 2, 'Sehat ', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat'),
(4, 43, 1, 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat'),
(5, 44, 1, 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"'),
(6, 45, 1, 'Bola', 'Bola', 'Bola', 'Bola', 'Bola', 'Bola', 'Bola', 'Bola'),
(7, 46, 1, 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah'),
(8, 47, 1, 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla'),
(9, 48, 1, 'Bla blaBla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla'),
(10, 49, 1, 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla'),
(11, 50, 1, 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla'),
(12, 51, 1, 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla'),
(14, 27, 1, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(15, 54, 1, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(16, 27, 2, 'sakit', 'sakit', 'sakit', 'sakit', 'sakit', 'sakit', 'sakit', 'sakit'),
(17, 54, 2, 'lari', 'lari', 'lari', 'lari', 'lari', 'lari', 'lari', 'lari'),
(18, 29, 1, 'ehat', 'ehat', 'ehat', 'ehat', 'ehat', 'ehat', 'ehat', 'ehat'),
(19, 35, 2, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(20, 59, 1, 'sehat sekali', 'asdfas', 'asdfsad', 'asdfasd', 'asdfasd', 'fasdfasdf', 'asdfasdf', 'sdfasdf'),
(22, 82, 1, 'asdasdfa', 'asdfadf', 'asdasdf', 'asdasdfa', 'asdasdf', 'asdasdf', 'asdasdf', 'asdasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas_pelaku`
--

CREATE TABLE `tb_identitas_pelaku` (
  `id_pelaku` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `nama_pelaku` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `alamat_pelaku` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `no_telp_pelaku` char(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pendidikan_pelaku` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agama_pelaku` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan_pelaku` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan_lainnya_pelaku` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status_perkawinan_pelaku` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status_lainnya_pelaku` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `hubungan_korban` varchar(20) DEFAULT NULL,
  `hubungan_lainnya` varchar(20) DEFAULT NULL,
  `lokasi_kasus` varchar(20) DEFAULT NULL,
  `lokasi_lainnya` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_identitas_pelaku`
--

INSERT INTO `tb_identitas_pelaku` (`id_pelaku`, `id_registrasi`, `nama_pelaku`, `umur`, `alamat_pelaku`, `no_telp_pelaku`, `pendidikan_pelaku`, `agama_pelaku`, `pekerjaan_pelaku`, `pekerjaan_lainnya_pelaku`, `status_perkawinan_pelaku`, `status_lainnya_pelaku`, `hubungan_korban`, `hubungan_lainnya`, `lokasi_kasus`, `lokasi_lainnya`) VALUES
(4, 28, ' Jalil Bin Jakmar', '25  ', 'aa   ', 'aa', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '   ', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(5, 29, 'Jumuah', '25', 'Kasihan', '0833333333333', 'PT/S1/D3/D2', 'Islam', 'Lainnya', ' Masih Cari', 'Lainnya', 'Belum Menikah', 'Suami', '', 'Lainnya', 'Di Jalan'),
(6, 34, 'qwe', 'qwe', 'qwe', 'qwe', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Sekolah', ''),
(7, 35, 'asd', 'asd', 'asd', 'asd', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Keluarga', '', 'Sekolah', ''),
(8, 36, 'Juli', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'PT/S1/D3/D2', 'Islam', 'Pegawai Swasta', ' ', 'Lainnya', 'belum nikah', 'Lainnya', 'Ditanyakan', 'Sekolah', ''),
(10, 38, 'Jalil', '16', 'Kulon Progo ', '0934323333333', 'TK', 'Islam', 'Guru / Dosen', '', 'Lainnya', 'Belum', 'Lainnya', 'Belum', 'Lainnya', 'Di Mobil'),
(11, 39, 'Jakbar', '25', 'Kasihan', '089343434', 'SLTA', 'Hindu', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(12, 40, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(13, 41, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(14, 42, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(15, 43, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(16, 44, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Ibu Rumah Tangga', '', 'Menikah', '', 'Keluarga', '', 'Sekolah', ''),
(17, 45, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(18, 46, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(19, 47, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(20, 48, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Tidak Menikah', '', 'Istri', '', 'Tempat Kerja', ''),
(21, 49, 'Juli', '25', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Hindu', 'Pedagang', '', 'Menikah', '', 'Suami', '', 'Tempat Kerja', ''),
(22, 50, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(23, 51, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(25, 53, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', '', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Sekolah', ''),
(26, 54, 'Juli Bin Laden', '29 Tahun', 'Jalan Soekarno', '0893434343434', 'SLTA', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Istri', '', 'Tempat Kerja', ''),
(27, 55, 'Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Hindu', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Sekolah', ''),
(28, 59, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(30, 61, ' Jalil Bin Jakmar', '25 Tahun  ', 'Kulon Progo ', '081212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(31, 62, 'jalil', '12 tahun', 'jauh', '081231223123', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(32, 63, 'suneo', '28 tahun', 'jakarta', '0923423423423', 'SLTP', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(33, 64, 'bambang', '25 tahun', 'jogja', '0823423423423', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(35, 66, 'Bambang', '29', 'Yogyakarta', '0933939393939', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(36, 67, 'Bejo', '22 Tahun', 'Jakarta', '0898393884932', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(37, 68, 'Jamal', '22 tahun', '2234', '0828282828', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(38, 69, 'asdf', 'asdf', 'asdf', '1213123123', 'PT/S1/D3/D2', '', 'Pegawai Swasta', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(39, 70, 'asdf', 'asdf', 'asdf', '1213123123', 'PT/S1/D3/D2', 'Islam', 'Pegawai Swasta', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(40, 71, 'asdf', 'asdf', 'asdf', '1231231231212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(41, 72, 'asdf', 'asdf', 'asdf', '1231231231212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(42, 73, 'asd', 'asd', 'asd', '1111111111111', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(43, 74, 'asd', 'asd', 'asd', '1111111111111', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Istri', '', 'Rumah Tangga', ''),
(44, 75, 'asd', 'asd', 'asd', '1111111111111', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(45, 76, 'sdsds', 'sdsd', 'sdsd', '232323', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(46, 77, 'asas', 'sasas', 'asasa', '121212121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(47, 78, 'qwqwqw', 'wqwqwqwqwq', 'qwqwqwqqwqwqwqwqw', '1212121212121', 'PT/S1/D3/D2', 'Islam', 'Pedagang', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(48, 79, 'asdf', 'asdf', 'asdf', '123123', 'Tidak Sekolah', 'Hindu', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(50, 81, 'Bambang', '22 tahun', 'jakarta', '0811111111111', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(51, 82, 'Bambang', '22 tahun', 'jakarta', '0811111111111', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', ''),
(52, 83, 'Jaka', '22 Tahun', 'Medan', '081212121212', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Menikah', '', 'Suami', '', 'Rumah Tangga', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas_survivor`
--

CREATE TABLE `tb_identitas_survivor` (
  `id_survivor` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `id_kabupaten` int(5) DEFAULT NULL,
  `kabupaten_lain` varchar(20) NOT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `pendidikan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `pekerjaan_lainnya` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `hobby` varchar(50) DEFAULT NULL,
  `keterampilan` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `status_lainnnya` varchar(20) DEFAULT NULL,
  `lama_perkawinan` varchar(30) DEFAULT NULL,
  `jumlah_anak` varchar(10) DEFAULT NULL,
  `dirujuk_oleh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_identitas_survivor`
--

INSERT INTO `tb_identitas_survivor` (`id_survivor`, `id_registrasi`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kecamatan`, `id_kabupaten`, `kabupaten_lain`, `no_telp`, `pendidikan`, `agama`, `pekerjaan`, `pekerjaan_lainnya`, `jenis_kelamin`, `hobby`, `keterampilan`, `status_perkawinan`, `status_lainnnya`, `lama_perkawinan`, `jumlah_anak`, `dirujuk_oleh`) VALUES
(8, NULL, 'Teguh', 'Mdan', '15.05.2020', 'Yogyakarta', 'kraton', 0, '', '082312313123', 'PT/S1/D3/D2', 'Islam', 'Lainnya', 'MHS', 'Laki-Laki', 'lari', 'man', 'Lainnya', 'BlM', '2 thn', '', 'teteh'),
(17, 16, 'jalil', 'Medan', '07.05.2020', 'qq', 'qq', 0, '', 'qq', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'qq', 'qq', 'Menikah', '', 'qq', '2 Orang', 'qq'),
(18, 17, 'Jmasld', '11', '15.05.2020', 'qq', 'qq', 0, '', '', 'Tidak Seko', 'Islam', 'Lainnya', 'qq', 'Laki-Laki', 'qq', 'qq', 'Menikah', '', 'qq', '2 Orang', 'qq'),
(19, 18, 'sssas', '112', '09.05.2020', 'qw', 'qw', 0, '', 'qw', 'Tidak Seko', 'Kristen', 'Ibu Rumah Tangga', '', 'Laki-Laki', 'qq', 'qq', 'Menikah', '', '11', '10 Orang', '11'),
(20, 19, 'wer', 'wer', '06.06.2020', 'wer', 'wer', 0, '', 'wer', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'wer', 'wer', 'Menikah', '', 'wer', '8 Orang', 'wer'),
(21, 20, 'qwe', 'qwe', '14.05.2020', 'qwe', 'qwe', 0, '', 'qwe', 'Tidak Seko', 'Islam', 'PNS / BUMN', '', 'Laki-Laki', 'qwe', 'qwe', 'Menikah', '', 'qwe', '10 Orang', 'qwe'),
(22, 21, 'sed', 'sed', '16.05.2020', 'sed', 'sed', 0, '', 'sed', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'sed', 'sed', 'Menikah', '', 'sed', '9 Orang', 'sed'),
(23, 22, 'rere', 'reree', '30.05.2020', 'erer', 'erer', 0, '', 'erer', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'erer', 'erer', 'Menikah', '', 'erer', '9 Orang', 'erer'),
(24, 23, 'rere', 'reree', '30.05.2020', 'erer', 'erer', 0, '', 'erer', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'erer', 'erer', 'Menikah', '', 'erer', '9 Orang', 'erer'),
(25, 24, 'rere', 'reree', '30.05.2020', 'erer', 'erer', 0, '', 'erer', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'erer', 'erer', 'Menikah', '', 'erer', '9 Orang', 'erer'),
(27, 27, 'sad', 'asd', '08.05.2020', 'ad', 'ads', 0, '', 'asd', 'Tidak Seko', 'Hindu', 'Guru / Dosen', '', 'Laki-Laki', 'ad', 'asd', 'Menikah', '', 'asd', '10 Orang', 'asd'),
(28, 28, 'desssd', 'www', '16.05.2020', 'dd', 'dd', 0, '', 'dd', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'dd', 'dd', 'Menikah', '', 'dd', '10 Orang', 'dd'),
(29, 29, 'zxczx', 'zxc', '01.05.2020', 'zxc', 'zxc', 0, '', 'zxc', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'zxc', 'zxc', 'Menikah', '', 'zxc', '9 Orang', 'zxc'),
(34, 34, '123eee', 'wqe', '22.05.2020', 'qwe', 'qwe', 0, '', 'qwe', 'Tidak Seko', 'Islam', 'Ibu Rumah Tangga', '', 'Laki-Laki', 'qwe', 'qwe', 'Cerai', '', 'qwe', '8 Orang', 'qwe'),
(35, 35, 'aaasd', 'adasasdad', '14.05.2020', 'asaddsa', 'ads', 0, '', 'asd', 'Tidak Seko', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'asd', 'asd', 'Menikah', '', 'asd', '9 Orang', 'asd'),
(36, 36, 'Teguh', 'Medan', '07.05.2020', 'Yogyakarta', 'Kraton', 0, '', '0891211111111', 'PT/S1/D3/D', 'Islam', 'Lainnya', 'Mahasiswa', 'Laki-Laki', 'Lari', 'Nyanyi', 'Lainnya', 'Belum Menikah', '1', '1 Orang', 'Tetangga'),
(38, 38, 'Bambang Sugandi', 'Medan', '12 Januari 2019', 'Yogyakarta', 'Kraton', 0, '', '0812322222222', 'SLTP', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'Lari', 'Nyanyi', 'Lainnya', 'Belum Menikah', '1', '1 Orang', 'Tetangga'),
(39, 39, 'Hasna', 'Yogyakarta', '02 Maret 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'SD', 'Kristen', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'Nyayi', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(40, 40, 'Teguh Sadewo Pangestu', 'Mdan', '22 Desember 2009', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'Lari', 'Menikah', '', '1', 'Tidak Ada', 'Tetangga'),
(41, 41, 'Hannah', 'Jakarta', '21 Mei 1998', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(42, 42, 'Teguh Sadewo Pangestu', 'Mdan', '08 Maret 2019', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'Lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(43, 43, 'Teguh Sadewo Pangestu', 'Mdan', '22 Maret 2019', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Nyayi', 'Nyayi', 'Menikah', '', '1', 'Tidak Ada', 'Tetangga'),
(44, 44, 'Teguh Sadewo Pangestu', 'Mdan', '22 Mareit 2019', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'AD', 'AS', 'Menikah', '', '1', '10 Orang', 'Tetangga'),
(45, 45, 'Teguh Sadewo Pangestu', 'Mdan', '22 Mare 2019', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Bola', 'Bola', 'Menikah', '', '1', 'Tidak Ada', 'Tetangga'),
(46, 46, 'Teguh Sadewo Pangestu', 'Mdan', '22 Mareit 201', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Bolah', 'Bolah', 'Menikah', '', '1', 'Tidak Ada', 'Bolah'),
(47, 47, 'Teguh Sadewo Pangestu', 'Mdan', '22 Desember 3333', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'Lari', 'Menikah', '', '1', 'Tidak Ada', 'Tetangga'),
(48, 48, 'Teguh Sadewo Pangestu', 'Mdan', '22 mei 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'Lari', 'lari', 'Tidak Menikah', '', '1', '', 'Tetangga'),
(49, 49, 'Teguh Sadewo Pangestu', 'Mdan', '22 mei 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Pegawai Swasta', '', 'Perempuan', 'lari', 'lari', 'Poligami', '', '1', '10 Orang', 'Tetangga'),
(50, 50, 'Teguh Sadewo Pangestu', 'Mdan', '22 maret 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Pegawai Swasta', '', 'Perempuan', 'lari', 'lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(51, 51, 'Teguh Sadewo Pangestu', 'Mdan', '22 maret 2019', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(53, 53, 'Teguh Sadewo Pangestu', 'Mdan', '22 Januari 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1', '2 Orang', 'Tetangga'),
(54, 54, 'Bambang Sukaesi', 'Jakart', '22 Maret 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333232323', 'Tidak Sekolah', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'Lari', 'Lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(55, 55, 'Julia Gizi', 'Jayakarta', 'Surabaya', 'Suramadu', 'Suramadu', 0, '', '0893242342342', 'SLTP', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'Lari', 'Lari', 'Menikah', '', '1', 'Tidak Ada', 'Tetangga'),
(56, 56, 'Teguh Sadewo Pangestu', 'Mdan', '22 Maret 2001', 'Bekasi', 'Bekasi', 0, 'Bekasi', '0812333333333', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(57, 57, 'Teguh Sadewo Pangestu', 'Mdan', '22 maret 2001', 'jabar', 'jabar', 0, 'jabar', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1', '1 Orang', 'Tetangga'),
(58, 58, 'Teguh Sadewo Pangestu', 'Mdan', '22 maret 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1', '10 Orang', 'Tetangga'),
(59, 59, 'Teguh Sadewo Pangestu', 'Mdan', '22 maret 2001', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1', '10 Orang', 'Tetangga'),
(61, 61, 'Teguh Sadewo Pangestu', 'Mdan', '12', 'Yogyakarta', 'Kraton', 0, '', '0812333333333', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1', '2 Orang', 'Tetangga'),
(62, 62, 'Jamal', 'Medan', 'Jakarta', 'Surakarta', 'Sentolo', 0, '', '0812311111111', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1 tahun', '4 Orang', 'tetangga'),
(63, 63, 'Hannahs', 'Jakarta', '12 maret 2012', 'yogyakarta', 'Medan baru', 0, '', '0897767676767', 'SLTP', 'Islam', 'Guru / Dosen', '', 'Perempuan', 'lari', 'lari', 'Menikah', '', '1', '1 Orang', 'jakarta'),
(64, 64, 'surti', 'medan', '01 Januari 2010', 'magelang', 'sleman', 0, '', '0892342342342', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Perempuan', 'lari', 'lari', 'Menikah', '', '1 tahun', '3 Orang', 'tetangga'),
(66, 66, 'aaasd', 'Medan', '22 Maret 2020', 'Yogyakarta', 'Kraton', 5, '', '0898989898989', 'SLTP', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1 Tahun', '10 Orang', 'balai desa'),
(67, 67, 'aaasd', 'Medan', '22 Desember 2012', 'Yogyakarta', 'kraton', 3, '', '0898989898989', 'SLTP', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1 Tahun', '1 Orang', 'Balai desa'),
(68, 68, 'aaasd', 'medan', '22 desember 2001', 'Medan', 'medan', 7, '', '0898989993939', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1 tahun', '10 Orang', 'balai desa'),
(69, 69, 'Hannahs', 'asd', 'asdf', 'asdf', 'asdf', 1, '', '1212121212121', 'PT/S1/D3/D2', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'asdf', 'asdf', 'Tidak Menikah', '', 'asdf', '7 Orang', 'asdf'),
(70, 70, 'Hannahs', 'asd', 'asdf', 'asdf', 'asdf', 1, '', '1212121212121', 'PT/S1/D3/D2', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'asdf', 'asdf', 'Tidak Menikah', '', 'asdf', '7 Orang', 'asdf'),
(71, 71, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 7, 'asdf', '1231231231231', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'asdf', 'asdf', 'Menikah', '', 'asdf', '10 Orang', 'asdf'),
(72, 72, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 7, 'asdf', '1231231231231', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'asdf', 'asdf', 'Menikah', '', 'asdf', '10 Orang', 'asdf'),
(73, 73, 'sdf', 'sdfsd', 'dddsd', 'dsd', 'sd', 4, '', '1111111111111', 'PT/S1/D3/D2', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'asd', 'asd', 'Menikah', '', 'asd', '1 Orang', 'asd'),
(74, 74, 'asdds', 'asdasd', 'asd', 'asd', '11111111111', 3, '', '1111111111111', 'PT/S1/D3/D2', 'Islam', 'Buruh', '', '', 'adasd', 'asd', 'Menikah', '', 'asd', 'Tidak Ada', 'asd'),
(75, 75, 'sdf', 'sdfsd', 'dddsd', 'dsd', 'sd', 4, '', '1111111111111', 'PT/S1/D3/D2', 'Islam', 'Pegawai Swasta', '', 'Laki-Laki', 'asd', 'asd', 'Menikah', '', 'asd', '1 Orang', 'asd'),
(76, 76, 'aaasd', 'asas', 'asas', 'asas', 'asas', 1, '', '121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'sdsds', 'dsdsd', 'Menikah', '', 'sdsd', '5 Orang', 'sdsd'),
(77, 77, 'sad', 'zxzx', 'asasas', 'asa', 'sasas', 4, '', '12121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', '', 'asas', 'asasas', 'Menikah', '', 'asasasas', '1 Orang', 'asasas'),
(78, 78, 'wqwqwqw', '1212', '121212', '121212', '1212', 3, '', '121212', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', '121212', '12121212', 'Menikah', '', '21212', '3 Orang', '12121212'),
(79, 79, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 2, '', '123123123', 'Tidak Sekolah', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'asdf', 'asdf', 'Menikah', '', 'asdf', '5 Orang', 'asdf'),
(81, 81, 'Sulastri', 'Jakarta', 'medan', 'jakarta', 'Jakarta', 1, '', '0891232222', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1 tahun', '1 Orang', 'tetangga'),
(82, 82, 'Sulastri', 'Jakarta', 'medan', 'jakarta', 'Jakarta', 1, '', '0891232222', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'lari', 'lari', 'Menikah', '', '1 tahun', '1 Orang', 'tetangga'),
(83, 83, 'aaasd', 'Medan', '22 Maret 1996', 'Jakarta', 'Jakarta', 1, '', '0812322222', 'PT/S1/D3/D2', 'Islam', 'Guru / Dosen', '', 'Laki-Laki', 'Lari', 'Lari', 'Menikah', '', '1 Tahun', '9 Orang', 'Tetangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi_kasus`
--

CREATE TABLE `tb_informasi_kasus` (
  `id_inf_kasus` int(5) NOT NULL,
  `id_registrasi` int(50) DEFAULT NULL,
  `kasus` int(5) NOT NULL,
  `id_kdrt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_informasi_kasus`
--

INSERT INTO `tb_informasi_kasus` (`id_inf_kasus`, `id_registrasi`, `kasus`, `id_kdrt`) VALUES
(212, 58, 1, 2),
(213, 55, 1, 2),
(214, 56, 4, 0),
(215, 56, 1, 3),
(216, 62, 1, 3),
(217, 51, 3, 0),
(218, 51, 4, 0),
(219, 51, 1, 3),
(220, 51, 1, 4),
(221, 51, 1, 7),
(222, 67, 3, 0),
(223, 67, 4, 0),
(224, 67, 1, 2),
(225, 67, 1, 3),
(226, 67, 1, 4),
(227, 67, 1, 7),
(228, 68, 3, 0),
(229, 68, 4, 0),
(230, 68, 1, 2),
(231, 68, 1, 3),
(232, 68, 1, 4),
(233, 68, 1, 7),
(234, 66, 3, 0),
(235, 66, 4, 0),
(236, 66, 1, 2),
(237, 66, 1, 3),
(238, 66, 1, 4),
(239, 66, 1, 7),
(240, 73, 1, 3),
(241, 74, 1, 4),
(242, 75, 1, 3),
(243, 75, 1, 2),
(244, 75, 1, 2),
(245, 75, 1, 2),
(246, 75, 1, 2),
(247, 75, 1, 3),
(248, 75, 1, 2),
(249, 75, 1, 2),
(250, 68, 1, 2),
(251, 67, 3, 0),
(252, 66, 3, 0),
(253, 77, 3, 0),
(254, 78, 3, 0),
(255, 79, 3, 0),
(256, 79, 4, 0),
(257, 79, 1, 2),
(258, 83, 1, 3),
(259, 83, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kasus`
--

CREATE TABLE `tb_jenis_kasus` (
  `id_jkas` int(3) NOT NULL,
  `jenis_kasus` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_jenis_kasus`
--

INSERT INTO `tb_jenis_kasus` (`id_jkas`, `jenis_kasus`) VALUES
(1, 'KDRT (Kekerasan Dalam Rumah Tangga)'),
(3, 'KTP (Kekerasan Terhadap Perempuan)'),
(4, 'KTA (Kekerasan Terhadap Anak)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kekerasan`
--

CREATE TABLE `tb_jenis_kekerasan` (
  `id_jk` int(3) NOT NULL,
  `jenis_kekerasan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_jenis_kekerasan`
--

INSERT INTO `tb_jenis_kekerasan` (`id_jk`, `jenis_kekerasan`) VALUES
(1, 'Fisik'),
(4, 'Psikis'),
(5, 'Perkosaan'),
(6, 'Pelecehan Seksual'),
(7, 'Pencabulan'),
(8, 'Penelantaran'),
(9, 'Eksploitasi'),
(10, 'Trafficking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `id_jenis_kelamin` int(5) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id_kabupaten` int(5) NOT NULL,
  `kode_kemendagri` varchar(6) DEFAULT NULL,
  `kabupaten` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id_kabupaten`, `kode_kemendagri`, `kabupaten`) VALUES
(1, '34.02', 'Bantul'),
(2, '34.03', 'Gunung Kidul'),
(3, '34.01', 'Kulon Progo'),
(4, '34.04', 'Sleman'),
(5, '34.71', 'Yogyakarta'),
(7, '1', 'Lain - Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kdrt`
--

CREATE TABLE `tb_kdrt` (
  `id_kdrt` int(3) NOT NULL,
  `kdrt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kdrt`
--

INSERT INTO `tb_kdrt` (`id_kdrt`, `kdrt`) VALUES
(2, 'KTI (Kekerasan Terhadap Istri)'),
(3, 'KTA (Kekerasan Terhadap Anak)'),
(4, 'KTS (Kekerasan Terhadap Suami)'),
(7, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kdrt_kta`
--

CREATE TABLE `tb_kdrt_kta` (
  `id_kdrt_kta` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_jk` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kdrt_kta`
--

INSERT INTO `tb_kdrt_kta` (`id_kdrt_kta`, `id_registrasi`, `id_jk`, `keterangan`) VALUES
(1, 63, 1, ''),
(2, 63, 4, ''),
(3, 58, 1, 'asdf'),
(4, 58, 4, 'asdf'),
(5, 6, 0, 'sdv'),
(6, 67, 0, 'asdasd'),
(7, 64, 9, 'asdfa'),
(8, 64, 10, 'asdfa'),
(9, 63, 1, 'asd'),
(10, 63, 8, 'asd'),
(11, 59, 9, 'asd'),
(12, 59, 10, 'asd'),
(13, 63, 1, ''),
(14, 63, 4, ''),
(15, 62, 1, 'asdf'),
(16, 62, 5, 'asdf'),
(17, 62, 1, 'asd'),
(18, 62, 5, 'asd'),
(19, 57, 1, 'as'),
(20, 57, 5, 'as'),
(21, 62, 8, 'zxc'),
(22, 62, 10, 'zxc'),
(23, 62, 1, 'sd'),
(24, 64, 4, 'asdqew'),
(25, 64, 10, 'asdqew'),
(26, 63, 6, 'asdf'),
(27, 63, 8, 'asdf'),
(28, 56, 10, ''),
(29, 67, 0, 'asdasd'),
(31, 67, 0, 'asdasd'),
(32, 49, 1, 'sd'),
(33, 16, 1, ''),
(34, 59, 1, 'adsf'),
(35, 59, 6, 'adsf'),
(36, 56, 7, 'asd'),
(37, 56, 10, 'asd'),
(38, 62, 6, 'asd'),
(39, 62, 10, 'asd'),
(40, 51, 6, 'asd'),
(41, 51, 9, 'asd'),
(42, 67, 0, 'asdasd'),
(43, 68, 1, 'Iasasas'),
(44, 66, 6, ''),
(45, 71, 5, 'asdf'),
(46, 71, 7, 'asdf'),
(47, 72, 5, 'asdf'),
(48, 72, 7, 'asdf'),
(49, 73, 5, 'asd'),
(50, 73, 8, 'asd'),
(52, 75, 8, 'ssadasdasd'),
(53, 0, 4, 'ad'),
(54, 0, 6, 'ad'),
(59, 74, 6, 'xczxczx'),
(60, 74, 8, 'xczxczx'),
(63, 74, 4, 'asdf'),
(64, 74, 6, 'asdf'),
(69, 76, 8, 'wewewe'),
(70, 76, 9, 'wewewe'),
(71, 78, 6, 'qwqwqwqw'),
(72, 78, 8, 'qwqwqwqw'),
(73, 79, 1, 'asdf'),
(74, 79, 8, 'asdf'),
(75, 79, 5, ''),
(76, 79, 7, ''),
(77, 79, 4, ''),
(78, 79, 6, ''),
(79, 81, 4, 'kaasar'),
(80, 81, 6, 'kaasar'),
(81, 82, 4, 'kaasar'),
(82, 82, 6, 'kaasar'),
(83, 83, 7, 'asd'),
(84, 83, 8, 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kdrt_kti`
--

CREATE TABLE `tb_kdrt_kti` (
  `id_kdrt_kti` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_jk` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kdrt_kti`
--

INSERT INTO `tb_kdrt_kti` (`id_kdrt_kti`, `id_registrasi`, `id_jk`, `keterangan`) VALUES
(1, 68, 5, 'sssssss'),
(2, 68, 1, 'sssssss'),
(5, 74, 7, 'asdryhgfds'),
(6, 67, 0, 'asdryhgfds'),
(7, 67, 0, 'asdryhgfds'),
(8, 67, 0, 'asdryhgfds'),
(9, 67, 0, 'asdryhgfds'),
(10, 74, 10, 'asdryhgfds'),
(11, 68, 9, 'sssssss'),
(16, 67, 0, 'asdryhgfds'),
(17, 66, 7, 'asdryhgfds'),
(18, 65, 3, 'asdryhgfds'),
(20, 75, 8, 'fffff'),
(21, 74, 9, 'asdryhgfds'),
(31, 67, 0, 'asdryhgfds'),
(32, 66, 8, 'asdryhgfds'),
(42, 67, 6, 'asdryhgfds'),
(44, 67, 0, 'asdryhgfds'),
(45, 67, 0, 'asdryhgfds'),
(46, 67, 0, 'asdryhgfds'),
(47, 79, 1, 'asdf'),
(48, 79, 6, 'asdf'),
(49, 79, 4, ''),
(50, 79, 6, ''),
(51, 79, 1, ''),
(52, 79, 5, ''),
(53, 79, 1, ''),
(54, 79, 4, ''),
(55, 79, 6, ''),
(56, 79, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kdrt_kts`
--

CREATE TABLE `tb_kdrt_kts` (
  `id_kdrt_kts` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_jk` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kdrt_kts`
--

INSERT INTO `tb_kdrt_kts` (`id_kdrt_kts`, `id_registrasi`, `id_jk`, `keterangan`) VALUES
(1, 50, 1, '1234'),
(2, 50, 6, '1234'),
(3, 68, 1, 'asdf'),
(4, 68, 6, 'asdf'),
(5, 68, 4, 'asd'),
(6, 68, 6, 'asd'),
(7, 62, 6, 'asd'),
(8, 62, 8, 'asd'),
(9, 57, 7, 'asd'),
(10, 57, 8, 'asd'),
(11, 62, 1, 'sd'),
(12, 62, 5, 'sd'),
(13, 64, 5, 'asdqwe'),
(14, 64, 8, 'asdqwe'),
(15, 63, 7, 'asdf'),
(16, 63, 9, 'asdf'),
(17, 56, 7, ''),
(18, 16, 1, ''),
(19, 59, 1, ''),
(20, 59, 6, ''),
(21, 63, 4, 'asd'),
(22, 63, 6, 'asd'),
(23, 51, 6, 'asd'),
(24, 67, 0, '<br />\r\n<b>Notice</b>:  Undefined offset: 1 in <b>C:AppServwwwsikkadminpendaftaran_kelolainf_kasus_edit.php</b> on line <b>96</b><br />\r\n'),
(25, 68, 6, ''),
(26, 66, 7, ''),
(27, 69, 0, ''),
(28, 69, 0, ''),
(29, 70, 0, ''),
(30, 70, 0, ''),
(31, 74, 5, 'asd'),
(32, 74, 7, 'asd'),
(33, 79, 5, 'asdf'),
(34, 79, 7, 'asdf'),
(35, 81, 5, 'kasar'),
(36, 81, 7, 'kasar'),
(37, 82, 5, 'kasar'),
(38, 82, 7, 'kasar'),
(39, 83, 7, 'asd'),
(40, 83, 8, 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kdrt_lain`
--

CREATE TABLE `tb_kdrt_lain` (
  `id_kdrt_lain` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_jk` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kdrt_lain`
--

INSERT INTO `tb_kdrt_lain` (`id_kdrt_lain`, `id_registrasi`, `id_jk`, `keterangan`) VALUES
(1, 68, 10, ''),
(2, 68, 10, ''),
(3, 68, 10, ''),
(4, 68, 10, ''),
(5, 68, 10, ''),
(6, 68, 10, ''),
(7, 68, 10, ''),
(8, 68, 10, ''),
(9, 68, 10, ''),
(10, 68, 10, ''),
(11, 68, 10, ''),
(12, 68, 10, ''),
(13, 68, 10, ''),
(14, 68, 10, ''),
(15, 68, 10, ''),
(16, 68, 10, ''),
(17, 79, 5, 'asdf'),
(18, 79, 6, 'asdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ket_kasus`
--

CREATE TABLE `tb_ket_kasus` (
  `id_ket_kasus` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `sejak_kapan` text,
  `faktor` text,
  `seberapa_sering` text,
  `upaya_yg_dilakukan` text,
  `pihak_yg_dilibatkan` text,
  `hasilnya` text,
  `harapan_korban` text,
  `narasi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_ket_kasus`
--

INSERT INTO `tb_ket_kasus` (`id_ket_kasus`, `id_registrasi`, `sejak_kapan`, `faktor`, `seberapa_sering`, `upaya_yg_dilakukan`, `pihak_yg_dilibatkan`, `hasilnya`, `harapan_korban`, `narasi`) VALUES
(2, 34, 'sudah', 'sudah', 'sudah', 'sudah', 'sudah', 'sudah', 'sudah', 'sudah'),
(3, 35, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', ''),
(4, 36, 'lari lari', 'lari lari', 'lari', 'lari', 'lari', 'lari', 'lari', ''),
(6, 38, 'Sejak Tadi Pagi', 'Uang', 'Sekali Barusan', 'Belum Ada', 'Belum Ada', 'Blum Ada', '', ''),
(7, 39, 'Kemarin', 'uang', 'Sekali Aja', 'Belum Ada', 'Belum Ada', ' Blum ada', ' Belum Ada', ''),
(8, 40, 'Barusan', 'Uang', 'Sekali', 'Belum Ada', 'Belum Ada', ' Belum Ada', 'Belum Ada', ''),
(9, 41, 'Sejak Tadi', 'Uang', 'Sekali Aja', 'Belum Ada', 'Belum da', 'Belum Ada', 'Belum Ada', ''),
(10, 42, 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', ''),
(11, 43, 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', 'Sehat', ''),
(12, 44, 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', 'class=\"form-control\"', ''),
(13, 45, 'Bola', 'Bola', 'Bola', 'Bola', 'Bola', 'Bola', 'Bola', 'bolah bloah adfasdf'),
(14, 46, 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah', 'Bolah'),
(15, 47, 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla', 'Bla Bla Bla'),
(16, 48, 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla', 'Bla bla'),
(17, 49, 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla'),
(18, 50, 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla'),
(19, 51, 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla bla', 'bla blabla bla', 'bla bla', 'bla bla'),
(21, 53, 'bla ', 'bla ', 'bla ', 'bla ', 'bla ', 'bla ', 'bla ', 'bla '),
(22, 54, 'sehat', 'seha', 'seha', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(23, 55, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'seha', 'sehat', 'seha'),
(24, 56, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(25, 57, 'lari', 'lari', 'lari', 'lari', 'lari', 'larri', 'lari', 'lari'),
(26, 58, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(27, 59, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(29, 61, 'sehata', 'sehata', 'sehata', 'sehata', 'sehata', 'sehata', 'sehata', 'sehata'),
(30, 62, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'saselas', 'seha selau'),
(31, 63, 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehatsehat'),
(32, 64, 'sehahat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat', 'sehat'),
(34, 66, 'kemarin', 'kasar', 'kasar', 'kasar', 'kasar', 'kasar', 'kasar', 'kasar'),
(35, 67, 'uang', 'uang', 'uang', 'uang', 'uang', 'uang', 'uang', 'uang'),
(36, 68, 'uang', 'uang', 'uang', 'uang', 'uang', 'uang', 'uang', 'uang'),
(37, 69, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf'),
(38, 70, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf'),
(39, 71, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
(40, 72, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
(41, 73, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(42, 74, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(43, 75, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(44, 76, 'wew', 'wewe', 'wew', 'ewe', 'wew', 'wewe', 'wewe', 'wewe'),
(45, 77, 'asas', 'asas', 'asasasas', 'asa', 'sasasa', 'sas', 'asasas', 'asasas'),
(46, 78, 'wqwqwqwqwqw', 'qwq', 'qwqw', 'qwqwqw', 'qwqw', 'wqw', 'wqwqwq', 'qwqwq'),
(47, 79, 'sdfgsdfg', 'sdfg', 'fgsdfgsdfg', 'fgsd', 'fgsdfgsd', 'sdgfsdfgsd', 'sdfgsdfg', 'sdfg'),
(49, 81, 'kemarin', 'uang', 'seminggi ', 'belum ada', 'belum ada', 'belum ada', 'belum ada', 'belum ada'),
(50, 82, 'kemarin', 'uang', 'seminggi ', 'belum ada', 'belum ada', 'belum ada', 'belum ada', 'belum ada'),
(51, 83, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konselor`
--

CREATE TABLE `tb_konselor` (
  `id_konselor` int(5) NOT NULL,
  `nama_konselor` varchar(100) DEFAULT NULL,
  `bidang_keahlian` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_konselor`
--

INSERT INTO `tb_konselor` (`id_konselor`, `nama_konselor`, `bidang_keahlian`, `alamat`, `no_telp`) VALUES
(1, 'Siti Murwanti S.H', 'Konselor Hukum', 'Yogyakarta', '08123456789'),
(2, 'Kalista Vidyadhara, S.Psi', 'Konselor Psikologi', 'Yogyakarta', '08123444488');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kta`
--

CREATE TABLE `tb_kta` (
  `id_kta` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_jk` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kta`
--

INSERT INTO `tb_kta` (`id_kta`, `id_registrasi`, `id_jk`, `keterangan`) VALUES
(1, 64, 4, '123'),
(2, 64, 8, '123'),
(3, 64, 10, '123'),
(4, 66, 4, 'asdfasdf'),
(5, 66, 6, 'asdfasdf'),
(6, 66, 8, 'qer'),
(7, 66, 10, 'qer'),
(8, 67, 0, 'zx'),
(9, 67, 0, 'zx'),
(10, 67, 5, 'asdasdasd'),
(11, 67, 0, 'zx'),
(12, 68, 4, 'asdf'),
(13, 68, 6, 'asdf'),
(14, 67, 0, 'zx'),
(15, 67, 0, 'zx'),
(16, 62, 7, 'as'),
(17, 62, 10, 'as'),
(18, 62, 8, 'adsf'),
(19, 62, 10, 'adsf'),
(20, 57, 5, 'as'),
(21, 57, 8, 'as'),
(22, 56, 10, 'cv'),
(23, 16, 10, 'sdasd'),
(24, 21, 1, ''),
(25, 24, 5, ''),
(26, 48, 8, ''),
(27, 48, 9, ''),
(28, 47, 8, ''),
(29, 47, 10, ''),
(30, 64, 6, ''),
(31, 64, 8, ''),
(32, 29, 1, 'sda'),
(33, 29, 5, 'sda'),
(34, 29, 7, 'sda'),
(35, 29, 8, 'sda'),
(36, 29, 9, 'sda'),
(37, 29, 10, 'sda'),
(38, 55, 7, ''),
(39, 55, 10, ''),
(40, 51, 10, 'asd'),
(41, 67, 0, 'zx'),
(42, 68, 9, ''),
(43, 66, 5, ''),
(44, 79, 8, 'as'),
(45, 79, 1, ''),
(46, 79, 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ktp`
--

CREATE TABLE `tb_ktp` (
  `id_ktp` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_jk` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_ktp`
--

INSERT INTO `tb_ktp` (`id_ktp`, `id_registrasi`, `id_jk`, `keterangan`) VALUES
(1, 50, 1, 'asdfad'),
(2, 50, 5, 'asdfad'),
(3, 50, 10, 'asdfad'),
(4, 47, 1, 'asdf'),
(5, 47, 6, 'asdf'),
(6, 68, 8, 'asdf'),
(7, 68, 10, 'asdf'),
(8, 56, 8, '123wd'),
(9, 56, 10, '123wd'),
(10, 66, 4, 'asdfasdf'),
(11, 66, 7, 'asdfasdf'),
(12, 67, 6, 'zx'),
(13, 67, 10, 'zx'),
(14, 67, 5, ''),
(15, 67, 8, ''),
(16, 62, 8, 'ad'),
(17, 62, 10, 'ad'),
(18, 57, 4, 'as'),
(19, 57, 6, 'as'),
(20, 23, 8, '....'),
(21, 23, 10, '....'),
(22, 17, 1, 'adasd'),
(23, 17, 7, 'adasd'),
(24, 17, 10, 'adasd'),
(25, 21, 1, ''),
(26, 24, 5, ''),
(27, 48, 8, ''),
(28, 48, 10, ''),
(29, 61, 7, ''),
(30, 61, 10, ''),
(31, 51, 10, 'sd'),
(32, 67, 5, ''),
(33, 68, 9, ''),
(34, 66, 6, ''),
(35, 67, 5, 'asdfb'),
(36, 67, 7, 'asdfb'),
(37, 66, 5, 'asd'),
(38, 66, 7, 'asd'),
(39, 77, 5, 'asasa'),
(40, 77, 7, 'asasa'),
(41, 78, 7, 'qwqwqwqw'),
(42, 78, 9, 'qwqwqwqw'),
(43, 79, 7, 'as'),
(44, 79, 6, ''),
(45, 79, 7, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(5) NOT NULL,
  `nama_layanan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`) VALUES
(1, 'Konseling Telp'),
(2, 'Konsultasi Hukum'),
(3, 'Litigasi'),
(4, 'Home Visite'),
(5, 'Medis'),
(6, 'Shelter'),
(7, 'Mediasi'),
(8, 'Support Group'),
(9, 'Rujukan'),
(10, 'Aspirasi Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_aspirasi`
--

CREATE TABLE `tb_layanan_aspirasi` (
  `id_aspirasi` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_aspirasi` date DEFAULT NULL,
  `kegiatan_aspirasi` varchar(100) DEFAULT NULL,
  `inf_kes_aspirasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_aspirasi`
--

INSERT INTO `tb_layanan_aspirasi` (`id_aspirasi`, `id_registrasi`, `id_konselor`, `tgl_aspirasi`, `kegiatan_aspirasi`, `inf_kes_aspirasi`) VALUES
(16, 27, 1, '2020-07-07', 'aspirasi lain', 'aspirasi baru '),
(17, 18, 1, '2020-07-07', 'aspirasi lain', 'aspirasi baru '),
(18, 16, 1, '0000-00-00', 'aspirasi lain', 'aspirasi baru '),
(19, 28, 2, '0000-00-00', 'aspirasi lain', 'aspirasi baru '),
(20, 82, 1, '2020-09-20', 'aspirasi lain', 'aspirasi baru ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_home_visite`
--

CREATE TABLE `tb_layanan_home_visite` (
  `id_home_visite` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_home_visite` date DEFAULT NULL,
  `kegiatan_home_visite` varchar(100) DEFAULT NULL,
  `inf_kes_home_visite` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_home_visite`
--

INSERT INTO `tb_layanan_home_visite` (`id_home_visite`, `id_registrasi`, `id_konselor`, `tgl_home_visite`, `kegiatan_home_visite`, `inf_kes_home_visite`) VALUES
(16, 27, 1, '2020-07-06', 'home visite baru', 'rujuk'),
(17, 18, 1, '2020-07-06', 'home visite', 'rujuk'),
(18, 16, 1, '0000-00-00', 'home visite', 'rujuk'),
(19, 28, 1, '0000-00-00', 'home visite ss', 'rujuk2 ss'),
(20, 28, 2, '0000-00-00', 'home visite 2', 'rujuk 2'),
(21, 82, 1, '2020-09-20', 'home visite', 'rujuk2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_konseling_telp`
--

CREATE TABLE `tb_layanan_konseling_telp` (
  `id_konseling_telp` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_kons_telp` date DEFAULT NULL,
  `kegiatan_kons_telp` varchar(100) DEFAULT NULL,
  `inf_kes_kons_telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_konseling_telp`
--

INSERT INTO `tb_layanan_konseling_telp` (`id_konseling_telp`, `id_registrasi`, `id_konselor`, `tgl_kons_telp`, `kegiatan_kons_telp`, `inf_kes_kons_telp`) VALUES
(27, 27, 1, '2020-08-08', 'konseling ', 'Rujuk baru'),
(28, 35, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(29, 23, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(30, 22, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(31, 64, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(32, 63, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(33, 62, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(34, 65, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(35, 27, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(36, 18, 1, '2020-07-06', 'konseling ', 'Rujuk'),
(37, 16, 1, '0000-00-00', 'konseling ', 'Rujuk'),
(38, 16, 1, '0000-00-00', 'konseling ', 'Rujuk'),
(39, 28, 2, '0000-00-00', 'konseling ', 'Rujuk'),
(40, 29, 1, '0000-00-00', 'konseling ', 'Rujuk'),
(41, 28, 1, '0000-00-00', 'konseling', 'konseling'),
(42, 28, 2, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(43, 28, 1, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(44, 28, 1, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(45, 28, 1, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(46, 28, 2, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(47, 28, 1, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(48, 28, 1, '0000-00-00', 'konsultasi hukum lagi', 'konsultasi hukum terus'),
(49, 82, 1, '2020-01-10', 'konseling zzz', 'Rujukzz'),
(50, 82, 1, '2020-01-25', 'konsultasi hukum lagizz', 'konsultasi hukum teruszz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_konsultasi_hukum`
--

CREATE TABLE `tb_layanan_konsultasi_hukum` (
  `id_konsultasi_hukum` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_kons_hukum` date DEFAULT NULL,
  `kegiatan_kons_hukum` varchar(100) DEFAULT NULL,
  `inf_kes_kons_hukum` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_konsultasi_hukum`
--

INSERT INTO `tb_layanan_konsultasi_hukum` (`id_konsultasi_hukum`, `id_registrasi`, `id_konselor`, `tgl_kons_hukum`, `kegiatan_kons_hukum`, `inf_kes_kons_hukum`) VALUES
(19, 27, 1, '2020-08-02', 'konsultasi', 'rujuk baru'),
(20, 35, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(21, 23, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(22, 22, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(23, 64, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(24, 63, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(25, 62, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(26, 65, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(27, 27, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(28, 18, 1, '2020-07-16', 'konsultasi', 'rujuk baru'),
(29, 16, 1, '0000-00-00', 'konsultasi', 'rujuk baru'),
(30, 16, 1, '0000-00-00', 'konsultasi', 'rujuk baru'),
(31, 28, 0, '0000-00-00', '', ''),
(32, 29, 1, '0000-00-00', 'konsultasi', 'rujuk baru'),
(33, 28, 0, '0000-00-00', '', ''),
(34, 28, 0, '0000-00-00', '', ''),
(35, 82, 1, '2020-09-20', 'KONSULTASI KONSULTASI', 'rujuk baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_litigasi`
--

CREATE TABLE `tb_layanan_litigasi` (
  `id_litigasi` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_litigasi_awal` date DEFAULT NULL,
  `tgl_litigasi_akhir` date NOT NULL,
  `kegiatan_litigasi` varchar(100) DEFAULT NULL,
  `inf_kes_litigasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_litigasi`
--

INSERT INTO `tb_layanan_litigasi` (`id_litigasi`, `id_registrasi`, `id_konselor`, `tgl_litigasi_awal`, `tgl_litigasi_akhir`, `kegiatan_litigasi`, `inf_kes_litigasi`) VALUES
(18, 35, 1, '2020-07-07', '2020-07-08', 'litigasi', 'litigasi lagi'),
(19, 27, 2, '2020-07-07', '2020-07-08', 'litigasi', 'litigasi'),
(20, 27, 1, '2020-07-07', '2020-07-08', 'litigasi', 'litigasi'),
(21, 16, 1, '0000-00-00', '0000-00-00', 'litigasi', 'litigasi'),
(22, 28, 1, '0000-00-00', '0000-00-00', 'Litigasi 1', 'Litigasi 1'),
(23, 28, 2, '0000-00-00', '0000-00-00', 'Litigasi 2', 'Litigasi 2'),
(24, 82, 1, '2020-08-02', '2020-09-30', 'litigasi', 'litigasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_medis`
--

CREATE TABLE `tb_layanan_medis` (
  `id_medis` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_medis` date DEFAULT NULL,
  `kegiatan_medis` varchar(100) DEFAULT NULL,
  `inf_kes_medis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_medis`
--

INSERT INTO `tb_layanan_medis` (`id_medis`, `id_registrasi`, `id_konselor`, `tgl_medis`, `kegiatan_medis`, `inf_kes_medis`) VALUES
(15, 27, 1, '2020-07-07', 'medis baru', 'medis baru'),
(16, 18, 1, '2020-07-07', 'medis baru', 'medis baru'),
(17, 16, 1, '0000-00-00', 'medis baru', 'medis baru'),
(18, 28, 1, '0000-00-00', 'medis baru ', 'medis baru '),
(19, 82, 1, '2020-09-20', 'medis baru', 'medis baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_pasien`
--

CREATE TABLE `tb_layanan_pasien` (
  `id_layanan_pasien` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `id_layanan` int(5) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_pasien`
--

INSERT INTO `tb_layanan_pasien` (`id_layanan_pasien`, `id_registrasi`, `id_konselor`, `id_layanan`, `status`) VALUES
(93, 27, 1, 1, 0),
(94, 27, 1, 2, 0),
(95, 35, 1, 1, 0),
(96, 35, 1, 2, 0),
(97, 35, 1, 3, 0),
(98, 27, 2, 3, 0),
(99, 23, 1, 1, 0),
(100, 23, 1, 2, 0),
(101, 22, 1, 1, 0),
(102, 22, 1, 2, 0),
(103, 64, 1, 1, 0),
(104, 64, 1, 2, 0),
(105, 63, 1, 1, 0),
(106, 63, 1, 2, 0),
(107, 62, 1, 1, 0),
(108, 62, 1, 2, 0),
(109, 65, 1, 1, 0),
(110, 65, 1, 2, 0),
(111, 27, 1, 4, 0),
(112, 27, 1, 5, 0),
(113, 27, 1, 6, 0),
(114, 27, 1, 7, 0),
(115, 27, 1, 8, 0),
(116, 27, 1, 9, 0),
(117, 27, 1, 10, 0),
(118, 18, 1, 1, 0),
(119, 18, 1, 2, 0),
(120, 18, 1, 3, 0),
(121, 18, 1, 4, 0),
(122, 18, 1, 5, 0),
(123, 18, 1, 6, 0),
(124, 18, 1, 7, 0),
(125, 18, 1, 8, 0),
(126, 18, 1, 9, 0),
(127, 18, 1, 10, 0),
(128, 16, 1, 1, 0),
(129, 16, 1, 2, 0),
(130, 16, 1, 3, 0),
(131, 16, 1, 4, 0),
(132, 16, 1, 5, 0),
(133, 16, 1, 6, 0),
(134, 16, 1, 7, 0),
(135, 16, 1, 8, 0),
(136, 16, 1, 9, 0),
(137, 16, 1, 10, 0),
(138, 28, 2, 1, 0),
(139, 28, 2, 2, 0),
(140, 28, 2, 3, 0),
(141, 28, 2, 4, 0),
(142, 28, 2, 5, 0),
(143, 28, 2, 6, 0),
(144, 28, 2, 7, 0),
(145, 28, 2, 8, 0),
(146, 28, 2, 9, 0),
(147, 28, 2, 10, 0),
(148, 29, 1, 1, 1),
(149, 29, 1, 2, 1),
(150, 82, 1, 1, 0),
(151, 82, 1, 2, 0),
(152, 82, 1, 3, 0),
(153, 82, 1, 4, 0),
(154, 82, 1, 5, 0),
(155, 82, 1, 6, 0),
(156, 82, 1, 7, 0),
(157, 82, 1, 8, 0),
(158, 82, 1, 9, 0),
(159, 82, 1, 10, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_shelter`
--

CREATE TABLE `tb_layanan_shelter` (
  `id_shelter` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_shelter_awal` date DEFAULT NULL,
  `tgl_shelter_akhir` date NOT NULL,
  `kegiatan_shelter` varchar(100) DEFAULT NULL,
  `inf_kes_shelter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_shelter`
--

INSERT INTO `tb_layanan_shelter` (`id_shelter`, `id_registrasi`, `id_konselor`, `tgl_shelter_awal`, `tgl_shelter_akhir`, `kegiatan_shelter`, `inf_kes_shelter`) VALUES
(16, 27, 1, '2020-07-07', '2020-07-24', 'sheler baru', 'shelter baru'),
(17, 18, 1, '2020-07-07', '2020-07-24', 'sheler baru', 'shelter baru'),
(18, 16, 1, '0000-00-00', '0000-00-00', 'sheler baru', 'shelter baru'),
(19, 28, 2, '0000-00-00', '0000-00-00', 'sheler baru', 'shelter baru'),
(20, 82, 1, '2020-09-20', '1970-01-01', 'sheler baru', 'shelter baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_support_group`
--

CREATE TABLE `tb_layanan_support_group` (
  `id_support_group` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `tgl_support_group` date DEFAULT NULL,
  `kegiatan_support_group` varchar(100) DEFAULT NULL,
  `inf_kes_support_group` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_layanan_support_group`
--

INSERT INTO `tb_layanan_support_group` (`id_support_group`, `id_registrasi`, `id_konselor`, `tgl_support_group`, `kegiatan_support_group`, `inf_kes_support_group`) VALUES
(16, 27, 1, '2020-07-08', ' support group baru', 'support group baru'),
(17, 18, 1, '2020-07-08', ' support group baru', 'support group baru'),
(18, 16, 1, '0000-00-00', ' support group baru', 'support group baru'),
(19, 28, 2, '0000-00-00', ' support group baru', 'support group baru'),
(20, 82, 1, '2020-09-20', ' support group baru', 'support group baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penanganan_kasus`
--

CREATE TABLE `tb_penanganan_kasus` (
  `id_penanganan` int(5) NOT NULL,
  `id_registrasi` int(5) DEFAULT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `layanan_yg_dibutuhkan` varchar(100) DEFAULT NULL,
  `kebutuhan_lainnya` varchar(100) NOT NULL,
  `konseling_telp` varchar(200) DEFAULT NULL,
  `konseling_hukum` varchar(200) DEFAULT NULL,
  `home_visite` varchar(200) DEFAULT NULL,
  `pelayanan_medis` varchar(200) DEFAULT NULL,
  `support_group` varchar(200) DEFAULT NULL,
  `litigasi` varchar(200) DEFAULT NULL,
  `shelter` varchar(200) DEFAULT NULL,
  `layanan_lainnya` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_penanganan_kasus`
--

INSERT INTO `tb_penanganan_kasus` (`id_penanganan`, `id_registrasi`, `id_konselor`, `layanan_yg_dibutuhkan`, `kebutuhan_lainnya`, `konseling_telp`, `konseling_hukum`, `home_visite`, `pelayanan_medis`, `support_group`, `litigasi`, `shelter`, `layanan_lainnya`) VALUES
(16, 45, 1, '$penanganan_kasus', '', '$konseling_telp', '$konseling_hukum', '$home_visite', '$medis', '$support_group.', '$litigasi', '$shelter', '$layanan_lainnya'),
(17, 35, 1, '', '', ',', ',', ',', ',', ',', '', '', ','),
(18, 17, 1, 'Konseling,Home Visite,', '', 'Sabtu,13.Juni.2020,', ',', 'Sabtu,13.Juni.2020,', ',', ',', '', '', ','),
(19, 40, 1, 'Konseling,Konseling Hukum,Litigasi,', '', 'Sabtu,13.Juni.2020,Sabtu,13.Juni.2020,', 'Sabtu,13.Juni.2020,Sabtu,13.Juni.2020,', ',', ',', ',', 'Jumat,26.Juni.2020,Kamis,04.Juni.2020,', ',,', ','),
(20, 18, 1, 'Konseling Telp,Aspirasi Lainnya,', 'Sabtu,13.Juni.2020,', 'Sabtu,13.Juni.2020,', ',', ',', ',', ',', ',,', ',,', 'Sabtu,13.Juni.2020,'),
(21, 46, 1, 'Konseling Telp,Aspirasi Lainnya,', 'di kembalikan', 'Sabtu,13.Juni.2020,', ',', ',', ',', ',', ',,', ',,', 'Sabtu,13.Juni.2020,'),
(22, 27, 1, 'Konseling Telp,', '', 'Sabtu,13.Juni.2020,', ',', ',', ',', ',', ',,', ',,', ','),
(23, 41, 1, 'Konseling Telp,Home Visite,', '', 'Sabtu,13.Juni.2020,', ',', 'Sabtu,13.Juni.2020,', ',', ',', ',,', ',,', ','),
(24, 19, 1, '', '', '', ',', 'Sabtu,13.Juni.2020,', ',', ',', ',,', ',,', ','),
(25, 28, 1, 'Home Visite,', '', '', ',', 'Sabtu,13.Juni.2020,', ',', ',', ',,', ',,', ','),
(26, 62, 1, 'Home Visite,', '', ',', ',', 'Sabtu,13.Juni.2020,', ',', ',', ',,', ',,', ','),
(27, 55, 1, '-', '', ',', ',', ',', ',', ',', ',,', ',,', ','),
(28, 38, 1, 'Mediasi, Support Group, ', '', ' | ', ' | ', ' | ', ' | ', 'Sabtu,13.Juni.2020 | ', ' |  | ', ' |  | ', ' | '),
(29, 48, 1, 'Konseling Telp, ', '', 'Sabtu,13.Juni.2020 | Sabtu,13.Juni.2020 | ', ' | ', ' | ', ' | ', ' | ', ' |  | ', ' |  | ', ' | '),
(30, 34, 1, 'Konseling Telp, Home Visite, Medis, ', '', 'Minggu,14.Juni.2020 | ', ' | ', 'Sabtu,13.Juni.2020 | ', 'Jumat,19.Juni.2020 | Jumat,26.Juni.2020 | ', ' | ', ' |  | ', ' |  | ', ' | '),
(31, 49, 1, 'Konseling Telp,Home Visite,', '', 'Jumat,12.Juni.2020 | Sabtu,27.Juni.2020 | ', ' | ', 'Rabu,10.Juni.2020 | Minggu,28.Juni.2020 | ', ' | ', ' | ', ' |  | ', ' |  | ', ' | '),
(33, 53, 1, 'Konseling Telp,Home Visite,', '', 'Jumat.19-06-2020 | Jumat.05-06-2020 | ', ' | ', 'Kamis.18-06-2020 | Sabtu.20-06-2020 | ', ' | ', ' | ', ' |  | ', ' |  | ', ' | '),
(34, 54, 2, 'Konseling Telp,Home Visite,', '', 'Jumat.19-06-2020,Sabtu.27-06-2020,', ',', 'Senin.15-06-2020,Sabtu.20-06-2020,', ',', ',', ',,', ',,', ','),
(35, 20, 1, 'Konseling Telp,Home Visite,', '', 'Jumat 19 06 2020,Jumat 26 06 2020,', ',', 'Jumat 19 06 2020,Minggu 28 06 2020,', ',', ',', ',,', ',,', ','),
(36, 61, 1, 'Konseling Telp,Home Visite,', '', 'Senin.22-06-2020,Selasa.30-06-2020,', ',', 'Senin.22-06-2020,Senin.29-06-2020,', ',', ',', ',,', ',,', ',');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penutup`
--

CREATE TABLE `tb_penutup` (
  `id_penutup` int(5) NOT NULL,
  `id_registrasi` int(5) NOT NULL,
  `evaluator_konselor` text,
  `evaluasi_akhir` text,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_penutup`
--

INSERT INTO `tb_penutup` (`id_penutup`, `id_registrasi`, `evaluator_konselor`, `evaluasi_akhir`, `catatan`) VALUES
(13, 29, 'asd', 'asdf', 'sdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id_registrasi` int(5) NOT NULL,
  `id_konselor` int(5) DEFAULT NULL,
  `no_registrasi` varchar(20) DEFAULT NULL,
  `hari_tanggal` date DEFAULT NULL,
  `media` enum('Tatap Muka','Surat','Telepon','Outreach','Email') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id_registrasi`, `id_konselor`, `no_registrasi`, `hari_tanggal`, `media`) VALUES
(11, 1, '12', '1970-01-01', 'Tatap Muka'),
(12, 1, '13', '2020-02-04', 'Tatap Muka'),
(13, 1, '15', '2020-02-12', 'Tatap Muka'),
(14, 1, '16', '2020-02-19', 'Tatap Muka'),
(15, 1, '17', '2020-02-26', 'Tatap Muka'),
(16, 1, '14', '2020-03-04', 'Tatap Muka'),
(17, 1, '3', '2020-03-11', 'Surat'),
(18, 1, '11', '2020-03-25', 'Tatap Muka'),
(19, 1, '4', '2020-04-01', 'Outreach'),
(20, 1, '5', '2020-03-18', 'Tatap Muka'),
(21, 1, '6', '2020-04-09', 'Tatap Muka'),
(22, 2, '7', '2020-04-16', 'Telepon'),
(23, 2, '8', '2020-07-23', 'Telepon'),
(24, 2, '9', '2020-04-30', 'Telepon'),
(27, 1, '10', '2020-04-23', 'Outreach'),
(28, 1, '18', '2020-05-01', 'Tatap Muka'),
(29, 1, '19', '2020-05-04', 'Surat'),
(31, 1, '21', '2020-04-09', 'Surat'),
(32, 1, '22', '2020-04-11', 'Tatap Muka'),
(33, 1, '24', '2020-05-04', 'Tatap Muka'),
(34, 1, '26', '2020-05-08', 'Surat'),
(35, 1, '23', '2020-05-11', 'Tatap Muka'),
(36, 1, '25', '2020-05-14', 'Email'),
(38, 1, '31', '2020-05-17', 'Surat'),
(39, 1, '36', '2020-06-02', 'Tatap Muka'),
(40, 1, '40', '2020-05-31', 'Tatap Muka'),
(41, 1, '38', '2020-06-17', 'Surat'),
(42, 1, 'Jalil Bin Jakmar', '2020-06-20', 'Tatap Muka'),
(43, 1, '37', '2020-06-23', 'Tatap Muka'),
(44, 2, '39', '2020-06-26', 'Tatap Muka'),
(45, 1, '41', '2020-06-29', 'Tatap Muka'),
(46, 1, '42', '2020-07-01', 'Tatap Muka'),
(47, 1, '44', '2020-07-16', 'Tatap Muka'),
(48, 1, '43', '2020-07-20', 'Tatap Muka'),
(49, 1, '45', '2020-06-25', 'Surat'),
(50, 1, '46', '2020-07-15', 'Tatap Muka'),
(51, 2, '47', '2020-07-31', 'Tatap Muka'),
(53, 1, '48', '2020-09-28', 'Tatap Muka'),
(54, 1, '49', '2020-07-05', 'Tatap Muka'),
(55, 1, '50', '2020-07-10', 'Surat'),
(56, 1, '51', '2020-07-13', 'Tatap Muka'),
(57, 1, '52', '2020-07-16', 'Surat'),
(58, 1, '53', '2020-07-19', 'Outreach'),
(59, 1, '54', '2020-07-22', 'Outreach'),
(61, 1, '55', '2020-07-25', 'Tatap Muka'),
(62, 1, '56', '2020-07-28', 'Telepon'),
(63, 1, '57', '2020-07-31', 'Outreach'),
(64, 1, '58', '2020-08-01', 'Outreach'),
(66, 1, '59/P2TPAKK/2020', '2020-08-03', 'Surat'),
(67, 1, '60/P2TPAKK/2020', '2020-08-07', 'Surat'),
(68, 1, '1/P2TPAKK/2020', '2020-08-10', 'Tatap Muka'),
(69, 2, '2/P2TPAKK/2020', '2020-08-13', 'Surat'),
(70, 2, '3/P2TPAKK/2020', '2020-08-16', 'Surat'),
(71, 1, '4/P2TPAKK/2020', '2020-09-19', 'Surat'),
(72, 1, '5/P2TPAKK/2020', '2020-08-20', 'Surat'),
(73, 1, '6/P2TPAKK/2020', '2020-09-20', 'Surat'),
(74, 1, '7/P2TPAKK/2020', '2020-08-21', 'Surat'),
(75, 1, '8/P2TPAKK/2020', '2020-09-24', 'Surat'),
(76, 1, '9/P2TPAKK-RDU/IX/202', '2020-09-19', 'Surat'),
(77, 1, '10/P2TPAKK-RDU/IX/20', '2020-09-19', 'Telepon'),
(78, 2, '11/P2TPAKK-RDU/IX/20', '2020-09-19', 'Outreach'),
(79, 1, '12/P2TPAKK-RDU/IX/20', '2020-09-18', 'Outreach'),
(81, 1, '13/P2TPAKK-RDU/IX/20', '2020-09-19', 'Surat'),
(82, 1, '14/P2TPAKK-RDU/IX/20', '2020-09-19', 'Surat'),
(83, 1, '15/P2TPAKK-RDU/IX/20', '2020-09-20', 'Telepon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_triwulan`
--

CREATE TABLE `tb_triwulan` (
  `id_triwulan` int(5) NOT NULL,
  `kategori_bulan` varchar(20) DEFAULT NULL,
  `awal` date DEFAULT NULL,
  `akhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_triwulan`
--

INSERT INTO `tb_triwulan` (`id_triwulan`, `kategori_bulan`, `awal`, `akhir`) VALUES
(1, 'Triwulan 1', '2020-01-01', '2020-03-31'),
(2, 'Triwulan 2', '2020-04-01', '2020-06-30'),
(3, 'Triwulan 3', '2020-07-01', '2020-09-30'),
(4, 'Triwulan 4', '2020-10-01', '2020-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `level` enum('Admin','Konselor','User') DEFAULT NULL,
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
(9, 'Admin', 'admin,', 'admin@s.com', 'admin', '$2y$10$SXXGsLnE9/W1Ln24zw2ituMt57XKUSI1ot80XPz3V4wPmFt99dS0.', '2291d2ec3b3048d1a6f86c2c4591b7e0', '1'),
(10, 'Admin', 'teguh', 'teguh@s.com', 'teguh', '$2y$10$fbSRoYD7BosJ7EpBprx.h.STvqBFCbzLTmvVvGWj6QBCkF5Bwm2ji', 'b2f627fff19fda463cb386442eac2b3d', '1'),
(23, 'Konselor', 'bambang', 'user@gmal.com', 'konselor', '$2y$10$4o.MT26sw1/5A4SjTHJysOHLDxRiLWl.9uzrc8DlYFSYuPNfq/hGW', '4c5bde74a8f110656874902f07378009', '1'),
(26, 'User', 'user', 'user@gg.com', 'user', '$2y$10$2oeMuvTynh4acmpQ054l/elQr6aD9ucU9UnyXOaUPCT2zLloqSMcy', '9431c87f273e507e6040fcb07dcb4509', '1'),
(27, NULL, 'jalal', 'jalan@gmail.com', 'jalal', '$2y$10$Hn3wsCJjsOS9gqRXg.YwQevppqHDHsIVsgK.CrrG39prsqoMIwEAK', 'd707329bece455a462b58ce00d1194c9', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dampak`
--
ALTER TABLE `tb_dampak`
  ADD PRIMARY KEY (`id_dampak`),
  ADD KEY `tb_dampak_ibfk_1` (`id_registrasi`),
  ADD KEY `id_konselor` (`id_konselor`);

--
-- Indeks untuk tabel `tb_identitas_pelaku`
--
ALTER TABLE `tb_identitas_pelaku`
  ADD PRIMARY KEY (`id_pelaku`),
  ADD KEY `tb_identitas_pelaku_ibfk_1` (`id_registrasi`);

--
-- Indeks untuk tabel `tb_identitas_survivor`
--
ALTER TABLE `tb_identitas_survivor`
  ADD PRIMARY KEY (`id_survivor`),
  ADD UNIQUE KEY `id_registrasi` (`id_registrasi`);

--
-- Indeks untuk tabel `tb_informasi_kasus`
--
ALTER TABLE `tb_informasi_kasus`
  ADD PRIMARY KEY (`id_inf_kasus`),
  ADD KEY `tb_informasi_kasus_ibfk_1` (`id_registrasi`);

--
-- Indeks untuk tabel `tb_jenis_kasus`
--
ALTER TABLE `tb_jenis_kasus`
  ADD PRIMARY KEY (`id_jkas`);

--
-- Indeks untuk tabel `tb_jenis_kekerasan`
--
ALTER TABLE `tb_jenis_kekerasan`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indeks untuk tabel `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indeks untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `tb_kdrt`
--
ALTER TABLE `tb_kdrt`
  ADD PRIMARY KEY (`id_kdrt`);

--
-- Indeks untuk tabel `tb_kdrt_kta`
--
ALTER TABLE `tb_kdrt_kta`
  ADD PRIMARY KEY (`id_kdrt_kta`);

--
-- Indeks untuk tabel `tb_kdrt_kti`
--
ALTER TABLE `tb_kdrt_kti`
  ADD PRIMARY KEY (`id_kdrt_kti`);

--
-- Indeks untuk tabel `tb_kdrt_kts`
--
ALTER TABLE `tb_kdrt_kts`
  ADD PRIMARY KEY (`id_kdrt_kts`);

--
-- Indeks untuk tabel `tb_kdrt_lain`
--
ALTER TABLE `tb_kdrt_lain`
  ADD PRIMARY KEY (`id_kdrt_lain`);

--
-- Indeks untuk tabel `tb_ket_kasus`
--
ALTER TABLE `tb_ket_kasus`
  ADD PRIMARY KEY (`id_ket_kasus`),
  ADD KEY `tb_ket_kasus_ibfk_1` (`id_registrasi`);

--
-- Indeks untuk tabel `tb_konselor`
--
ALTER TABLE `tb_konselor`
  ADD PRIMARY KEY (`id_konselor`);

--
-- Indeks untuk tabel `tb_kta`
--
ALTER TABLE `tb_kta`
  ADD PRIMARY KEY (`id_kta`);

--
-- Indeks untuk tabel `tb_ktp`
--
ALTER TABLE `tb_ktp`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indeks untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `tb_layanan_aspirasi`
--
ALTER TABLE `tb_layanan_aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indeks untuk tabel `tb_layanan_home_visite`
--
ALTER TABLE `tb_layanan_home_visite`
  ADD PRIMARY KEY (`id_home_visite`);

--
-- Indeks untuk tabel `tb_layanan_konseling_telp`
--
ALTER TABLE `tb_layanan_konseling_telp`
  ADD PRIMARY KEY (`id_konseling_telp`);

--
-- Indeks untuk tabel `tb_layanan_konsultasi_hukum`
--
ALTER TABLE `tb_layanan_konsultasi_hukum`
  ADD PRIMARY KEY (`id_konsultasi_hukum`);

--
-- Indeks untuk tabel `tb_layanan_litigasi`
--
ALTER TABLE `tb_layanan_litigasi`
  ADD PRIMARY KEY (`id_litigasi`);

--
-- Indeks untuk tabel `tb_layanan_medis`
--
ALTER TABLE `tb_layanan_medis`
  ADD PRIMARY KEY (`id_medis`);

--
-- Indeks untuk tabel `tb_layanan_pasien`
--
ALTER TABLE `tb_layanan_pasien`
  ADD PRIMARY KEY (`id_layanan_pasien`);

--
-- Indeks untuk tabel `tb_layanan_shelter`
--
ALTER TABLE `tb_layanan_shelter`
  ADD PRIMARY KEY (`id_shelter`);

--
-- Indeks untuk tabel `tb_layanan_support_group`
--
ALTER TABLE `tb_layanan_support_group`
  ADD PRIMARY KEY (`id_support_group`);

--
-- Indeks untuk tabel `tb_penanganan_kasus`
--
ALTER TABLE `tb_penanganan_kasus`
  ADD PRIMARY KEY (`id_penanganan`),
  ADD KEY `tb_penanganan_kasus_ibfk_1` (`id_konselor`),
  ADD KEY `tb_penanganan_kasus_ibfk_2` (`id_registrasi`);

--
-- Indeks untuk tabel `tb_penutup`
--
ALTER TABLE `tb_penutup`
  ADD PRIMARY KEY (`id_penutup`);

--
-- Indeks untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `id_konselor` (`id_konselor`);

--
-- Indeks untuk tabel `tb_triwulan`
--
ALTER TABLE `tb_triwulan`
  ADD PRIMARY KEY (`id_triwulan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dampak`
--
ALTER TABLE `tb_dampak`
  MODIFY `id_dampak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_identitas_pelaku`
--
ALTER TABLE `tb_identitas_pelaku`
  MODIFY `id_pelaku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tb_identitas_survivor`
--
ALTER TABLE `tb_identitas_survivor`
  MODIFY `id_survivor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi_kasus`
--
ALTER TABLE `tb_informasi_kasus`
  MODIFY `id_inf_kasus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_kasus`
--
ALTER TABLE `tb_jenis_kasus`
  MODIFY `id_jkas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_kekerasan`
--
ALTER TABLE `tb_jenis_kekerasan`
  MODIFY `id_jk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id_kabupaten` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kdrt`
--
ALTER TABLE `tb_kdrt`
  MODIFY `id_kdrt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kdrt_kta`
--
ALTER TABLE `tb_kdrt_kta`
  MODIFY `id_kdrt_kta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `tb_kdrt_kti`
--
ALTER TABLE `tb_kdrt_kti`
  MODIFY `id_kdrt_kti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_kdrt_kts`
--
ALTER TABLE `tb_kdrt_kts`
  MODIFY `id_kdrt_kts` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_kdrt_lain`
--
ALTER TABLE `tb_kdrt_lain`
  MODIFY `id_kdrt_lain` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_ket_kasus`
--
ALTER TABLE `tb_ket_kasus`
  MODIFY `id_ket_kasus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_konselor`
--
ALTER TABLE `tb_konselor`
  MODIFY `id_konselor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kta`
--
ALTER TABLE `tb_kta`
  MODIFY `id_kta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_ktp`
--
ALTER TABLE `tb_ktp`
  MODIFY `id_ktp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_aspirasi`
--
ALTER TABLE `tb_layanan_aspirasi`
  MODIFY `id_aspirasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_home_visite`
--
ALTER TABLE `tb_layanan_home_visite`
  MODIFY `id_home_visite` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_konseling_telp`
--
ALTER TABLE `tb_layanan_konseling_telp`
  MODIFY `id_konseling_telp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_konsultasi_hukum`
--
ALTER TABLE `tb_layanan_konsultasi_hukum`
  MODIFY `id_konsultasi_hukum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_litigasi`
--
ALTER TABLE `tb_layanan_litigasi`
  MODIFY `id_litigasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_medis`
--
ALTER TABLE `tb_layanan_medis`
  MODIFY `id_medis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_pasien`
--
ALTER TABLE `tb_layanan_pasien`
  MODIFY `id_layanan_pasien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_shelter`
--
ALTER TABLE `tb_layanan_shelter`
  MODIFY `id_shelter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan_support_group`
--
ALTER TABLE `tb_layanan_support_group`
  MODIFY `id_support_group` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_penanganan_kasus`
--
ALTER TABLE `tb_penanganan_kasus`
  MODIFY `id_penanganan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_penutup`
--
ALTER TABLE `tb_penutup`
  MODIFY `id_penutup` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id_registrasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tb_triwulan`
--
ALTER TABLE `tb_triwulan`
  MODIFY `id_triwulan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_dampak`
--
ALTER TABLE `tb_dampak`
  ADD CONSTRAINT `tb_dampak_ibfk_1` FOREIGN KEY (`id_registrasi`) REFERENCES `tb_registrasi` (`id_registrasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_dampak_ibfk_2` FOREIGN KEY (`id_konselor`) REFERENCES `tb_konselor` (`id_konselor`);

--
-- Ketidakleluasaan untuk tabel `tb_identitas_pelaku`
--
ALTER TABLE `tb_identitas_pelaku`
  ADD CONSTRAINT `tb_identitas_pelaku_ibfk_1` FOREIGN KEY (`id_registrasi`) REFERENCES `tb_registrasi` (`id_registrasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_identitas_survivor`
--
ALTER TABLE `tb_identitas_survivor`
  ADD CONSTRAINT `tb_identitas_survivor_ibfk_1` FOREIGN KEY (`id_registrasi`) REFERENCES `tb_registrasi` (`id_registrasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_informasi_kasus`
--
ALTER TABLE `tb_informasi_kasus`
  ADD CONSTRAINT `tb_informasi_kasus_ibfk_1` FOREIGN KEY (`id_registrasi`) REFERENCES `tb_registrasi` (`id_registrasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ket_kasus`
--
ALTER TABLE `tb_ket_kasus`
  ADD CONSTRAINT `tb_ket_kasus_ibfk_1` FOREIGN KEY (`id_registrasi`) REFERENCES `tb_registrasi` (`id_registrasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penanganan_kasus`
--
ALTER TABLE `tb_penanganan_kasus`
  ADD CONSTRAINT `tb_penanganan_kasus_ibfk_1` FOREIGN KEY (`id_konselor`) REFERENCES `tb_konselor` (`id_konselor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penanganan_kasus_ibfk_2` FOREIGN KEY (`id_registrasi`) REFERENCES `tb_registrasi` (`id_registrasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD CONSTRAINT `tb_registrasi_ibfk_1` FOREIGN KEY (`id_konselor`) REFERENCES `tb_konselor` (`id_konselor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
