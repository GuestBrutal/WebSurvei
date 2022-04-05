-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2022 pada 21.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_publik`
--

CREATE TABLE `pelayanan_publik` (
  `sipp` int(1) NOT NULL,
  `pemutahiran` int(1) NOT NULL,
  `transparan` int(1) NOT NULL,
  `konsultasi` int(1) NOT NULL,
  `pengaduan` int(1) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


--
-- Struktur dari tabel `kebijakan_pelayanan`
--

CREATE TABLE `kebijakan_pelayanan` (
  `persyaratan` int(1) NOT NULL,
  `prosedur` int(1) NOT NULL,
  `tarif` int(1) NOT NULL,
  `waktu` int(1) NOT NULL,
  `antrian` int(1) NOT NULL,
  `perlibatan` int(1) NOT NULL,
  `publikasi` int(1) NOT NULL,
  `skm` int(1) NOT NULL,
  `tarifb` int(1) NOT NULL,
  `id_kebijakan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesionalisme_sdm`
--

CREATE TABLE `profesionalisme_sdm` (
  `waktu` int(1) NOT NULL,
  `kesigapan` int(1) NOT NULL,
  `sikap` int(1) NOT NULL,
  `parkir` int(1) NOT NULL,
  `tunggu` int(1) NOT NULL,
  `toilet` int(1) NOT NULL,
  `khusus` int(1) NOT NULL,
  `penunjang` int(1) NOT NULL,
  `id_profesionalisme` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


--
-- Struktur dari tabel `responden`
--

CREATE TABLE `responden` (
  `id_user` int(11) NOT NULL,
  `no_hp` int(14) NOT NULL,
  `waktu` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profesionalisme_sdm`
--
ALTER TABLE `kebijakan_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);


--
-- Indeks untuk tabel `profesionalisme_sdm`
--
ALTER TABLE `profesionalisme_sdm`
  ADD PRIMARY KEY (`id_profesionalisme`);


--
-- Indeks untuk tabel `kebijakan_pelayanan`
--
ALTER TABLE `kebijakan_pelayanan`
  ADD PRIMARY KEY (`id_kebijakan`);

--
-- Indeks untuk tabel `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kebijakan_pelayanan`
--
ALTER TABLE `kebijakan_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT untuk tabel `kebijakan_pelayanan`
--
ALTER TABLE `profesionalisme_sdm`
  MODIFY `id_profesionalisme` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT untuk tabel `kebijakan_pelayanan`
--
ALTER TABLE `kebijakan_pelayanan`
  MODIFY `id_kebijakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `responden`
--
ALTER TABLE `responden`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
