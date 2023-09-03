-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2023 pada 12.11
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
  `id_guru` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nip`, `email`, `password`, `gender`, `jabatan`, `id_kelas`) VALUES
(1, 'Moh Ramli, S.Pd', NULL, 'moh.ramli@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Kepala Sekolah', NULL),
(2, 'Ach Rifa’i, S.Pd', '43512312345213', 'ach.rifai@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', 1),
(3, 'Adi Sucipto, S.Pd', NULL, 'adi.sucipto@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', 4),
(4, 'Candra Adi Wijaya, S.Pd', NULL, 'candra.adi@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', NULL),
(5, 'Imam Bukhori Muslim, S.Pd', NULL, 'imam.bukhori@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', NULL),
(6, 'Joko Bambang Tisno, S.Pd', NULL, 'joko.bambang@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru & Waka Sarana Prasarana', NULL),
(7, 'Mohamad Huzik Udik, S.Pd', NULL, 'mohamad.huzik@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', NULL),
(8, 'Nur Halimatus Sa’diyah, S.Sy', NULL, 'nur.halimatus@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru & Waka kurikulum', 4),
(9, 'Imroatus Sholihah, S.Pd', NULL, 'imroatus.sholihah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru & Waka Kesiswaan', NULL),
(11, 'Ummi Khairiyah, S.Pd', NULL, 'ummi.khairiyah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Bendahara Madrasah & Guru & Kepala Perpustakaan', NULL),
(12, 'Nurul Qomariyah, S.Pd', NULL, 'nurul.qomariyah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru & Waka Kehumasan', NULL),
(13, 'Nur Hasanah, S.Pd', NULL, 'nur.hasanah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(14, 'Sri Dewi Candrawati, S.Pd', NULL, 'sri.dewi.candrawati@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(15, 'Uswatun Hasanah, S.Ag', NULL, 'uswatun.hasanah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(16, 'Siti Aisyah, S.Pd', NULL, 'siti.aisyah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(17, 'Diana Fatimatus Zahro, S.Pd', NULL, 'diana.fatimatus@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(18, 'Indah Yuliatin, S.Pd', NULL, 'indah.yuliatin@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(19, 'Evi Dwi Andriyani, S.Pd', NULL, 'evi.dwi@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL),
(26, 'Kustiani, S.M', NULL, 'kustiani.sm@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Kepala Tata Usaha', NULL),
(28, 'Sri Dewi Candra Wati, S.Pd', NULL, 'sri.dewi.candra@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadpel`
--

