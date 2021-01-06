-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 06.33
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
-- Database: `db_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `kode_karyawan` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `kode_karyawan`, `nama_karyawan`, `no_telp`, `tgl_masuk`, `gaji`) VALUES
(3, '001', 'Aji santoso', '089690268586', '2021-01-05', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasukan`
--

CREATE TABLE `tb_pemasukan` (
  `id` int(11) NOT NULL,
  `kode_pemasukan` varchar(50) NOT NULL,
  `nama_pemasukan` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_pemasukan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemasukan`
--

INSERT INTO `tb_pemasukan` (`id`, `kode_pemasukan`, `nama_pemasukan`, `nominal`, `keterangan`, `tgl_pemasukan`) VALUES
(1, '001', 'Pendapatan', '10.000.000', 'dari awal januari sampay akhir desember 2020', '2021-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id` int(11) NOT NULL,
  `kode_pemesanan` varchar(50) NOT NULL,
  `nama_pemesanan` varchar(50) NOT NULL,
  `jam_pemesanan` varchar(50) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `dp` varchar(150) NOT NULL,
  `lapangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id`, `kode_pemesanan`, `nama_pemesanan`, `jam_pemesanan`, `tgl_pemesanan`, `no_telp`, `dp`, `lapangan`) VALUES
(1, '001', 'Abay', '14:00 - 15:00', '2021-01-14', '(+62)897-9023-6666', '50.000', 'Lapangan 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id` int(11) NOT NULL,
  `kode_pengeluaran` varchar(50) NOT NULL,
  `nama_pengeluaran` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_pengeluaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`id`, `kode_pengeluaran`, `nama_pengeluaran`, `nominal`, `keterangan`, `tgl_pengeluaran`) VALUES
(1, '001', 'Membayar Listrik', '5.000.000', 'Perbulan', '2021-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `email`, `level`) VALUES
(1, 'admin', '??????', '21232f297a57a5a743894a0e4a801fc3', '??????', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
