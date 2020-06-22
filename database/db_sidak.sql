-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 06.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sidak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nig` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `jk` enum('Laki Laki','Perempuan') NOT NULL,
  `tmpt_lahir` varchar(12) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(8) NOT NULL,
  `alamat_guru` text NOT NULL,
  `status_guru` enum('Lajang','Menikah','Duda','Janda') NOT NULL,
  `vertifikasi` varchar(28) NOT NULL,
  `golongan` varchar(28) NOT NULL,
  `no_telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nig`, `nik`, `nuptk`, `nm_guru`, `jk`, `tmpt_lahir`, `tgl_lahir`, `agama`, `alamat_guru`, `status_guru`, `vertifikasi`, `golongan`, `no_telp`) VALUES
(20093204, 2147483647, 2147483647, 'Bot1', 'Laki Laki', 'Magelang', '2008-06-05', 'Islam', 'Bogor', 'Lajang', '-', '-', '0829319371'),
(120093504, 2147483647, 2147483647, 'Bot2', 'Laki Laki', 'Klaten', '2020-04-01', 'Islam', 'Bogor', 'Lajang', '-', '-', '087823122121'),
(220090804, 2147483647, 2147483647, 'Bot 3', 'Laki Laki', 'Timor', '2020-04-02', 'Kristen', 'Bogor', 'Lajang', '-', '-', '087823122121'),
(320095504, 1817182713, 182313123, 'Bot 4', 'Laki Laki', 'Timor', '2020-04-09', 'Islam', 'Bogor', 'Lajang', '-', '-', '0829319371');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `kd_tt` varchar(20) NOT NULL,
  `nm_tt` varchar(50) NOT NULL,
  `nig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`kd_tt`, `nm_tt`, `nig`) VALUES
('2004809', 'Kepala Sekolah', 20093204),
('2015509', 'Wakil Kepala Sekolah', 120093504),
('2021709', 'Ketua Guru', 220090804),
('2032609', 'Guru', 320095504);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kd_jurusan` varchar(20) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL,
  `nig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kd_jurusan`, `nm_jurusan`, `nig`) VALUES
('20004', 'Manajemen Perkantoran 1', 20093204),
('20104', 'Manajemen Perkantoran 2', 120093504),
('20304', 'Rekayasa Perangkat Lunak ', 320095504),
('20404', 'Akuntansi', 420093204);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nika` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nm_karyawan` varchar(50) NOT NULL,
  `jk` enum('Laki Laki','Perempuan','','') NOT NULL,
  `tmpt_lahir` varchar(12) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(8) NOT NULL,
  `alamat_karyawan` text NOT NULL,
  `no_telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nika`, `nik`, `nm_karyawan`, `jk`, `tmpt_lahir`, `tgl_lahir`, `agama`, `alamat_karyawan`, `no_telp`) VALUES
(20545404, 2147483647, 'Bot ', 'Laki Laki', 'Bogor', '2020-04-10', 'Hindu', 'Bogor', '08293193212'),
(120555504, 2147483647, 'Bot 1', 'Laki Laki', 'Klaten', '2020-04-03', 'Hindu', 'Bogor', '08293193212'),
(220181804, 12121323, 'Bot 4', 'Laki Laki', 'Bogor', '2020-04-02', 'Islam', 'Bogor', '08293193212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kelas` varchar(20) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL,
  `nig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `nm_kelas`, `nig`) VALUES
('20201100', 'X', 20093204),
('20201811', 'XI', 120093504),
('20203222', 'X - 2', 220090804),
('20204033', 'X - 3', 20093204);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kd_mapel` varchar(20) NOT NULL,
  `nm_mapel` varchar(50) NOT NULL,
  `nig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `nm_mapel`, `nig`) VALUES
('2005009', 'IPA', 20093204),
('2015809', 'Penjas', 120093504),
('2020609', 'Basis Data', 220090804),
('2031209', 'Pemogranan Berorientasi Objek', 320095504),
('2042309', 'Agama', 420093204);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `jk` enum('Laki Laki','Perempuan','','') NOT NULL,
  `tmpt_lahir` varchar(12) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_siswa` text NOT NULL,
  `kd_jurusan` varchar(20) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `kd_kelas` varchar(20) NOT NULL,
  `asisten` varchar(28) NOT NULL,
  `no_telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nik`, `nm_siswa`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat_siswa`, `kd_jurusan`, `agama`, `nm_ayah`, `nm_ibu`, `kd_kelas`, `asisten`, `no_telp`) VALUES
(200912, 12121323, 'Raka Warena', 'Laki Laki', 'Bogor', '2020-04-02', 'Bogor', '20304', 'Islam', 'Putra', 'Lala', '20201100', '-', '087823122121'),
(1200936, 12121323, 'Fajar Budi', 'Laki Laki', 'Bogor', '2020-04-01', 'Bogor', '20404', 'Islam', 'Nara', 'Rara', '20201100', '-', '08293193212'),
(2200914, 930280129, 'Test 01', 'Laki Laki', 'Bogor', '2020-04-02', 'Bogor', '20004', 'Hindu', 'Lala', 'PUTRA', '20201100', 'Test', '087823122121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tendik`
--

CREATE TABLE `tb_tendik` (
  `nit` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nm_tendik` varchar(50) NOT NULL,
  `jk` enum('Laki Laki','Perempuan','','') NOT NULL,
  `tmpt_lahir` varchar(12) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(8) NOT NULL,
  `alamat_tendik` text NOT NULL,
  `status_tendik` enum('Lajang','Menikah','Duda','Janda') NOT NULL,
  `sertifikasi` varchar(28) NOT NULL,
  `golongan` varchar(28) NOT NULL,
  `asisten` varchar(28) NOT NULL,
  `no_telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tendik`
--

INSERT INTO `tb_tendik` (`nit`, `nik`, `nuptk`, `nm_tendik`, `jk`, `tmpt_lahir`, `tgl_lahir`, `agama`, `alamat_tendik`, `status_tendik`, `sertifikasi`, `golongan`, `asisten`, `no_telp`) VALUES
(10120, 2147483647, 2147483647, 'Randa', 'Laki Laki', 'Klaten', '2020-04-02', 'Kristen', 'Timur', 'Lajang', '-', '-', '-', '087823122121'),
(104062009, 2147483647, 2147483647, 'Syahira', 'Perempuan', 'Bogor', '2020-04-02', 'Islam', 'Cibinong', 'Lajang', '-', '-', '-', '08293193212'),
(204482009, 2147483647, 2147483647, 'LalaLO', 'Laki Laki', 'Bogor', '2020-04-02', 'Islam', 'Kamurang', 'Janda', 'Test 2', 'Test 1', 'Test 3', '087823122122');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nig`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`kd_tt`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nika`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_tendik`
--
ALTER TABLE `tb_tendik`
  ADD PRIMARY KEY (`nit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
