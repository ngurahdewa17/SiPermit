-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipermit`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelaksanas`
--

CREATE TABLE `data_pelaksanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idDataPengajuan` bigint(20) UNSIGNED NOT NULL,
  `namaPelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pelaksanas`
--

INSERT INTO `data_pelaksanas` (`id`, `idDataPengajuan`, `namaPelaksana`, `noTlp`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dodo', '081234987908', '2022-09-23 21:07:25', '2022-09-23 21:07:25'),
(2, 1, 'Josi', '08123567856', '2022-09-23 21:07:25', '2022-09-23 21:07:25'),
(3, 1, 'Yanto', '08567487647', '2022-09-23 21:07:25', '2022-09-23 21:07:25'),
(4, 2, 'Didi', '081234987', '2022-09-23 21:28:12', '2022-09-23 21:28:12'),
(5, 2, 'Jehan', '0812378765', '2022-09-23 21:28:12', '2022-09-23 21:28:12'),
(6, 2, 'Dodik', '0981237654', '2022-09-23 21:28:12', '2022-09-23 21:28:12'),
(7, 2, 'Anang', '081237656', '2022-09-23 21:28:12', '2022-09-23 21:28:12'),
(8, 3, 'Koko', '08567856789', '2022-09-23 21:35:53', '2022-09-23 21:35:53'),
(9, 3, 'Wida', '085987567', '2022-09-23 21:35:53', '2022-09-23 21:35:53'),
(10, 4, 'koko', '081345609890', '2022-09-26 00:09:36', '2022-09-26 00:09:36'),
(11, 4, 'dodo', '081345234567', '2022-09-26 00:09:36', '2022-09-26 00:09:36'),
(12, 4, 'Degi', '08126378967', '2022-09-26 00:09:36', '2022-09-26 00:09:36'),
(13, 5, 'Dekgi', '0812345987', '2022-11-11 01:03:42', '2022-11-11 01:03:42'),
(14, 5, 'Yoyo', '08123467890', '2022-11-11 01:03:42', '2022-11-11 01:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listapds`
--

CREATE TABLE `listapds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idDataPengajuan` bigint(20) UNSIGNED NOT NULL,
  `apd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listapds`
--

INSERT INTO `listapds` (`id`, `idDataPengajuan`, `apd`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sepatu Safety', '5', '2022-09-23 21:07:59', '2022-09-23 21:07:59'),
(2, 1, 'Helem Safety', '5', '2022-09-23 21:07:59', '2022-09-23 21:07:59'),
(3, 1, 'Sarung Tangan', '5', '2022-09-23 21:07:59', '2022-09-23 21:07:59'),
(4, 1, 'Tools Kit', '1', '2022-09-23 21:07:59', '2022-09-23 21:07:59'),
(5, 1, 'Rompi', '5', '2022-09-23 21:07:59', '2022-09-23 21:07:59'),
(6, 1, 'Tangga', '2', '2022-09-23 21:07:59', '2022-09-23 21:07:59'),
(7, 2, 'Helem safety', '6', '2022-09-23 21:28:48', '2022-09-23 21:28:48'),
(8, 2, 'Sepatu safety', '6', '2022-09-23 21:28:48', '2022-09-23 21:28:48'),
(9, 2, 'Tangga', '2', '2022-09-23 21:28:48', '2022-09-23 21:28:48'),
(10, 2, 'Tools Kit', '1', '2022-09-23 21:28:48', '2022-09-23 21:28:48'),
(11, 2, 'Rompi', '6', '2022-09-23 21:28:48', '2022-09-23 21:28:48'),
(12, 2, 'Sarung Tangan', '6', '2022-09-23 21:28:48', '2022-09-23 21:28:48'),
(13, 3, 'Sepatu Safety', '4', '2022-09-23 21:36:20', '2022-09-23 21:36:20'),
(14, 3, 'Helem Safety', '4', '2022-09-23 21:36:20', '2022-09-23 21:36:20'),
(15, 3, 'Sarung Tangan', '4', '2022-09-23 21:36:20', '2022-09-23 21:36:20'),
(16, 3, 'Tools Kit', '1', '2022-09-23 21:36:20', '2022-09-23 21:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `listjsas`
--

CREATE TABLE `listjsas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idDataPengajuan` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisiTidakAman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakanTidakAman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengendalianRisiko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listjsas`
--

INSERT INTO `listjsas` (`id`, `idDataPengajuan`, `kegiatan`, `kondisiTidakAman`, `tindakanTidakAman`, `pengendalianRisiko`, `created_at`, `updated_at`) VALUES
(1, 1, 'Safety briefing, Doa Pembuka Persiapan alat kerja', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam, Miss komunikasi, terpapar covid-19', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:19:55', '2022-09-23 21:19:55'),
(2, 1, 'Dokumentasi awal sebelum memulai pekerjaan', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:19:55', '2022-09-23 21:19:55'),
(3, 1, 'Penarikan kabel Patch cord ke perangkat Link Backbone', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:19:55', '2022-09-23 21:19:55'),
(4, 1, 'Melakukan BERTest pada jaringan backbone Denpasar - Kupang', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:19:55', '2022-09-23 21:19:55'),
(5, 1, 'Melakukan dokumentasi hasil pekerjaan', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:19:55', '2022-09-23 21:19:55'),
(6, 1, 'Safety briefing, doa penutup, perapihan alat dan lokasi kerja', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam, Miss komunikasi, terpapar covid-19', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:19:55', '2022-09-23 21:19:55'),
(7, 2, 'Safety briefing, Doa Pembuka Persiapan alat kerja', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam, Miss komunikasi, terpapar covid-19', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:31:17', '2022-09-23 21:31:17'),
(8, 2, 'Dokumentasi awal sebelum memulai pekerjaan', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:31:17', '2022-09-23 21:31:17'),
(9, 2, 'Melakukan Survey Alokasi Penempatan jalur Backbone', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:31:17', '2022-09-23 21:31:17'),
(10, 2, 'Pengecekan dan pengukuran kabel FO', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:31:17', '2022-09-23 21:31:17'),
(11, 2, 'Melakukan dokumentasi hasil pekerjaan', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:31:17', '2022-09-23 21:31:17'),
(12, 2, 'Safety briefing, doa penutup, perapihan alat dan lokasi kerja', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam, Miss komunikasi, terpapar covid-19', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:31:17', '2022-09-23 21:31:17'),
(13, 3, 'Safety briefing, Doa Pembuka Persiapan alat kerja', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam, Miss komunikasi, terpapar covid-19', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:37:51', '2022-09-23 21:37:51'),
(14, 3, 'Dokumentasi awal sebelum memulai pekerjaan', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:37:51', '2022-09-23 21:37:51'),
(15, 3, 'Melakukan Survey Alokasi Penempatan jalur Backbone', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:37:51', '2022-09-23 21:37:51'),
(16, 3, 'Pengecekan dan pengukuran kabel FO', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:37:51', '2022-09-23 21:37:51'),
(17, 3, 'Melakukan dokumentasi hasil pekerjaan', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Memakai Helm Safety, memakai warepack, memakai sepatu safety, memakai sarung tangan, Masker dan selalu dalam pengawasan K3', '2022-09-23 21:37:51', '2022-09-23 21:37:51'),
(18, 3, 'Safety briefing, doa penutup, perapihan alat dan lokasi kerja', 'Terbentur, terpeleset, tersandung, tertimpa alat kerja, tergores benda tajam, Miss komunikasi, terpapar covid-19', 'Cidera, luka memar, luka gores, salah langkah kerja, parawatan medis', 'Fokus dalam pengarahan pengawas, Memakai Helm Safety, memakai sepatu safety, memakai warepack, memakai sarung\r\ntangan dan masker, menjaga jarak\r\nminimal 2 meter', '2022-09-23 21:37:51', '2022-09-23 21:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_07_102021_sistempengajuan', 1),
(6, '2022_06_07_160340_verifikasi', 1),
(7, '2022_06_12_131424_create_data_pelaksana', 1),
(8, '2022_07_21_105854_create_list_a_p_d_s_table', 1),
(9, '2022_07_21_110022_create_list_j_s_a_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sistem_pengajuans`
--

CREATE TABLE `sistem_pengajuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaMitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPerusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noSP2KPA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haritanggalMulai` date NOT NULL,
  `jamMulai` time NOT NULL,
  `haritanggalSelesai` date NOT NULL,
  `jamSelesai` time NOT NULL,
  `namaLokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktifitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskList` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengawasPekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHPPegawaiPekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengawasK3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHPPegawaiK3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_stg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` tinyint(4) NOT NULL DEFAULT 0,
  `namaVerifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `coment` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sistem_pengajuans`
--

INSERT INTO `sistem_pengajuans` (`id`, `idUser`, `namaMitra`, `email`, `namaPerusahaan`, `pekerjaan`, `noSP2KPA`, `haritanggalMulai`, `jamMulai`, `haritanggalSelesai`, `jamSelesai`, `namaLokasi`, `aktifitas`, `lokasi`, `taskList`, `pengawasPekerjaan`, `noHPPegawaiPekerjaan`, `pengawasK3`, `noHPPegawaiK3`, `image`, `image_stg`, `approve`, `namaVerifikasi`, `coment`, `created_at`, `updated_at`) VALUES
(1, '3', 'Indra', 'indra@gmail.com', 'AJT', 'Penarikan FOC Backbone 24 Core Link Denpasar - Singapore', 'AJT01', '2022-09-26', '07:05:00', '2022-09-27', '17:06:00', 'Denpasar', 'FOC', 'Outdoor', 'Instalasi,QC,Jointing', 'Indra', '0812349856', 'Ahmad Wahyudi', '081234567465', '1663995882Yr00NSs4KDumDbrMCe0tXk7657u8IlQVynOyHFeR.png', '1663995882f6nEMW8lBqxPwcMtXIfAHVYdNNhSi5OgQ8QOQUuE.png', 0, 'Kamal Syarif', '', '2022-09-23 21:04:42', '2022-09-25 21:12:11'),
(2, '3', 'Indra', 'indra@gmail.com', 'AJT', 'Penarikan FOC Backbone 24 Core Link Pemaron - Seririt - Gerogak', 'AJT004', '2022-09-26', '08:21:00', '2022-09-28', '17:25:00', 'Buleleng', 'FOC', 'POP', 'Survey,Instalasi,QC,Jointing,Pemasangan', 'Indra', '081234987678', 'I Made Karya Winangun', '081237770105', '1663996960kvFEtEV5czsfsSCwieyKqTHLzy6zwJq4rbNR5fex.png', '1663996960VUPt5L1WoEDrAcA6A0LrKydZ0GKv5YK3pSNT6mGA.png', 0, 'Kamal Syarif', '1. Data JSA Kurang Lengkap\r\n2. APD Kurang Lengkap\r\n3. K3 Expied', '2022-09-23 21:22:40', '2022-09-24 22:40:33'),
(3, '4', 'Karya', 'karya@gmail.com', 'GMT', 'Cascading DWDM', 'GMT009', '2022-09-26', '07:38:00', '2022-09-27', '17:33:00', 'Buleleng', 'FOC', 'POP', 'Survey,Instalasi,QC', 'Ahmad Wahyudi', '08133789698', 'Made Ari Raditya', '081237770105', '1663997715qwa4uv6P2eeldp70JvSbdGr9X23l3geqSgIGvUQ0.jpg', '16639977151j5oVvHAX8ljufxvsK3oJKtkMcuQYSwZAHvdvY4w.png', 0, 'Kamal Syarif', '', '2022-09-23 21:35:15', '2022-09-24 21:05:15'),
(4, '3', 'Ewik', 'ewik@gmail.com', 'AJT', 'Penarikan Backbone Cluster FTTH Tabanan', 'f3f3ssaf', '2022-09-27', '07:07:00', '2022-09-28', '20:08:00', 'Singaraja', 'FOC', 'Outdoor', 'Survey,QC,Jointing', 'Dedi Sunanto', '081237770105', 'Didin', '081237770105', '1664179717VvDOtdxlgw7Vlf8Iv1eAhgirtu53k9fWbRQeb8pt.png', '166417971834jHJv3W9zFM35RBTrPNvvP8b3e7CHVueB14LDX2.png', 0, 'Gustu', '1.List APD Kurang\r\n2. List JSA Jurang', '2022-09-26 00:08:38', '2022-09-26 00:19:21'),
(5, '3', 'Indra', 'indra@gmail.com', 'AJT', 'Penarikan FOC Backbone 24 Core Link Pemaron - Seririt - Gerogak', '2K12ER', '2022-11-11', '20:00:00', '2022-11-14', '18:11:00', 'Buleleng', 'FOC', 'Outdoor', 'Penarikan,Jointing,Penggalian', 'Deni', '081237770105', 'Nofal Agusta', '081237770105', '1668157332DIXE3P9tb1knkRWeaq8Y4aZWuYi3D9GcSwAVLE9B.jpg', '166815733232XqSacDBrzEkkqp6YX7jVgeaTfojvkAd2JViEP6.png', 3, '', '', '2022-11-11 01:02:12', '2022-11-11 01:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'superadmin@gmail.com',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 2,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$YCjdqgEk23alnl9PkxFEnugm/iLbA0d686A/qBRtpBgOQMvRP9FXm',
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, 2, '$2y$10$YCjdqgEk23alnl9PkxFEnugm/iLbA0d686A/qBRtpBgOQMvRP9FXm', 'Super Admin', NULL, NULL, NULL),
(2, 'Kamal Syarif', 'kamalsyarif@gmail.com', NULL, 1, '$2y$10$RlvfXHdJiL83rmmXDN/L8OS7LiQ4osSJI6QzPUSnlLtr6foxWVdSu', 'SPV Pembangunan ICON+', NULL, '2022-09-23 20:54:30', '2022-09-23 20:54:30'),
(3, 'Indra', 'indra@gmail.com', NULL, 0, '$2y$10$6UY1V3XbKbCxU4u2gvcXUeT61ZvfZdO2A./CFA6vclZ5D/8VPOG5G', 'MITRA', NULL, '2022-09-23 20:54:53', '2022-09-23 20:54:53'),
(4, 'Karya', 'karya@gmail.com', NULL, 0, '$2y$10$FPWTS6yScVNrVQ2BVgAZK.a0CAGv4z8fGx3PqUKdG8v1fSg07pVBe', 'MITRA', NULL, '2022-09-23 21:32:09', '2022-09-23 21:32:09'),
(5, 'Rian', 'rian@gmail.com', NULL, 1, '$2y$10$k9GiJhlZP8fmK4BZxNdbZ.7OoseX90702qndmXve3oC1/ox4CqG6C', 'PTL Aktivasi ICON+', NULL, '2022-09-25 21:16:23', '2022-09-25 21:16:23'),
(6, 'Gustu', 'gustu@gmail.com', NULL, 1, '$2y$10$nmsqyIzNkoFOzCQ0Fq0EiOTv0rHBd6in8eC5jY2OFTvIhpeSi10F.', 'PTL Aktivasi ICON+', NULL, '2022-09-26 00:02:01', '2022-09-26 00:02:01'),
(7, 'Dede', 'dede@gmail.com', NULL, 1, '$2y$10$/o2q2eIFcp4An9H066Vuz.HEp.CHgBiO2j77IJcKo/kekixomgZk2', 'Waspang Pembangunan ICON+', NULL, '2022-09-26 16:39:57', '2022-09-26 16:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasis`
--

CREATE TABLE `verifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sistem_pengajuan_id` bigint(20) UNSIGNED NOT NULL,
  `namaPengaju` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaVerifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageVerifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coment` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `approve` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelaksanas`
--
ALTER TABLE `data_pelaksanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listapds`
--
ALTER TABLE `listapds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listjsas`
--
ALTER TABLE `listjsas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sistem_pengajuans`
--
ALTER TABLE `sistem_pengajuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifikasis`
--
ALTER TABLE `verifikasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifikasis_sistem_pengajuan_id_foreign` (`sistem_pengajuan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelaksanas`
--
ALTER TABLE `data_pelaksanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listapds`
--
ALTER TABLE `listapds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `listjsas`
--
ALTER TABLE `listjsas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sistem_pengajuans`
--
ALTER TABLE `sistem_pengajuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `verifikasis`
--
ALTER TABLE `verifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `verifikasis`
--
ALTER TABLE `verifikasis`
  ADD CONSTRAINT `verifikasis_sistem_pengajuan_id_foreign` FOREIGN KEY (`sistem_pengajuan_id`) REFERENCES `sistem_pengajuans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
