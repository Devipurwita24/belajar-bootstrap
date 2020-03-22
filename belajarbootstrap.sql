-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2020 pada 07.05
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarbootstrap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `asal_daerah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `nama`, `daerah`, `asal_daerah`) VALUES
(99, 'devi', 'malang', 'sidoarjo'),
(9899, 'devi', 'malang', 'sidoarjo'),
(9975, 'devi', 'malang', 'sidoarjo'),
(11111, 'devi', 'malang', 'sidoarjo'),
(12345, 'jdbfhd', 'malang', 'sidoarjo'),
(99758, 'hmm', 'malang', 'sidoarjo'),
(11111111, 'fff', 'malang', 'sidoarjo'),
(56555656, 'jdbfhd', 'malang', 'sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('devi', 'devi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peternakanpertanian`
--

CREATE TABLE `peternakanpertanian` (
  `daerah` varchar(50) NOT NULL,
  `perkebunan` int(50) NOT NULL,
  `pertanian` int(50) NOT NULL,
  `peternakan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `peternakanpertanian`
--
ALTER TABLE `peternakanpertanian`
  ADD PRIMARY KEY (`pertanian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
