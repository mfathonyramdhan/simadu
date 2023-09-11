-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2023 pada 03.00
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
-- Database: `n1669549_simaduv2`
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
(1, 'Moh Ramli, S.Pd', '20595645188001', 'moh.ramli@simadu.website', '$2y$10$DCxlbiKtYuDzo5mkA0ZIm.x4rMfAgKfECUFKBf8Jbv9m8rx2/rDUy', 'Laki Laki', 'Kepala Sekolah', 4),
(3, 'Adi Sucipto, S.Pd', '0846754657200012', 'adi.sucipto@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', 4),
(5, 'Imam Bukhori Muslim, S.Pd', '20577366188002', 'imam.bukhori@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Guru', 4),
(6, 'Joko Bambang Tisno, S.Pd', '20595645191002', 'joko.bambang@simadu.website', '$2y$10$.GUOp4OrvHYnBshyhLUB6uhqaZJsNIbfb9XbfwoayMSFGqOnTG7v.', 'Laki Laki', 'Guru & Waka Sarana Prasarana', 1),
(8, 'Nur Halimatus Sa’diyah, S.Sy', '20595645193001', 'nur.halimatus@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru & Waka kurikulum', 4),
(11, 'Ummi Khairiyah, S.Pd', '20595645199001', 'ummi.khairiyah@simadu.website', '$2y$10$Qrwl017ZirJN2oeH/fVHd..Aznl2tag5SULFdOWQhyyEFTnyFIn/S', 'Perempuan', 'Bendahara Madrasah & Guru & Kepala Perpustakaan', 4),
(12, 'Nurul Qomariyah, S.Pd', '20595645196001', 'nurul.qomariyah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru & Waka Kehumasan', 3),
(13, 'Nur Hasanah, S.Pd', '20595645193003', 'nur.hasanah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', 4),
(14, 'Sri Dewi Candrawati, S.Pd', '20595645197001', 'sri.dewi.candrawati@simadu.website', '$2y$10$EvaiESp3J2.xWMeEVoWef.2hUrI5crkVeL7UM7WpZvdIOuTooTGSe', 'Perempuan', 'Guru', 4),
(15, 'Uswatun Hasanah, S.Ag', '20595645193002', 'uswatun.hasanah@simadu.website', '$2y$10$NveiNql.PDE9u7UUfSzGRep3ZVuqUJGBB6C8IZrfmRBFQGY1V1p1i', 'Perempuan', 'Guru', 2),
(16, 'Siti Aisyah, S.Pd', '20595645198002', 'siti.aisyah@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', 4),
(17, 'Diana Fatimatus Zahro, S.Pd', '20595645194001', 'diana.fatimatus@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', 4),
(18, 'Indah Yuliatin, S.Pd', '20595645182001', 'indah.yuliatin@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Perempuan', 'Guru', 4),
(26, 'Kustiani, S.M', '20595645100001', 'kustiani.sm@simadu.website', '$2y$10$FEYUzSNni6Cqklnjc5kZ0eSxzbyEo5Ua09/oDaLMAh9db49UGk7K6', 'Laki Laki', 'Kepala Tata Usaha', 4),
(29, 'Nuril Hamdiyah Marufah', '20595645195002', 'nuril@simadu.website', '$2y$10$TX/AjEPzppuWwNyma1G16eqJ21O7rcK5B43zg/kf3WhV9Jf6aBjvO', 'Perempuan', 'guru', 4),
(30, 'Siti Jamilatul Hasanah ', '20595645197003', 'Sitijamilatul@simadu.website', '$2y$10$medflul8K4HvarHyaBlx6uhIAg9mtbN3C8MQ5SnhI9AtwvNXPes.q', 'Perempuan', 'guru', 4),
(31, 'Kusnadi', '2539761663120002', 'kusnadi@simadu.website', '$2y$10$jn3EBpfmypYBuhzHyzfy2.fyTXfgWYJftvVO9y4koNLf2QRU34nVq', 'Laki Laki', 'guru', 4),
(32, 'Juhairiya', '6454746648300023', 'juhairiya@simadu.website', '$2y$10$VS6p50ZGtK5XzGoelimQNunP/KdjFPVecMd.APgcyYrN5L.W1SPam', 'Perempuan', 'guru', 4),
(33, 'Imroatus Sholihah', '20595645198007', 'imroatus@simadu.website', '$2y$10$NtpFJ7pDcJ.U1T.0h1zdkuWjXQukE3dmwKPtJQH00ziM4Epd9T7cG', 'Perempuan', 'guru', 4),
(34, 'Ach Rifai', '20595645100002', 'ach.rifai@simadu.website', '$2y$10$1s4KNdxQO0Y1khX914USWuO44LrbIQ4TK1YwemzCuxQCQLCPM8tV2', 'Laki Laki', 'guru', 4),
(35, 'Mohammad Huzik Udin', '20595645100003', 'huzik.udin@simadu.website', '$2y$10$gK9Y5GBHJH89ewl5kyH3heqyNCclRmpvXP72/6BIOSB89B8Mij0Gm', 'Laki Laki', 'guru', 4),
(36, 'Evi Dwi Andriyani', '20595645100004', 'evi.dwi@simadu.website', '$2y$10$/67wPHcB73JriN7nDacUKu7mLhcCSPymn.bHM8YVcLjdP12dIrQIK', 'Perempuan', 'guru', 4),
(37, 'Neng Hikmah', '20595645100005', 'hikmah@simadu.website', '$2y$10$SDzvEAPHj6KaMVh.pwlVS.1Xf4eRFRCIRXDvYBG/hfA7AvDD/ypDK', 'Perempuan', 'guru', 4);

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
(3, 'Selasa', 19, 18, 17, 16, 15, 10, 11, 13, 2),
(4, 'Senin', 1, 16, 18, 19, 19, 2, 18, 19, 1);

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
(1, 'TIK', 8),
(2, 'Aqidah', 5),
(3, 'MTK', 11),
(4, 'PKN', 26),
(5, 'Bahasa Indonesia', 13),
(6, 'SKI', 12),
(7, 'Qurdist', 15),
(8, 'Penjas', 36),
(9, 'Seni Budaya', 17),
(10, 'Sejarah', 34),
(11, 'Sosiologi', 16),
(12, 'Fiqih', 3),
(13, 'Ekonomi', 5),
(14, 'Bahasa Arab', 35),
(15, 'Sejarah Indonesia', 14),
(16, 'Geografi', 6),
(17, 'Aswaja', 37),
(18, 'Prakarya', 8),
(19, 'Bahasa Inggris', 34);

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
(15, 58, 1, 2, '20232024', 'Baik', 'Sikap Spiritual Baik', 'Baik', 'Sikap Sosial Baik', 0, '', 90, 'Memahami Akidah dan Akhlaq yang baik', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 'Pramuka', 90, 'Rajin Pramuka', '', 0, 'Saya adalah seorang yang senang belajar dan selalu mencari pengetahuan baru di setiap kesempatan Saya percaya bahwa pembelajaran adalah kunci untuk pertumbuhan pribadi dan kesuksesan dalam hidup Saya selalu berusaha untuk menjadi lebih baik setiap harinya', 'Juara 1 OSN', 'Sangat Bagus', '', '', '', '', 2, 3, 1, 'Lanjutkan Prestasimu Nak', 'naik'),
(16, 1, 1, 1, '20232024', 'Cukup', 'sikap spiritual baik, berakhalakul karimah, sopan dan juga rajin berdoa. Rajin mengikuti sholat jaamah dan pandai berbagi.', 'Cukup', 'sikapnya yang baik yang menghargai keluhuran nilai-nilai pancasila sebagai pandangan hidupnya. memiliki sikap gotoroyong baik', 70, '', 89, 'baik', 90, 'sangat baik', 98, 'sangat baik', 0, '', 90, '', 89, 'baik', 0, '', 80, 'baik', 0, '', 0, '', 0, '', 0, '', 0, '', 90, 'baik', 90, 'baik', 0, '', 80, 'baik', 90, '', '', 0, '', '', 0, '', 'pidato', 'sangat baik', 'puisi', 'juara 2', '', '', 1, 1, 0, 'semangat terus belajar', 'naik'),
(18, 2, 0, 1, '20232024', 'Cukup', 'sikap spiritual baik, berakhalakul karimah, sopan dan juga rajin berdoa. Rajin mengikuti sholat jaamah dan pandai berbagi.', 'Cukup', 'sikapnya yang baik yang menghargai keluhuran nilai-nilai pancasila sebagai pandangan hidupnya. memiliki sikap gotoroyong baik', 0, '', 0, '', 0, '', 89, 'baik', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', 'pidato', 'sangat baik', 'puisi', 'juara 2', '', '', 3, 0, 2, 'semangat terus belajar', 'naik'),
(19, 3, 0, 1, '20232024', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(20, 3, 0, 1, '20232024', '', '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', ''),
(21, 3, 0, 1, '20232024', 'Cukup', 'sikap spiritual baik, berakhalakul karimah, sopan dan juga rajin berdoa. Rajin mengikuti sholat jaamah dan pandai berbagi.', 'Cukup', 'sikapnya yang baik yang menghargai keluhuran nilai-nilai pancasila sebagai pandangan hidupnya. memiliki sikap gotoroyong baik', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', 'sholawatan', 'sangat baik', 'puisi', 'juara 1', '', '', 0, 2, 2, 'semangat belajar', 'naik'),
(22, 56, 0, 1, '20232024', 'Cukup', 'sikap spiritual baik, berakhalakul karimah, sopan dan juga rajin berdoa. Rajin mengikuti sholat jaamah dan pandai berbagi.', 'Cukup', 'sikapnya yang baik yang menghargai keluhuran nilai-nilai pancasila sebagai pandangan hidupnya. memiliki sikap gotoroyong baik', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', 'pidato', 'sangat baik', 'puisi', 'juara 2', '', '', 0, 4, 0, 'semangat belajar', 'naik'),
(23, 1, 0, 1, '20232024', 'Cukup', 'Saya adalah seorang yang senang belajar dan selalu mencari pengetahuan baru di setiap kesempatan Saya percaya bahwa pembelajaran adalah kunci untuk pertumbuhan pribadi dan kesuksesan dalam hidup Saya ', 'Kurang', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '-'),
(24, 4, 0, 1, '20232024', 'Cukup', 'Saya adalah seorang yang senang belajar dan selalu mencari pengetahuan baru di setiap kesempatan Saya percaya bahwa pembelajaran adalah kunci untuk pertumbuhan pribadi dan kesuksesan dalam hidup Saasd', 'Kurang', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 0, '', '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '-');

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
  `nis` varchar(255) DEFAULT NULL,
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
(1, 'ISMAIL ', 'Laki Laki', '2006-12-27', '123458659', '081229437167', 'Saman', 'ismail@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(2, 'DEWI SINTA NUR AISYAH', 'Perempuan', '2007-07-23', '0078977512', '085245658956', 'Suliyanto', 'dewisintanuraisyah@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(3, 'SUNDIYONO', 'Laki Laki', '2006-07-25', '65066193', NULL, 'Budi Arju', 'sundiyono@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(4, 'RIYAN PURNAMA', 'Laki Laki', '2007-03-03', '2147483647', NULL, 'Sunarto', 'ryanpurnama@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(5, 'TAOFIK ALFARISI', 'Laki Laki', '2007-05-08', '78226923', NULL, 'Herman Readi', 'taofikalfarisi@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(6, 'ABDUL HAMID HAMDANI', 'Laki Laki', '2006-09-01', '61279808', NULL, 'M. Sufyan Hadi', 'abdulhamidhamdani@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(7, 'IBNUR ROZIQIN', 'Laki Laki', '2006-02-09', '67924694', NULL, 'Samsuri', 'ibnurroziqin@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(8, 'USWATUN HASANAH', 'Perempuan', '2004-04-05', '48248887', NULL, 'Sennawi', 'uswatunhasanah@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(9, 'YULI TRI SUSANA AMILIA', 'Perempuan', '2006-07-29', '66892952', NULL, 'Ahye', 'yulitrisusanaamilia@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(10, 'SITI FAIQOH', 'Perempuan', '2007-06-10', '76402960', NULL, 'Muzammil', 'sitifaiqoh@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(12, 'SITI FATIMA', 'Perempuan', '2006-05-21', '61363173', NULL, 'Durahman', 'sitifatima@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(13, 'VELISA TRISNAWATI', 'Perempuan', '2007-05-25', '71641512', NULL, 'Sutrisno', 'velisatrisnawati@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(14, 'AHMAT ISTIGHFARUR ROHMAN', 'Laki Laki', '2007-05-13', '72148063', NULL, 'Suwardi ', 'ahmatistighfarurrohman@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(15, 'DENDI WARSUKI', 'Laki Laki', '2007-05-04', '68576015', NULL, 'Sumarwan ', 'dendiwarsuki@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 1),
(56, 'RICKI RAMALANG', 'Laki Laki', '2005-04-11', '53559213', NULL, 'Ramalang', 'rickyramalang@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 2),
(57, 'BARI IFANDI', 'Laki Laki', '2003-05-14', '48068654', NULL, 'Enjas', 'bariifandi@simadu.website', '$2y$10$ee8aYN8TiwyO96gsUOvwY.70Hz2mywgGDA8T2Mt8pyruy1/u1MP/a', 3),
(58, 'zfathony', 'Laki Laki', '1999-12-20', '123123123', '0895337337339', 'ayahzfathony', 'fathony@simadu.website', '$2y$10$jVLpJn07Rr.LmYIivmO1w.Rqvte9uXvlBuwBLS4gpjF6SPOdBytuW', 1),
(59, 'ALDI SAPUTRA', 'Laki Laki', '2007-02-08', '78508782', '081229437167', 'Sugeng', 'aldi@simadu.website', '$2y$10$1abCNrXYr98bPhQ/NQqNNevPjgoHaH/fFx/14Iu3hNGUbP/TErIZK', 2),
(62, 'AGUS SUPANDI', 'Laki Laki', '2005-07-05', '53330769', '082331110053', 'Nardiyono', 'agus@simadu.website', '$2y$10$GfZGuft8a6x2V0Z9YC3F3OeuW201Tu6YnlS2eW9yAKPS.RKnBsnsi', 2),
(65, 'EKA SARTIKA', 'Perempuan', '2004-07-22', '3048966340', '085748036534', 'Iwan Kurniawan', 'eka@simadu.website', '$2y$10$C4xGHGDXsQi9V3iQnJ/x0eiAp..U7aNVZpCSGlEeRcZPqUnTKWyaO', 2),
(66, 'INEM', 'Perempuan', '2006-09-20', '67153318', '085123123123', 'Subroto', 'inem@simadu.website', '$2y$10$I.imfdNlQVYF6qzlWpWm6uXerjMFiiAiAOXMjELRzMBz0hAKGDmLq', 2),
(67, 'EKO FEBRIYANTO', 'Laki Laki', '2004-03-13', '43592893', '085676767676', 'Jufri', 'eko@simadu.website', '$2y$10$p/f8aSYs5or/XfZajn0IYOlmiSwtGnGltsEHBzjBIT2x5sZs2TQLu', 2);

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
  ADD UNIQUE KEY `nip_2` (`nip`),
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
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `jadpel`
--
ALTER TABLE `jadpel`
  MODIFY `jadpel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

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
