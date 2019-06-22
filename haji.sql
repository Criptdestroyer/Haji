-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 21 Jun 2019 pada 17.23
-- Versi Server: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `judul`, `deskripsi`, `isi`, `author`, `create_at`, `photo`) VALUES
(5, 'hehes', 'akus', '<p>aku aku akus</p>', 'dsfdsfsds', '2019-06-21 06:52:30', '../../upload_file/Screenshot from 2019-05-27 05-52-01.png'),
(6, 'haji', 'haji kuy', '<p>kuy haji</p>', 'emir', '2019-06-21 06:54:22', '../../upload_file/poster_utama_v4_11.jpg'),
(7, 'Umroh', 'umroh kuy', '<p>kuy umroh</p>', 'emir', '2019-06-21 06:54:52', '../../upload_file/Opreg.jpg'),
(8, 'Main lah', 'Main kuy', '<p>kuy main</p>', 'hehe', '2019-06-21 06:55:58', '../../upload_file/Screenshot from 2019-05-08 14-24-09.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usia` tinyint(4) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nope` varchar(20) NOT NULL,
  `noktp` varchar(50) NOT NULL,
  `nopaspor` varchar(50) NOT NULL,
  `size_baju` varchar(50) NOT NULL,
  `tipe_haji` varchar(50) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `usia`, `jk`, `alamat`, `nope`, `noktp`, `nopaspor`, `size_baju`, `tipe_haji`, `photo`, `create_at`) VALUES
(23, 'Ahmad Emir Alfatah', 'ahmademir1201@gmail.com', 19, 'Laki-Laki', 'Palembang Kalidoni', '34534634634', '2132131232', '2131231231', 'L', 'Haji Plus', '../../upload_file/IMG_5432.jpg', '2019-06-21 07:31:27'),
(24, 'jessica', 'emirqeren@gmail.com', 19, 'Perempuan', 'hehe', 'hehe', 'hehe', 'hehe', 'L', 'Haji Reguler', '../../upload_file/hehe.png', '2019-06-21 07:33:22'),
(25, 'aku', 'aku', 19, 'Laki-Laki', 'aku', 'aku', 'aku', 'aku', 'XL', 'Haji Reguler', '../../upload_file/bujang25-100dpi-min.png', '2019-06-21 07:51:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `password`) VALUES
('admin', 'Jessica', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
