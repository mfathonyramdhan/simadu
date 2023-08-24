-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2023 pada 01.32
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
(1, 'Faize', 'admin@simadu.website', '$2y$10$tGcbNbyzddWvOE97iu2U7O85PBuSy2Yxv2p8ZGUdbpZ2Dv1hKeHIm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_teacher` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_teacher`, `nama`, `gender`, `jabatan`, `id_mapel`, `id_kelas`) VALUES
(2, 'windu', 'Perempuan', '', NULL, 2),
(3, 'Teacher 3', 'Laki Laki', '', NULL, 3),
(4, 'Budi', 'Laki Laki', '', NULL, 1);

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
(4, 'Belum ada Kelas');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapor`
--

CREATE TABLE `rapor` (
  `id_rapor` int(255) NOT NULL,
  `id_siswa` int(255) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `tapel` varchar(255) DEFAULT NULL,
  `spir_predikat` varchar(255) DEFAULT NULL,
  `spir_desk` text DEFAULT NULL,
  `sos_predikat` varchar(255) DEFAULT NULL,
  `sos_desk` text DEFAULT NULL,
  `p_qurdis_nilai` int(3) DEFAULT NULL,
  `p_qurdis_desk` text DEFAULT NULL,
  `k_qurdis_nilai` int(3) DEFAULT NULL,
  `k_qurdis_desk` text DEFAULT NULL,
  `p_aa_nilai` int(3) DEFAULT NULL,
  `p_aa_desk` text DEFAULT NULL,
  `k_aa_nilai` int(3) DEFAULT NULL,
  `k_aa_desk` text DEFAULT NULL,
  `p_fikih_nilai` int(3) DEFAULT NULL,
  `p_fikih_desk` text DEFAULT NULL,
  `k_fikih_nilai` int(3) DEFAULT NULL,
  `k_fikih_desk` text DEFAULT NULL,
  `p_ski_nilai` int(3) DEFAULT NULL,
  `p_ski_desk` text DEFAULT NULL,
  `k_ski_nilai` int(3) DEFAULT NULL,
  `k_ski_desk` text DEFAULT NULL,
  `p_pp_nilai` int(3) DEFAULT NULL,
  `p_pp_desk` text DEFAULT NULL,
  `k_pp_nilai` int(3) DEFAULT NULL,
  `k_pp_desk` text DEFAULT NULL,
  `p_bi_nilai` int(3) DEFAULT NULL,
  `p_bi_desk` text DEFAULT NULL,
  `k_bi_nilai` int(3) DEFAULT NULL,
  `k_bi_desk` text DEFAULT NULL,
  `p_mtk_nilai` int(3) DEFAULT NULL,
  `p_mtk_desk` text DEFAULT NULL,
  `k_mtk_nilai` int(3) DEFAULT NULL,
  `k_mtk_desk` text DEFAULT NULL,
  `p_ba_nilai` int(3) DEFAULT NULL,
  `p_ba_desk` text DEFAULT NULL,
  `k_ba_nilai` int(3) DEFAULT NULL,
  `k_ba_desk` text DEFAULT NULL,
  `p_si_nilai` int(3) DEFAULT NULL,
  `p_si_desk` text DEFAULT NULL,
  `k_si_nilai` int(3) DEFAULT NULL,
  `k_si_desk` text DEFAULT NULL,
  `p_big_nilai` int(3) DEFAULT NULL,
  `p_big_desk` text DEFAULT NULL,
  `k_big_nilai` int(3) DEFAULT NULL,
  `k_big_desk` text DEFAULT NULL,
  `p_sb_nilai` int(3) DEFAULT NULL,
  `p_sb_desk` text DEFAULT NULL,
  `k_sb_nilai` int(3) DEFAULT NULL,
  `k_sb_desk` text DEFAULT NULL,
  `p_pjok_nilai` int(3) DEFAULT NULL,
  `p_pjok_desk` text DEFAULT NULL,
  `k_pjok_nilai` int(3) DEFAULT NULL,
  `k_pjok_desk` text DEFAULT NULL,
  `p_pk_nilai` int(3) DEFAULT NULL,
  `p_pk_desk` text DEFAULT NULL,
  `k_pk_nilai` int(3) DEFAULT NULL,
  `k_pk_desk` text DEFAULT NULL,
  `p_aswaja_nilai` int(3) DEFAULT NULL,
  `p_aswaja_desk` text DEFAULT NULL,
  `k_aswaja_nilai` int(3) DEFAULT NULL,
  `k_aswaja_desk` text DEFAULT NULL,
  `p_inf_nilai` int(3) DEFAULT NULL,
  `p_inf_desk` text DEFAULT NULL,
  `k_inf_nilai` int(3) DEFAULT NULL,
  `k_inf_desk` text DEFAULT NULL,
  `p_geo_nilai` int(3) DEFAULT NULL,
  `p_geo_desk` text DEFAULT NULL,
  `k_geo_nilai` int(3) DEFAULT NULL,
  `k_geo_desk` text DEFAULT NULL,
  `p_sj_nilai` int(3) DEFAULT NULL,
  `p_sj_desk` text DEFAULT NULL,
  `k_sj_nilai` int(3) DEFAULT NULL,
  `k_sj_desk` text DEFAULT NULL,
  `p_sos_nilai` int(3) DEFAULT NULL,
  `p_sos_desk` text DEFAULT NULL,
  `k_sos_nilai` int(3) DEFAULT NULL,
  `k_sos_desk` text DEFAULT NULL,
  `p_eko_nilai` int(3) DEFAULT NULL,
  `p_eko_desk` text DEFAULT NULL,
  `k_eko_nilai` int(3) DEFAULT NULL,
  `k_eko_desk` text DEFAULT NULL,
  `eks1_nama` varchar(255) DEFAULT NULL,
  `eks1_nilai` int(3) DEFAULT NULL,
  `eks1_ket` varchar(255) DEFAULT NULL,
  `eks2_nama` varchar(255) DEFAULT NULL,
  `eks2_nilai` int(3) DEFAULT NULL,
  `eks2_ket` varchar(255) DEFAULT NULL,
  `pres1_jenis` varchar(255) DEFAULT NULL,
  `pres1_ket` varchar(255) DEFAULT NULL,
  `pres2_jenis` varchar(255) DEFAULT NULL,
  `pres2_ket` varchar(255) DEFAULT NULL,
  `pres3_jenis` varchar(255) DEFAULT NULL,
  `pres3_ket` varchar(255) DEFAULT NULL,
  `cat_guru` text DEFAULT NULL,
  `ket_naik_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'MA Darul Ulum', 'Jl. Cermee, Kapongan, Situbondo', '0336 05241788', 'B', 56465487);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nis` int(10) DEFAULT NULL,
  `nama_ortu` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `gender`, `tanggal_lahir`, `nis`, `nama_ortu`, `email`, `password`, `id_kelas`) VALUES
(1, 'ISMAIL ', 'Laki Laki', '2006-12-27', 64363667, 'Saman', 'ismail@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(2, 'DEWI SINTA NUR AISYAH', 'Perempuan', '2007-07-23', 78977512, 'Suliyanto', 'dewisintanuraisyah@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(3, 'SUNDIYONO', 'Laki Laki', '2006-07-25', 65066193, 'Budi Arju', 'sundiyono@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(4, 'RIYAN PURNAMA', 'Laki Laki', '2007-03-03', 2147483647, 'Sunarto', 'ryanpurnama@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(5, 'TAOFIK ALFARISI', 'Laki Laki', '2007-05-08', 78226923, 'Herman Readi', 'taofikalfarisi@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(6, 'ABDUL HAMID HAMDANI', 'Laki Laki', '2006-09-01', 61279808, 'M. Sufyan Hadi', 'abdulhamidhamdani@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(7, 'IBNUR ROZIQIN', 'Laki Laki', '2006-02-09', 67924694, 'Samsuri', 'ibnurroziqin@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(8, 'USWATUN HASANAH', 'Perempuan', '2004-04-05', 48248887, 'Sennawi', 'uswatunhasanah@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(9, 'YULI TRI SUSANA AMILIA', 'Perempuan', '2006-07-29', 66892952, 'Ahye', 'yulitrisusanaamilia@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(10, 'SITI FAIQOH', 'Perempuan', '2007-06-10', 76402960, 'Muzammil', 'sitifaiqoh@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(11, 'WILDA', 'Perempuan', '2006-06-04', 2147483647, 'Saryono', 'wilda@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(12, 'SITI FATIMA', 'Perempuan', '2006-05-21', 61363173, 'Durahman', 'sitifatima@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(13, 'VELISA TRISNAWATI', 'Perempuan', '2007-05-25', 71641512, 'Sutrisno', 'velisatrisnawati@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(14, 'AHMAT ISTIGHFARUR ROHMAN', 'Laki Laki', '2007-05-13', 72148063, 'Suwardi ', 'ahmatistighfarurrohman@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(15, 'DENDI WARSUKI', 'Laki Laki', '2007-05-04', 68576015, 'Sumarwan ', 'dendiwarsuki@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `uc_email` (`email`);

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
-- Indeks untuk tabel `rapor`
--
ALTER TABLE `rapor`
  ADD PRIMARY KEY (`id_rapor`),
  ADD KEY `id_siswa` (`id_siswa`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_class` (`id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT untuk tabel `rapor`
--
ALTER TABLE `rapor`
  MODIFY `id_rapor` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `pelanggaran_detail`
--
ALTER TABLE `pelanggaran_detail`
  ADD CONSTRAINT `pelanggaran_detail_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE,
  ADD CONSTRAINT `pelanggaran_detail_ibfk_2` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rapor`
--
ALTER TABLE `rapor`
  ADD CONSTRAINT `rapor_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
