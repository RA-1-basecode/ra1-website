-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2022 pada 17.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ra1_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blockquote` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pj_mk` varchar(100) NOT NULL,
  `link_github` varchar(100) NOT NULL,
  `link_facebook` varchar(100) NOT NULL,
  `link_instagram` varchar(100) NOT NULL,
  `link_twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `nim`, `password`, `blockquote`, `photo`, `pj_mk`, `link_github`, `link_facebook`, `link_instagram`, `link_twitter`) VALUES
(49, 'Ferlan Ferlani', '220767', '220767', '<p>I&#39;m a technology lover getting stronger to keep learning about technology. Technology is a part of life.</p>\r\n', '6343c0bc395a1.jpg', 'Algoritma&amp;Pemerograman', 'https://github.com/uniquecoded', 'https://web.facebook.com/ferlan.ferlani.id', 'https://www.instagram.com/ferlanferlani/', 'https://twitter.com/FerlanFerlani'),
(50, 'Muhammad Ghifar', '221050', '221050', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c1b75b21e.png', 'Sistem DIgital', '', '', '', ''),
(51, 'Ella Anggraini', '221680', '221680', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c1c987166.png', 'Pendidikan Agama', '', '', '', ''),
(52, 'Abdul Rauf', '220355', '220355', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c1d91c5f0.png', 'Bahasa Indonesia', '', '', '', ''),
(53, 'Muhammad Alfarizi', '221495', '221495', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c1e994797.png', 'Organisasi dan Arsitektur Komputer', '', '', '', ''),
(54, 'Salu Syadidatu Zahra', '220667', '220667', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c1fe037ee.png', 'Bahasa Inggris', '', '', '', ''),
(55, 'Andre Saputra', '221694', '221694', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c20b8f93f.png', 'Microcontroller I', '', '', '', ''),
(56, 'Tahyat Nurhakiki', '220626', '220626', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c21b4edb3.png', 'Bahasa Indonesia', '', '', '', ''),
(57, 'Nurul Oktaviani', '221796', '221796', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c22b9526e.png', 'Pemerograman Dasar', '', '', '', ''),
(58, 'Yogi Cahyo Putro', '220140', '220140', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c23a638dc.png', '-', '', '', '', ''),
(59, 'Ali Hilmi Hermawan', '220400', '220400', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c24850b49.png', '-', '', '', '', ''),
(60, 'Melawati', '220984', '220984', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2586e78b.png', '-', '', '', '', ''),
(61, 'Indra Maulana', '220944', '220944', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2663588e.png', '-', '', '', '', ''),
(62, 'Humaedi', '220728', '220728', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c274088fd.png', '-', '', '', '', ''),
(63, 'Syahdan Mohmmad Syahid', '221054', '221054', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2838123b.png', '-', '', '', '', ''),
(64, 'Ahmad Rifqi Hidayat Millah', '221488', '221488', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c29308c02.png', '-', '', '', '', ''),
(65, 'Zulmi', '221672', '221672', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2a16c12a.png', '-', '', '', '', ''),
(66, 'Desi Hafiturohmah', '220232', '220232', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2b01f9e2.png', '-', '', '', '', ''),
(67, 'Nur Fikri Abdurrohim', '221306', '221306', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2be5027e.png', '-', '', '', '', ''),
(68, 'Aditya Putra Wijaya', '221678', '221678', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2cf04378.png', '-', '', '', '', ''),
(69, 'I Wayan Virga Arinata', '221506', '221506', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2dc74f42.png', '-', '', '', '', ''),
(70, 'Riyan Fery', '220914', '220914', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2ed2615c.png', '-', '', '', '', ''),
(71, 'Muhammad Rifai', '220619', '220619', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c2f9cb4d1.png', '-', '', '', '', ''),
(72, 'Tubagus Abdul Raysid Sidik', '220393', '220393', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c306f2caa.png', '-', '', '', '', ''),
(73, 'Nurul Falah', '220206', '220206', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c3199f8e5.png', '-', '', '', '', ''),
(74, 'Usman Agustian', '221321', '221321', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c32826e8b.png', '-', '', '', '', ''),
(75, 'Ratih Hermansyah', '220525', '220525', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c33be1b56.png', '-', '', '', '', ''),
(76, 'Cahyati karimah Apriliani', '220151', '220151', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi Teknik Informatika.</div>\r\n', '6343c3487fbd6.png', '-', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `algo`
--

CREATE TABLE `algo` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(50) NOT NULL,
  `dua` varchar(50) NOT NULL,
  `tiga` varchar(50) NOT NULL,
  `empat` varchar(50) NOT NULL,
  `lima` varchar(50) NOT NULL,
  `enam` varchar(50) NOT NULL,
  `tujuh` varchar(50) NOT NULL,
  `delapan` varchar(50) NOT NULL,
  `sembilan` varchar(50) NOT NULL,
  `sepuluh` varchar(50) NOT NULL,
  `sebelas` varchar(50) NOT NULL,
  `duabelas` varchar(5050) NOT NULL,
  `tigabelas` varchar(50) NOT NULL,
  `empatbelas` varchar(50) NOT NULL,
  `limabelas` varchar(50) NOT NULL,
  `enambelas` varchar(50) NOT NULL,
  `tujuhbelas` varchar(50) NOT NULL,
  `delapanbelas` varchar(50) NOT NULL,
  `sembilanbelas` varchar(50) NOT NULL,
  `duapuluh` varchar(50) NOT NULL,
  `duapuluhsatu` varchar(50) NOT NULL,
  `duapuluhdua` varchar(50) NOT NULL,
  `duapuluhtiga` varchar(50) NOT NULL,
  `duapuluhempat` varchar(50) NOT NULL,
  `duapuluhlima` varchar(50) NOT NULL,
  `duapuluhenam` varchar(50) NOT NULL,
  `duapuluhtujuh` varchar(50) NOT NULL,
  `duapuluhdelapan` varchar(50) NOT NULL,
  `duapuluhsembilan` varchar(50) NOT NULL,
  `tigapuluh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `algo`
