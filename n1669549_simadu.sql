-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2023 pada 13.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

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
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `email`, `password`) VALUES
(1, 'Admin SIMADU', 'admin@gmail.com', '$2y$10$tGcbNbyzddWvOE97iu2U7O85PBuSy2Yxv2p8ZGUdbpZ2Dv1hKeHIm'),
(2, 'Admin2', 'admin2@gmail.com', '$2y$10$zmiKAXleNissjhnhQP2lj.y0nzySPNyQPU6RXZdbFaAK7wEJ4QHcS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id_class`, `name`) VALUES
(1, 'Class A'),
(2, 'Class B'),
(3, 'Class C'),
(4, 'No Class');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `start_hours` time DEFAULT NULL,
  `end_hours` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`id_course`, `name`, `day`, `start_hours`, `end_hours`) VALUES
(1, 'IPS', 'Senin', '08:00:00', '09:30:00'),
(2, 'IPA', 'Sabtu', '05:00:00', '07:30:00'),
(4, 'MATEMATIKA 2', 'Selasa', '20:10:00', '20:15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parents`
--

CREATE TABLE `parents` (
  `id_parent` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `nip` bigint(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `parents`
--

INSERT INTO `parents` (`id_parent`, `name`, `gender`, `birth_date`, `nip`, `email`, `password`, `id_student`) VALUES
(1, 'ortu1', 'Female', '1980-01-01', 1234567890123456, 'ortu1@example.com', '$2y$10$tK7SrqrUKequ8eTBH0L1mulizhsaGcH1I6734po4iAaYZFj0ipELy', 3),
(2, 'Parent 2', 'Male', '1985-02-02', 9876543210987654, 'parent2@example.com', 'password2', 2),
(3, 'Parent 3', 'Female', '1990-03-03', 5432167890123456, 'parent3@example.com', 'password3', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `school`
--

CREATE TABLE `school` (
  `id_school` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `accreditation` varchar(255) DEFAULT NULL,
  `npsn` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `school`
--

INSERT INTO `school` (`id_school`, `name`, `address`, `phone`, `accreditation`, `npsn`) VALUES
(1, 'Sample School 1', '123 Main St', '123-456-7890', 'B', 12345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `nis` int(4) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_class` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id_student`, `name`, `gender`, `birth_date`, `nis`, `email`, `password`, `id_class`) VALUES
(1, 'Student 1', 'Male', '2005-01-01', 1234, 'student1@example.com', 'password1', 1),
(2, 'Student 2', 'Female', '2006-02-02', 5678, 'student2@example.com', 'password2', 2),
(3, 'Student 3', 'Male', '2007-03-03', 9101, 'student3@example.com', 'password3', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `id_teacher` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `nip` bigint(18) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_class` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name`, `gender`, `birth_date`, `nip`, `email`, `password`, `id_class`) VALUES
(2, 'windu', 'Female', '1985-02-02', 987654321098765432, 'teacher2@example.com', '$2y$10$lcHvlYrHWdaxRt7RL5aUJOwKuG16jRCIaJmdulVQGgJPF3PY/rULq', 2),
(3, 'Teacher 3', 'Male', '1990-03-03', 543216789012345678, 'teacher3@example.com', 'password3', 3),
(4, 'Budi', 'Male', '1999-12-20', 123456789012345678, 'budi@gmail.com', '$2y$10$uOX5CI/LJI2ZBHI.ZNnVt.w9GkFgiIpne5g37iBtgnByo7CvsPTC6', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `violation`
--

CREATE TABLE `violation` (
  `id_violation` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `violation`
--

INSERT INTO `violation` (`id_violation`, `name`, `score`) VALUES
(1, 'Bolos', 5),
(2, 'Tidak Ikut Pelajaran', 2),
(3, 'Tidak Mengerjakan Tugas', 2),
(4, 'Merokok', 20),
(5, 'Miras', 30),
(6, 'Berpacaran', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `violation_detail`
--

CREATE TABLE `violation_detail` (
  `id_violation_detail` int(100) NOT NULL,
  `id_violation` int(20) DEFAULT NULL,
  `id_student` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `violation_detail`
--

INSERT INTO `violation_detail` (`id_violation_detail`, `id_violation`, `id_student`) VALUES
(1, 6, 1),
(2, 4, 1),
(5, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indeks untuk tabel `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id_parent`),
  ADD KEY `id_student` (`id_student`);

--
-- Indeks untuk tabel `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id_school`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_class` (`id_class`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `id_class` (`id_class`);

--
-- Indeks untuk tabel `violation`
--
ALTER TABLE `violation`
  ADD PRIMARY KEY (`id_violation`);

--
-- Indeks untuk tabel `violation_detail`
--
ALTER TABLE `violation_detail`
  ADD PRIMARY KEY (`id_violation_detail`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_violation` (`id_violation`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `parents`
--
ALTER TABLE `parents`
  MODIFY `id_parent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `school`
--
ALTER TABLE `school`
  MODIFY `id_school` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `violation`
--
ALTER TABLE `violation`
  MODIFY `id_violation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `violation_detail`
--
ALTER TABLE `violation_detail`
  MODIFY `id_violation_detail` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id_student`);

--
-- Ketidakleluasaan untuk tabel `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`);

--
-- Ketidakleluasaan untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `class` (`id_class`);

--
-- Ketidakleluasaan untuk tabel `violation_detail`
--
ALTER TABLE `violation_detail`
  ADD CONSTRAINT `violation_detail_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id_student`) ON DELETE CASCADE,
  ADD CONSTRAINT `violation_detail_ibfk_2` FOREIGN KEY (`id_violation`) REFERENCES `violation` (`id_violation`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