CREATE TABLE `jadpel` (
  `jadpel_id` int(11) NOT NULL,
  `jadpel_hari` varchar(255) NOT NULL,
  `jadpel_jk1` int(11) DEFAULT NULL,
  `jadpel_jk2` int(11) DEFAULT NULL,
  `jadpel_jk3` int(11) DEFAULT NULL,
  `jadpel_jk4` int(11) DEFAULT NULL,
  `jadpel_jk5` int(11) DEFAULT NULL,
  `jadpel_jk6` int(11) DEFAULT NULL,
  `jadpel_jk7` int(11) DEFAULT NULL,
  `jadpel_jk8` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadpel`
--

INSERT INTO `jadpel` (`jadpel_id`, `jadpel_hari`, `jadpel_jk1`, `jadpel_jk2`, `jadpel_jk3`, `jadpel_jk4`, `jadpel_jk5`, `jadpel_jk6`, `jadpel_jk7`, `jadpel_jk8`, `id_kelas`) VALUES
(3, 'Selasa', 19, 18, 17, 16, 15, 10, 11, 13, 2);

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
(1, 'Kelas 1'),
(2, 'Kelas 2'),
(3, 'Kelas 3'),
(4, 'Bukan wali kelas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_guru` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama`, `id_guru`) VALUES
(1, 'TIK', 9),
(2, 'Aqidah', 8),
(3, 'MTK', 11),
(4, 'PKN', 26),
(5, 'Bahasa Indonesia', 13),
(6, 'SKI', 12),
(7, 'Qurdist', 15),
(8, 'Penjas', 19),
(9, 'Seni Budaya', 19),
(10, 'Sejarah', NULL),
(11, 'Sosiologi', NULL),
(12, 'Fiqih', NULL),
(13, 'Ekonomi', NULL),
(14, 'Bahasa Arab', NULL),
(15, 'Sejarah Indonesia', NULL),
(16, 'Geografi', NULL),
(17, 'Aswaja', NULL),
(18, 'Prakarya', NULL),
(19, 'Bahasa Inggris', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapor`
--

CREATE TABLE `rapor` (
  `id_rapor` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `sent` int(1) DEFAULT 0,
  `semester` int(1) DEFAULT NULL,
  `tapel` varchar(255) DEFAULT NULL,
  `spir_predikat` varchar(255) DEFAULT NULL,
  `spir_desk` text DEFAULT NULL,
  `sos_predikat` varchar(255) DEFAULT NULL,
  `sos_desk` text DEFAULT NULL,
  `p_qurdis_nilai` int(3) DEFAULT NULL,
  `p_qurdis_desk` text DEFAULT NULL,
  `p_aa_nilai` int(3) DEFAULT NULL,
  `p_aa_desk` text DEFAULT NULL,
  `p_fikih_nilai` int(3) DEFAULT NULL,
  `p_fikih_desk` text DEFAULT NULL,
  `p_ski_nilai` int(3) DEFAULT NULL,
  `p_ski_desk` text DEFAULT NULL,
  `p_pp_nilai` int(3) DEFAULT NULL,
  `p_pp_desk` text DEFAULT NULL,
  `p_bi_nilai` int(3) DEFAULT NULL,
  `p_bi_desk` text DEFAULT NULL,
  `p_mtk_nilai` int(3) DEFAULT NULL,
  `p_mtk_desk` text DEFAULT NULL,
  `p_ba_nilai` int(3) DEFAULT NULL,
  `p_ba_desk` text DEFAULT NULL,
  `p_si_nilai` int(3) DEFAULT NULL,
  `p_si_desk` text DEFAULT NULL,
  `p_big_nilai` int(3) DEFAULT NULL,
  `p_big_desk` text DEFAULT NULL,
  `p_sb_nilai` int(3) DEFAULT NULL,
  `p_sb_desk` text DEFAULT NULL,
  `p_pjok_nilai` int(3) DEFAULT NULL,
  `p_pjok_desk` text DEFAULT NULL,
  `p_pk_nilai` int(3) DEFAULT NULL,
  `p_pk_desk` text DEFAULT NULL,
  `p_aswaja_nilai` int(3) DEFAULT NULL,
  `p_aswaja_desk` text DEFAULT NULL,
  `p_inf_nilai` int(3) DEFAULT NULL,
  `p_inf_desk` text DEFAULT NULL,
  `p_geo_nilai` int(3) DEFAULT NULL,
  `p_geo_desk` text DEFAULT NULL,
  `p_sj_nilai` int(3) DEFAULT NULL,
  `p_sj_desk` text DEFAULT NULL,
  `p_sos_nilai` int(3) DEFAULT NULL,
  `p_sos_desk` text DEFAULT NULL,
  `p_eko_nilai` int(3) DEFAULT NULL,
  `p_eko_desk` text DEFAULT NULL,
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
  `sakit` int(3) DEFAULT NULL,
  `ijin` int(3) DEFAULT NULL,
  `alpa` int(3) DEFAULT NULL,
  `cat_guru` text DEFAULT NULL,
  `ket_naik_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rapor`
--

INSERT INTO `rapor` (`id_rapor`, `id_siswa`, `sent`, `semester`, `tapel`, `spir_predikat`, `spir_desk`, `sos_predikat`, `sos_desk`, `p_qurdis_nilai`, `p_qurdis_desk`, `p_aa_nilai`, `p_aa_desk`, `p_fikih_nilai`, `p_fikih_desk`, `p_ski_nilai`, `p_ski_desk`, `p_pp_nilai`, `p_pp_desk`, `p_bi_nilai`, `p_bi_desk`, `p_mtk_nilai`, `p_mtk_desk`, `p_ba_nilai`, `p_ba_desk`, `p_si_nilai`, `p_si_desk`, `p_big_nilai`, `p_big_desk`, `p_sb_nilai`, `p_sb_desk`, `p_pjok_nilai`, `p_pjok_desk`, `p_pk_nilai`, `p_pk_desk`, `p_aswaja_nilai`, `p_aswaja_desk`, `p_inf_nilai`, `p_inf_desk`, `p_geo_nilai`, `p_geo_desk`, `p_sj_nilai`, `p_sj_desk`, `p_sos_nilai`, `p_sos_desk`, `p_eko_nilai`, `p_eko_desk`, `eks1_nama`, `eks1_nilai`, `eks1_ket`, `eks2_nama`, `eks2_nilai`, `eks2_ket`, `pres1_jenis`, `pres1_ket`, `pres2_jenis`, `pres2_ket`, `pres3_jenis`, `pres3_ket`, `sakit`, `ijin`, `alpa`, `cat_guru`, `ket_naik_kelas`) VALUES
(15, 58, 1, 2, '20232024', 'Baik', 'Sikap Spiritual Baik', 'Baik', 'Sikap Sosial Baik', 0, '', 90, 'Memahami Akidah dan Akhlaq yang baik', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'Pramuka', 90, 'Rajin Pramuka', '', 0, '', 'Juara 1 OSN', 'Sangat Bagus', '', '', '', '', 2, 3, 1, 'Lanjutkan Prestasimu Nak', 'naik');

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
  `nohp_ortu` varchar(255) DEFAULT NULL,
  `nama_ortu` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `gender`, `tanggal_lahir`, `nis`, `nohp_ortu`, `nama_ortu`, `email`, `password`, `id_kelas`) VALUES
(1, 'ISMAIL ', 'Laki Laki', '2006-12-27', 123458659, '085245658956', 'Saman', 'ismail@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(2, 'DEWI SINTA NUR AISYAH', 'Perempuan', '2007-07-23', 78977512, NULL, 'Suliyanto', 'dewisintanuraisyah@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(3, 'SUNDIYONO', 'Laki Laki', '2006-07-25', 65066193, NULL, 'Budi Arju', 'sundiyono@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(4, 'RIYAN PURNAMA', 'Laki Laki', '2007-03-03', 2147483647, NULL, 'Sunarto', 'ryanpurnama@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(5, 'TAOFIK ALFARISI', 'Laki Laki', '2007-05-08', 78226923, NULL, 'Herman Readi', 'taofikalfarisi@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(6, 'ABDUL HAMID HAMDANI', 'Laki Laki', '2006-09-01', 61279808, NULL, 'M. Sufyan Hadi', 'abdulhamidhamdani@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(7, 'IBNUR ROZIQIN', 'Laki Laki', '2006-02-09', 67924694, NULL, 'Samsuri', 'ibnurroziqin@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(8, 'USWATUN HASANAH', 'Perempuan', '2004-04-05', 48248887, NULL, 'Sennawi', 'uswatunhasanah@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(9, 'YULI TRI SUSANA AMILIA', 'Perempuan', '2006-07-29', 66892952, NULL, 'Ahye', 'yulitrisusanaamilia@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(10, 'SITI FAIQOH', 'Perempuan', '2007-06-10', 76402960, NULL, 'Muzammil', 'sitifaiqoh@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(12, 'SITI FATIMA', 'Perempuan', '2006-05-21', 61363173, NULL, 'Durahman', 'sitifatima@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(13, 'VELISA TRISNAWATI', 'Perempuan', '2007-05-25', 71641512, NULL, 'Sutrisno', 'velisatrisnawati@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(14, 'AHMAT ISTIGHFARUR ROHMAN', 'Laki Laki', '2007-05-13', 72148063, NULL, 'Suwardi ', 'ahmatistighfarurrohman@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(15, 'DENDI WARSUKI', 'Laki Laki', '2007-05-04', 68576015, NULL, 'Sumarwan ', 'dendiwarsuki@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(56, 'RICKI RAMALANG', 'Laki Laki', '2005-04-11', 53559213, NULL, 'Ramalang', 'rickyramalang@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 2),
(57, 'BARI IFANDI', 'Laki Laki', '2003-05-14', 48068654, NULL, 'Enjas', 'bariifandi@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 3),
(58, 'zfathony', 'Laki Laki', '1999-12-20', 123123123, '0895337337339', 'ayahzfathony', 'fathony@simadu.website', '$2y$10$jVLpJn07Rr.LmYIivmO1w.Rqvte9uXvlBuwBLS4gpjF6SPOdBytuW', 1);

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
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_class` (`id_kelas`);

--
-- Indeks untuk tabel `jadpel`
--
ALTER TABLE `jadpel`
  ADD PRIMARY KEY (`jadpel_id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `jadpel_jk1` (`jadpel_jk1`),
  ADD KEY `jadpel_jk2` (`jadpel_jk2`),
  ADD KEY `jadpel_jk3` (`jadpel_jk3`),
  ADD KEY `jadpel_jk4` (`jadpel_jk4`),
  ADD KEY `jadpel_jk5` (`jadpel_jk5`),
  ADD KEY `jadpel_jk6` (`jadpel_jk6`),
  ADD KEY `jadpel_jk7` (`jadpel_jk7`),
  ADD KEY `jadpel_jk8` (`jadpel_jk8`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `mapel_ibfk_1` (`id_guru`);

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
  ADD UNIQUE KEY `unique_nis` (`nis`),
  ADD UNIQUE KEY `nohp_ortu` (`nohp_ortu`),
  ADD KEY `id_class` (`id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `jadpel`
--
ALTER TABLE `jadpel`
  MODIFY `jadpel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `rapor`
--
ALTER TABLE `rapor`
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `jadpel`
--
ALTER TABLE `jadpel`
  ADD CONSTRAINT `jadpel_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadpel_ibfk_2` FOREIGN KEY (`jadpel_jk1`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadpel_ibfk_3` FOREIGN KEY (`jadpel_jk2`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadpel_ibfk_4` FOREIGN KEY (`jadpel_jk3`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadpel_ibfk_5` FOREIGN KEY (`jadpel_jk4`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadpel_ibfk_6` FOREIGN KEY (`jadpel_jk5`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadpel_ibfk_7` FOREIGN KEY (`jadpel_jk6`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadpel_ibfk_8` FOREIGN KEY (`jadpel_jk7`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `jadpel_ibfk_9` FOREIGN KEY (`jadpel_jk8`) REFERENCES `mapel` (`id_mapel`);

--
-- Ketidakleluasaan untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE SET NULL ON UPDATE SET NULL;

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