--

INSERT INTO `algo` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(1, 'Algoritma&Pemerograman', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifai', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `blockquote` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `author`, `judul`, `kategori`, `waktu`, `gambar`, `konten`, `blockquote`) VALUES
(28, 'Ferlan Ferlani', 'Tugas Pendidikan Agama', 'Tugas', 'Minggu, 9 Oktober 2022', '6342d0bb61886.png', '<div>Ini adalah tugaspendidikan agama menganalisa dan mendeskripsikan pendapat tentang film lam alif lalu cari korelasi atau hubunganya dengan materi agama islam, keimanan dan ketakwaan dll.<br><br>ini tugas individu di jadikan dalam bentuk file pdf<br><br>terimakasi.</div>', '<div>Hallo saya adalah mahasiswa Universitas Primagraha program studi teknik informatika.</div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_ind`
--

CREATE TABLE `b_ind` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_ind`
--

INSERT INTO `b_ind` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(2, 'Bahasa Indonesia', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_ing`
--

CREATE TABLE `b_ing` (
  `id` int(100) NOT NULL,
  `mk` varchar(30) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_ing`
--

INSERT INTO `b_ing` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(3, 'Bahasa Inggris', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `galeri` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `galeri`, `subject`) VALUES
(3, '6343d776609ad.png', 'Logo kelas Ra 1 Teknik informatika UPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klp_mk`
--

CREATE TABLE `klp_mk` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(50) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klp_mk`
--

INSERT INTO `klp_mk` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(1, 'Algoritma&Pemerograman', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(2, 'Microcontroller I', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(3, 'Pemerograman Dasar', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(4, 'Sistem Digital', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(5, 'Organisasi dan Arsitektur Komputer', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(6, 'Pendidikan Agama', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(7, 'Pendidikan Pancasila', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(8, 'Bahasa Indonesia', 'Ferlan Ferlani', 'Abdul rauf', 'Yogi cahyo putro', 'Ali hilmi hernawan', 'Andre saputra', ' Melawati', 'Cahyati karimah Apriliani', 'Indra maulana', 'Muhammad Alfarizi', 'Salu Syadidatu Zahra', 'Humaedi', ' Syahdan muhammad syahid', 'Ahmad Rifqi Hidayat Millah', 'Tahyat nur hakiki', 'Zulmi', 'Muhammad Ghifar', 'Desi Hafiturohmah', 'Nurul Oktavia', 'Nur Fikri Abdurrohim', 'Ratih Hermansyah', 'Aditya Putra Wijaya', ' I Wayan Virga Arinata', 'Riyan Fery', 'Muhamad Rifai', 'Ella Anggraini', 'Tb Abdul Rasyid Sidik', 'Nurul falah', '', '', ''),
(9, 'Bahasa Inggris', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `hari` varchar(100) NOT NULL,
  `menit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `subject`, `email`, `text`, `hari`, `menit`) VALUES
(7, 'Ferlan Ferlani', 'Hallo Geng', 'ferlanferlani.id@gmail.com', 'Hallo geng gwe lagi test message dari halaman kontak', '\n                        Monday October 2022                        ', '\r\n                        19:43:27                        '),
(8, 'Ir. Jokowi Dodo', 'Hallo Geng', 'irjokowidodo@gmail.com', 'Hallo geng, gen hallo semuah', '\r\n                        Monday October 2022                        ', '\r\n                        19:43:50                        '),
(9, 'Elan', 'Assalamualaikum', 'elan@gmail.com', 'Selamat malam geng apakabar semuah?\r\nTerkadang!', '\r\n                        Monday October 2022                        ', '\r\n                        19:45:43                        ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mikro`
--

CREATE TABLE `mikro` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mikro`
--

INSERT INTO `mikro` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(4, 'Microcontroller I', 'Salu \r\n\r\nsyadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya \r\n\r\nputra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo \r\n\r\nputro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan \r\n\r\nMuhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur \r\n\r\nfalah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi \r\n\r\n', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad \r\n\r\nAlfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `org_ars_kom`
--

CREATE TABLE `org_ars_kom` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `org_ars_kom`
--

INSERT INTO `org_ars_kom` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(5, 'Organisasi dan Arsitektur Komputer', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pai`
--

CREATE TABLE `pai` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pai`
--

INSERT INTO `pai` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(6, 'Pendidikan Agama', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panca`
--

CREATE TABLE `panca` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panca`
--

INSERT INTO `panca` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(7, '', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pem_dsr`
--

CREATE TABLE `pem_dsr` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pem_dsr`
--

INSERT INTO `pem_dsr` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(8, 'Pemerograman Dasar', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pj_mk`
--

CREATE TABLE `pj_mk` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `pj_mk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pj_mk`
--

INSERT INTO `pj_mk` (`id`, `nama_lengkap`, `nim`, `pj_mk`) VALUES
(7, 'Ferlan Ferlani', '220767', 'Algoritma&amp;Pemerograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `teknologi` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `foto_project` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pertemuan` varchar(100) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `author`, `matakuliah`, `waktu`, `teknologi`, `semester`, `foto_project`, `subject`, `pertemuan`, `konten`) VALUES
(3, 'Ferlan Ferlani', 'Microcontroller I', 'Kamis, 9 September 2022', '-', '1', '6343555b88679.jpeg', 'Merakit Arduino', '3', '<p>Merakit perngkat/komponen arduino mega untuk membuat palang pintu otomatis.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simdig`
--

CREATE TABLE `simdig` (
  `id` int(11) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `satu` varchar(100) NOT NULL,
  `dua` varchar(100) NOT NULL,
  `tiga` varchar(100) NOT NULL,
  `empat` varchar(100) NOT NULL,
  `lima` varchar(100) NOT NULL,
  `enam` varchar(100) NOT NULL,
  `tujuh` varchar(100) NOT NULL,
  `delapan` varchar(100) NOT NULL,
  `sembilan` varchar(100) NOT NULL,
  `sepuluh` varchar(100) NOT NULL,
  `sebelas` varchar(100) NOT NULL,
  `duabelas` varchar(100) NOT NULL,
  `tigabelas` varchar(100) NOT NULL,
  `empatbelas` varchar(100) NOT NULL,
  `limabelas` varchar(100) NOT NULL,
  `enambelas` varchar(100) NOT NULL,
  `tujuhbelas` varchar(100) NOT NULL,
  `delapanbelas` varchar(100) NOT NULL,
  `sembilanbelas` varchar(100) NOT NULL,
  `duapuluh` varchar(100) NOT NULL,
  `duapuluhsatu` varchar(100) NOT NULL,
  `duapuluhdua` varchar(100) NOT NULL,
  `duapuluhtiga` varchar(100) NOT NULL,
  `duapuluhempat` varchar(100) NOT NULL,
  `duapuluhlima` varchar(100) NOT NULL,
  `duapuluhenam` varchar(100) NOT NULL,
  `duapuluhtujuh` varchar(100) NOT NULL,
  `duapuluhdelapan` varchar(100) NOT NULL,
  `duapuluhsembilan` varchar(100) NOT NULL,
  `tigapuluh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `simdig`
--

INSERT INTO `simdig` (`id`, `mk`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duapuluhsatu`, `duapuluhdua`, `duapuluhtiga`, `duapuluhempat`, `duapuluhlima`, `duapuluhenam`, `duapuluhtujuh`, `duapuluhdelapan`, `duapuluhsembilan`, `tigapuluh`) VALUES
(9, 'Sistem Digital', 'Salu syadidatu zahra', 'Ella anggraini', 'Abdul rauf', ' Aditya putra Wijaya', 'Cahyati karima Apriliani', 'Yogi cahyo putro', 'Desi hafiturohmah', 'Ratih hermansyah', 'Zulmi', 'Tahyat Nur hakiki', 'Melawati', 'Riyan fery', 'Syahdan Muhammad syahid', 'Ahmad Rifqii hidayat millah', 'Nur falah', 'Usman agustin', 'Tb abdul Rasyid sidik', 'Humaedi ', 'Indra maulana', 'Ali hilmi ', 'Muhammad Rifa', 'Muhammad ghifar', 'Nurul oktaviani', 'Andre saputra ', 'Ferlan Ferlani', 'I wayan virga ariantara', 'Muhammad Alfarizi', 'Nur Fikri Abdurrohim', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `algo`
--
ALTER TABLE `algo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b_ind`
--
ALTER TABLE `b_ind`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b_ing`
--
ALTER TABLE `b_ing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `klp_mk`
--
ALTER TABLE `klp_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mikro`
--
ALTER TABLE `mikro`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `org_ars_kom`
--
ALTER TABLE `org_ars_kom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pai`
--
ALTER TABLE `pai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panca`
--
ALTER TABLE `panca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pem_dsr`
--
ALTER TABLE `pem_dsr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pj_mk`
--
ALTER TABLE `pj_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `simdig`
--
ALTER TABLE `simdig`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `algo`
--
ALTER TABLE `algo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `b_ind`
--
ALTER TABLE `b_ind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `b_ing`
--
ALTER TABLE `b_ing`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `klp_mk`
--
ALTER TABLE `klp_mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mikro`
--
ALTER TABLE `mikro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `org_ars_kom`
--
ALTER TABLE `org_ars_kom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pai`
--
ALTER TABLE `pai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `panca`
--
ALTER TABLE `panca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pem_dsr`
--
ALTER TABLE `pem_dsr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pj_mk`
--
ALTER TABLE `pj_mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `simdig`
--
ALTER TABLE `simdig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
