-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2023 pada 01.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1669549_simadu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'Admin SIMADU', 'admin@gmail.com', '$2y$10$tGcbNbyzddWvOE97iu2U7O85PBuSy2Yxv2p8ZGUdbpZ2Dv1hKeHIm'),
(2, 'Admin2', 'admin2@gmail.com', '$2y$10$zmiKAXleNissjhnhQP2lj.y0nzySPNyQPU6RXZdbFaAK7wEJ4QHcS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_teacher` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nip` bigint(18) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_teacher`, `nama`, `gender`, `tanggal_lahir`, `nip`, `email`, `password`, `id_kelas`) VALUES
(2, 'windu', 'Female', '1985-02-02', 987654321098765432, 'teacher2@example.com', '$2y$10$lcHvlYrHWdaxRt7RL5aUJOwKuG16jRCIaJmdulVQGgJPF3PY/rULq', 2),
(3, 'Teacher 3', 'Male', '1990-03-03', 543216789012345678, 'teacher3@example.com', 'password3', 3),
(4, 'Budi', 'Male', '1999-12-20', 123456789012345678, 'budi@gmail.com', '$2y$10$uOX5CI/LJI2ZBHI.ZNnVt.w9GkFgiIpne5g37iBtgnByo7CvsPTC6', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama`) VALUES
(1, 'Class A'),
(2, 'Class B'),
(3, 'Class C'),
(4, 'No Class');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_course` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_course`, `nama`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 'IPS', 'Senin', '08:00:00', '09:30:00'),
(2, 'IPA', 'Sabtu', '05:00:00', '07:30:00'),
(4, 'MATEMATIKA 2', 'Selasa', '20:10:00', '20:15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu`
--

CREATE TABLE `ortu` (
  `id_ortu` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nip` bigint(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `nama`, `gender`, `tanggal_lahir`, `nip`, `email`, `password`, `id_siswa`) VALUES
(1, 'ortu1', 'Female', '1980-01-01', 1234567890123456, 'ortu1@example.com', '$2y$10$tK7SrqrUKequ8eTBH0L1mulizhsaGcH1I6734po4iAaYZFj0ipELy', 3),
(2, 'Parent 2', 'Male', '1985-02-02', 9876543210987654, 'parent2@example.com', 'password2', 2),
(3, 'Parent 3', 'Female', '1990-03-03', 5432167890123456, 'parent3@example.com', 'password3', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `skor` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `nama`, `skor`) VALUES
(1, 'Bolos', 5),
(2, 'Tidak Ikut Pelajaran', 2),
(3, 'Tidak Mengerjakan Tugas', 2),
(4, 'Merokok', 20),
(5, 'Miras', 30),
(6, 'Berpacaran', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_detail`
--

CREATE TABLE `pelanggaran_detail` (
  `id_pelanggaran_detail` int(100) NOT NULL,
  `id_pelanggaran` int(20) DEFAULT NULL,
  `id_siswa` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggaran_detail`
--

INSERT INTO `pelanggaran_detail` (`id_pelanggaran_detail`, `id_pelanggaran`, `id_siswa`) VALUES
(1, 6, 1),
(2, 4, 1),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `akreditasi` varchar(255) DEFAULT NULL,
  `npsn` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `alamat`, `no_hp`, `akreditasi`, `npsn`) VALUES
(1, 'Sample School 1', '123 Main St', '123-456-7890', 'B', 12345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nis` int(4) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `gender`, `tanggal_lahir`, `nis`, `email`, `password`, `id_kelas`) VALUES
(1, 'Student 1', 'Male', '2005-01-01', 1234, 'student1@example.com', 'password1', 1),
(2, 'Student 2', 'Female', '2006-02-02', 5678, 'student2@example.com', 'password2', 2),
(3, 'Student 3', 'Male', '2007-03-03', 9101, 'student3@example.com', 'password3', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `id_class` (`id_kelas`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_course`);

--
-- Indeks untuk tabel `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `id_student` (`id_siswa`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indeks untuk tabel `pelanggaran_detail`
--
ALTER TABLE `pelanggaran_detail`
  ADD PRIMARY KEY (`id_pelanggaran_detail`),
  ADD KEY `id_student` (`id_siswa`),
  ADD KEY `id_violation` (`id_pelanggaran`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_class` (`id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran_detail`
--
ALTER TABLE `pelanggaran_detail`
  MODIFY `id_pelanggaran_detail` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `ortu`
--
ALTER TABLE `ortu`
  ADD CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `pelanggaran_detail`
--
ALTER TABLE `pelanggaran_detail`
  ADD CONSTRAINT `pelanggaran_detail_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `pelanggaran_detail_ibfk_2` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
