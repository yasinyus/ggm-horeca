-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Bulan Mei 2024 pada 20.26
-- Versi server: 10.2.44-MariaDB-cll-lve
-- Versi PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuay6361_ggfi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ao_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `areas`
--

INSERT INTO `areas` (`id`, `ao_name`, `ro`, `wo`, `status`, `created_at`, `updated_at`) VALUES
(2, ' BANDA ACEH', ' MEDAN', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(3, ' LHOKSEUMAWE', ' MEDAN', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(4, ' MEDAN', ' MEDAN', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(5, ' PADANG SIDEMPUAN', ' MEDAN', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(6, ' PEMATANG SIANTAR', ' MEDAN', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(7, ' BUKITTINGGI', ' PEKANBARU', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(8, ' BATAM', ' PEKANBARU', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(9, ' DUMAI', ' PEKANBARU', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(10, ' PADANG', ' PEKANBARU', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(11, ' PEKANBARU', ' PEKANBARU', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(12, ' BANGKA', ' PALEMBANG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(13, ' JAMBI', ' PALEMBANG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(14, ' MUARA BUNGO', ' PALEMBANG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(15, ' PALEMBANG', ' PALEMBANG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(16, ' BENGKULU', ' LAMPUNG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(17, ' BATU RAJA', ' LAMPUNG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(18, ' KOTABUMI', ' LAMPUNG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(19, ' LUBUK LINGGAU', ' LAMPUNG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(20, ' LAMPUNG', ' LAMPUNG', 'SUMATERA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(21, ' JAKARTA1', ' JAKARTA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(22, ' JAKARTA2', ' JAKARTA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(23, ' JAKARTA3', ' JAKARTA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(24, ' SERANG', ' JAKARTA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(25, ' TANGERANG', ' JAKARTA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(26, ' BEKASI', ' JAKARTA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(27, ' BANDUNG', ' BANDUNG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(28, ' BOGOR', ' BANDUNG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(29, ' CIREBON', ' BANDUNG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(30, ' KARAWANG', ' BANDUNG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(31, ' SUKABUMI', ' BANDUNG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(32, ' TASIKMALAYA', ' BANDUNG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(33, ' PURWOKERTO', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(34, ' SOLO', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(35, ' SEMARANG', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(36, ' PATI', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(37, ' TEGAL', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(38, ' YOGYAKARTA', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(39, ' MAGELANG', ' SEMARANG', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(40, ' MOJOKERTO', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(41, ' JEMBER', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(42, ' KEDIRI', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(43, ' MADIUN', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(44, ' MALANG', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(45, ' PAMEKASAN', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(46, ' SURABAYA', ' SURABAYA', 'JAWA', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(47, ' BIMA', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(48, ' DENPASAR', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(49, ' ENDE', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(50, ' KUPANG', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(51, ' MAUMERE', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(52, ' MATARAM', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(53, ' WAINGAPU', ' DENPASAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(54, ' BANJARMASIN', ' BANJARMASIN', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(55, ' BALIKPAPAN', ' BANJARMASIN', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(56, ' BERAU', ' BANJARMASIN', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(57, ' PONTIANAK', ' BANJARMASIN', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(58, ' SAMARINDA', ' BANJARMASIN', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(59, ' SAMPIT', ' BANJARMASIN', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(60, ' AMBON', ' MAKASSAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(61, ' JAYAPURA', ' MAKASSAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(62, ' KENDARI', ' MAKASSAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(63, ' MAKASSAR', ' MAKASSAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(64, ' PALU', ' MAKASSAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(65, ' PARE PARE', ' MAKASSAR', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(66, ' GORONTALO', ' MANADO', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(67, ' MANADO', ' MANADO', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(68, ' SORONG', ' MANADO', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56'),
(69, ' TERNATE', ' MANADO', 'INDONESIA TIMUR', 'Active', '2024-03-24 16:12:56', '2024-03-24 16:12:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `audiences`
--

CREATE TABLE `audiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_audience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outlet_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_transaction` int(11) DEFAULT 0,
  `redeem` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `audiences`
--

INSERT INTO `audiences` (`id`, `nama`, `email`, `no_telp`, `password`, `status_audience`, `outlet_id`, `user_transaction`, `redeem`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asdas', '234234', '23423', '234234', '1', 1, 1, '2024-03-15 02:00:41', '2024-03-15 02:00:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_buyers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `transaction` int(11) NOT NULL,
  `redeem` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `email`, `no_telp`, `status_buyers`, `outlet_id`, `transaction`, `redeem`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ubay', 'ubay@gmail.com', '1231213', 'active', 1, 1, 1, '2024-03-23 01:29:48', '$2y$10$ifXhXBNyAaiimfuWqcssq.Jha7zXER7o2vHwcvAE6oz8uwKEP/6iy', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `merchandises`
--

CREATE TABLE `merchandises` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `merchandises`
--

INSERT INTO `merchandises` (`id`, `name`, `value`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Jacket Merah', '20', 'Active', 'https://kualitasmerah.my.id/public/images/171193299644.png', '2024-03-14 09:42:52', '2024-04-01 01:18:21'),
(2, 'Topi Merah', '5', 'Active', 'https://kualitasmerah.my.id/public/images/171193311644.png', '2024-03-14 09:59:09', '2024-04-01 01:18:32'),
(3, 'T-shirt Merah', '5', 'Active', 'https://kualitasmerah.my.id/public/images/171193317944.png', '2024-03-15 05:20:29', '2024-04-01 01:15:06'),
(4, 'T-Shirt Putih', '5', 'Active', 'https://kualitasmerah.my.id/public/images/171193323344.png', '2024-03-15 05:20:48', '2024-04-01 01:15:14'),
(5, 'Zip Lock Merah', '10', 'Active', 'https://kualitasmerah.my.id/public/images/171193330944.png', '2024-03-15 05:21:09', '2024-04-01 01:18:44'),
(6, 'Raincoat Merah', '20', 'Active', 'https://kualitasmerah.my.id/public/images/171193338144.png', '2024-04-01 01:03:01', '2024-04-01 01:18:53'),
(7, 'Raincoat pouch', '10', 'Active', 'https://kualitasmerah.my.id/public/images/171193345144.png', '2024-04-01 01:04:11', '2024-04-01 01:15:49'),
(8, 'Hand towel', '5', 'Active', 'https://kualitasmerah.my.id/public/images/171193351944.png', '2024-04-01 01:05:19', '2024-04-01 01:05:19'),
(9, 'Lighter Case', '2', 'Active', 'https://kualitasmerah.my.id/public/images/171193359544.png', '2024-04-01 01:06:35', '2024-04-01 01:06:35'),
(10, 'Shoulder Bag', '20', 'Active', 'https://kualitasmerah.my.id/public/images/171193366044.png', '2024-04-01 01:07:40', '2024-04-01 01:07:40'),
(11, 'Totebag Merah', '3', 'Active', 'https://kualitasmerah.my.id/public/images/171193377244.png', '2024-04-01 01:09:32', '2024-04-01 01:09:32'),
(12, 'Totebag Putih', '3', 'Active', 'https://kualitasmerah.my.id/public/images/171193380044.png', '2024-04-01 01:10:00', '2024-04-01 01:10:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_25_062321_create_permission_tables', 1),
(7, '2022_06_29_144316_add_roles_to_users', 1),
(8, '2023_06_24_082813_create_campaigns_table', 1),
(9, '2023_06_26_133332_create_teams_table', 1),
(10, '2023_06_29_172321_create_team_members_table', 1),
(11, '2023_07_08_082720_create_qrs_table', 1),
(12, '2023_07_08_170159_create_filters_table', 1),
(13, '2023_07_09_085736_create_audiences_table', 1),
(14, '2023_07_09_133647_create_interactions_table', 1),
(15, '2023_07_11_070049_create_beerpongs_table', 1),
(16, '2023_07_11_070339_create_spinbottles_table', 1),
(17, '2023_07_11_165609_create_spinbottle_setups_table', 1),
(18, '2023_07_11_165807_create_beerpong_setups_table', 1),
(19, '2023_07_11_221504_create_beerpong_users_table', 1),
(20, '2023_07_20_071552_add_link_frontend_to_qrs_table', 1),
(21, '2023_07_20_171038_add_total_filter_to_qrs_table', 1),
(22, '2023_11_13_055012_crate_beerpong3ds_table', 1),
(23, '2023_11_13_055725_crate_beerpon3d_users_table', 1),
(24, '2023_11_13_055745_crate_beerpon3d_setups_table', 1),
(25, '2014_10_12_000000_create_buyers_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unicode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `area_id` int(11) DEFAULT NULL,
  `outlet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction` int(11) NOT NULL DEFAULT 0,
  `reedem` int(11) NOT NULL DEFAULT 0,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_start` date DEFAULT NULL,
  `program_stop` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_stock` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outlets`
--

INSERT INTO `outlets` (`id`, `unicode`, `area_id`, `outlet`, `tipe`, `transaction`, `reedem`, `alamat`, `program_start`, `program_stop`, `status`, `link`, `is_stock`, `created_at`, `updated_at`) VALUES
(1, '96c05a9', 2, 'Outlet Surabaya', 'Hotel', 0, 0, 'asd', '2024-03-21', '2024-03-14', 'Active', 'asd', 1, '2024-03-14 06:07:14', '2024-03-20 03:17:09'),
(2, '80a594a', 2, 'Resto Blitar', 'Restoran', 0, 0, 'Purwokerto, Srengat Blitar, Dsn Domot RT4 RW6', '2024-03-14', '2024-04-06', 'Active', 'https://kualitasmerah.my.id', 1, '2024-03-14 06:56:49', '2024-03-18 02:52:21'),
(3, 'ac394d6', 2, 'Semarang', 'Cafe', 7, 1, 'Purwokerto, Srengat Blitar, Dsn Domot RT4 RW6', '2024-03-15', '2024-03-15', 'Active', 'asdas', 1, '2024-03-15 14:04:25', '2024-03-27 14:30:58'),
(5, '584db47', 3, 'Jakarta', 'Cafe', 8, 3, 'MERDEKA BARAT', '2024-03-20', '2024-04-05', 'Active', 'http://127.0.0.1:8000/', 0, '2024-03-20 01:40:18', '2024-04-29 04:15:21'),
(6, '55176fa', 35, 'coba semarang', 'Restoran', 24, 4, 'jalan ajah', '2024-03-26', '2024-03-30', 'Active', NULL, 0, '2024-03-27 02:59:59', '2024-04-29 01:45:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `qrs`
--

CREATE TABLE `qrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unicode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status_qr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_frontend` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_filter` int(11) NOT NULL DEFAULT 0,
  `total_audience` int(11) NOT NULL DEFAULT 0,
  `total_spinbottle` int(11) NOT NULL DEFAULT 0,
  `total_beerpong` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'web', '2024-03-07 06:46:59', '2024-03-07 06:46:59'),
(2, 'USER', 'web', NULL, NULL),
(3, 'BUYERS', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `nama_program` varchar(255) DEFAULT '0',
  `brand` varchar(255) DEFAULT '0',
  `program` varchar(255) DEFAULT '0',
  `stampel` varchar(255) DEFAULT '0',
  `background_fe` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `nama_program`, `brand`, `program`, `stampel`, `background_fe`, `created_at`, `updated_at`) VALUES
(1, 'E-loyalty card', 'https://kualitasmerah.my.id/public/assets/img/fix/logo.png', 'https://kualitasmerah.my.id/public/assets/img/fix/text.png', 'https://kualitasmerah.my.id/public/assets/img/fix/stempel.png', 'https://kualitasmerah.my.id/public/assets/img/fix/bg.png', NULL, '2024-03-24 11:48:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) NOT NULL,
  `outlet_id` int(11) DEFAULT 0,
  `merchandise_id` int(11) DEFAULT 0,
  `jumlah_stock` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stocks`
--

INSERT INTO `stocks` (`id`, `outlet_id`, `merchandise_id`, `jumlah_stock`, `created_at`, `updated_at`) VALUES
(10, 2, 1, 1, '2024-03-15 06:59:33', '2024-03-15 06:59:33'),
(11, 2, 2, 2, '2024-03-15 06:59:33', '2024-03-15 06:59:33'),
(12, 2, 3, 3, '2024-03-15 06:59:33', '2024-03-15 06:59:33'),
(13, 2, 4, 4, '2024-03-15 06:59:33', '2024-03-15 06:59:33'),
(14, 2, 5, 5, '2024-03-15 06:59:33', '2024-03-15 06:59:33'),
(50, 1, 1, 3, '2024-03-20 03:17:09', '2024-03-20 03:17:09'),
(51, 1, 2, 3, '2024-03-20 03:17:09', '2024-03-20 03:17:09'),
(52, 1, 3, 3, '2024-03-20 03:17:09', '2024-03-20 03:17:09'),
(53, 1, 4, 3, '2024-03-20 03:17:09', '2024-03-20 03:17:09'),
(54, 1, 5, 4, '2024-03-20 03:17:09', '2024-03-20 03:17:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) NOT NULL,
  `outlet_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT 0,
  `stampel` int(11) DEFAULT 0,
  `tanggal_klaim` date DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `outlet_id`, `user_id`, `stampel`, `tanggal_klaim`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 1, NULL, '2024-03-16 05:40:00', '2024-03-16 05:40:01'),
(2, '1', 1, 1, NULL, '2024-03-24 04:17:13', NULL),
(3, '584db47', 11, 1, NULL, '2024-03-24 04:17:14', NULL),
(4, '584db47', 11, 1, NULL, '2024-03-23 09:50:59', '2024-03-23 09:50:59'),
(5, '584db47', 11, 1, NULL, '2024-03-23 09:51:21', '2024-03-23 09:51:21'),
(6, '584db47', 2, 1, NULL, '2024-03-24 02:24:49', '2024-03-24 04:46:06'),
(7, '584db47', 2, 1, NULL, '2024-03-24 02:26:13', '2024-03-24 04:46:06'),
(8, '584db47', 11, 1, NULL, '2024-03-24 02:26:46', '2024-03-24 04:46:06'),
(9, '584db47', 11, 1, NULL, '2024-03-24 02:28:21', '2024-03-24 04:47:03'),
(10, '584db47', 11, 1, NULL, '2024-03-24 02:47:23', '2024-03-24 04:47:03'),
(11, '584db47', 11, 1, NULL, '2024-03-24 02:49:23', '2024-03-24 04:47:03'),
(12, '584db47', 11, 1, NULL, '2024-03-24 02:50:18', '2024-03-24 02:50:18'),
(13, '584db47', 11, 1, NULL, '2024-03-24 02:51:06', '2024-03-24 02:51:06'),
(14, '584db47', 11, 1, NULL, '2024-03-24 02:54:09', '2024-03-24 02:54:09'),
(15, '584db47', 11, 5, NULL, '2024-03-24 03:27:27', '2024-03-24 05:14:01'),
(16, '584db47', 11, 5, NULL, '2024-03-24 03:31:11', '2024-03-24 05:14:01'),
(17, '584db47', 11, 5, NULL, '2024-03-24 03:44:30', '2024-03-24 05:14:01'),
(18, '584db47', 11, 2, NULL, '2024-03-24 04:03:42', '2024-03-24 05:36:09'),
(19, '584db47', 11, 2, NULL, '2024-03-24 04:46:35', '2024-03-24 05:36:09'),
(20, '584db47', 11, 2, NULL, '2024-03-24 05:40:12', '2024-03-27 05:59:11'),
(21, '584db47', 11, 2, NULL, '2024-03-24 05:43:33', '2024-03-27 06:01:01'),
(22, '584db47', 11, 2, NULL, '2024-03-24 05:44:01', '2024-03-27 06:07:02'),
(23, '584db47', 11, 2, NULL, '2024-03-27 04:00:03', '2024-03-27 06:07:02'),
(24, '55176fa', 21, 2, NULL, '2024-03-27 04:28:31', '2024-03-27 04:30:40'),
(25, '55176fa', 21, 2, NULL, '2024-03-27 04:29:23', '2024-03-27 16:10:09'),
(26, '55176fa', 21, 2, NULL, '2024-03-27 04:29:41', '2024-03-27 16:10:09'),
(27, '584db47', 11, 2, NULL, '2024-03-27 05:58:47', '2024-03-27 06:08:13'),
(28, 'ac394d6', 11, 2, NULL, '2024-03-27 14:03:20', '2024-03-27 14:16:41'),
(29, 'ac394d6', 11, 2, NULL, '2024-03-27 14:05:21', '2024-03-27 14:16:41'),
(30, '584db47', 11, 2, NULL, '2024-03-27 14:09:15', '2024-04-29 02:59:46'),
(31, 'ac394d6', 11, 2, NULL, '2024-03-27 14:12:10', '2024-03-27 14:16:41'),
(32, 'ac394d6', 11, 2, NULL, '2024-03-27 14:12:52', '2024-03-27 14:16:41'),
(33, 'ac394d6', 11, 2, NULL, '2024-03-27 14:17:13', '2024-03-27 14:30:58'),
(34, 'ac394d6', 11, 2, NULL, '2024-03-27 14:24:14', '2024-03-27 14:30:58'),
(35, 'ac394d6', 11, 0, NULL, '2024-03-27 14:24:39', '2024-03-27 14:24:39'),
(36, '55176fa', 28, 2, NULL, '2024-03-27 16:08:59', '2024-03-28 07:02:53'),
(37, '55176fa', 28, 2, NULL, '2024-03-27 16:09:31', '2024-03-28 07:02:53'),
(38, '55176fa', 31, 2, NULL, '2024-03-28 02:56:30', '2024-04-28 15:57:59'),
(39, '55176fa', 31, 2, NULL, '2024-03-28 02:56:49', '2024-04-28 15:57:59'),
(40, '55176fa', 31, 2, NULL, '2024-03-28 02:57:07', '2024-04-29 01:45:50'),
(41, '55176fa', 31, 2, NULL, '2024-03-28 02:57:41', '2024-04-29 01:45:50'),
(42, '55176fa', 31, 0, NULL, '2024-03-28 02:58:12', '2024-03-28 02:58:12'),
(43, '55176fa', 31, 0, NULL, '2024-03-28 03:00:25', '2024-03-28 03:00:25'),
(44, '55176fa', 31, 0, NULL, '2024-03-28 03:00:42', '2024-03-28 03:00:42'),
(45, '55176fa', 31, 0, NULL, '2024-03-28 03:01:16', '2024-03-28 03:01:16'),
(46, '55176fa', 31, 0, NULL, '2024-03-28 03:01:36', '2024-03-28 03:01:36'),
(47, '55176fa', 34, 0, NULL, '2024-03-28 07:02:06', '2024-03-28 07:02:06'),
(48, '55176fa', 34, 0, NULL, '2024-03-28 07:02:30', '2024-03-28 07:02:30'),
(49, '55176fa', 34, 0, NULL, '2024-03-28 07:03:45', '2024-03-28 07:03:45'),
(50, '55176fa', 40, 0, NULL, '2024-04-22 08:45:50', '2024-04-22 08:45:50'),
(51, '55176fa', 40, 0, NULL, '2024-04-22 08:46:18', '2024-04-22 08:46:18'),
(52, '55176fa', 43, 0, NULL, '2024-04-28 15:57:06', '2024-04-28 15:57:06'),
(53, '55176fa', 43, 0, NULL, '2024-04-28 15:57:25', '2024-04-28 15:57:25'),
(57, '584db47', 47, 2, NULL, '2024-04-29 03:16:29', '2024-04-29 03:17:59'),
(58, '584db47', 47, 2, NULL, '2024-04-29 03:16:50', '2024-04-29 03:17:59'),
(59, '584db47', 47, 0, '2024-04-29', '2024-04-29 03:22:24', '2024-04-29 03:22:24'),
(60, '584db47', 47, 0, '2024-04-29', '2024-04-29 03:48:07', '2024-04-29 03:48:07'),
(61, '584db47', 47, 0, '2024-04-29', '2024-04-29 04:15:21', '2024-04-29 04:15:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_buyers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `outlet_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('USER','ADMIN','BUYERS') COLLATE utf8mb4_unicode_ci DEFAULT 'USER',
  `transaction` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `stample` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `redeem` int(11) DEFAULT 0,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merek` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konfirmasi` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `no_telp`, `status_buyers`, `outlet_id`, `email_verified_at`, `password`, `roles`, `transaction`, `stample`, `redeem`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `jk`, `tgl_lahir`, `kota`, `merek`, `pekerjaan`, `hoby`, `avatar`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(2, 'Ubay', 'admin@gmail.com', NULL, NULL, 0, NULL, '$2y$10$ifXhXBNyAaiimfuWqcssq.Jha7zXER7o2vHwcvAE6oz8uwKEP/6iy', 'ADMIN', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://kualitasmerah.my.id/images/1711492463avatar.png', NULL, NULL, '2024-03-26 22:34:23'),
(4, 'asd', 'yasinyus@gmail.com', NULL, NULL, 1, NULL, '$2y$10$CsNd4jidE.o5rn0b.rcCseeMjBz2hJrAP58f3sQw2wOjmF5tXTpOK', 'ADMIN', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-20 01:30:37', '2024-03-20 01:30:37'),
(5, 'Yasin', 'as@gmail.com', NULL, NULL, 1, NULL, '$2y$10$XW3NG1NFJFJcuOVY1k0RkOn99aVxr9d1rMtUcxhDvdF20qnr4xG9W', 'USER', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-20 02:17:56', '2024-03-24 16:30:49'),
(6, 'yusuf', 'bb@gmail.com', NULL, NULL, 3, NULL, '$2y$10$q2cqS7I/kirl864bdVAgpe23091OjHWSxQ1Xq/zjAZiLmOgg4nkGu', 'USER', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-20 02:20:39', '2024-03-20 03:28:10'),
(7, 'asdasd', 'asdasd@asdasd.com', NULL, NULL, NULL, NULL, '$2y$10$K/rQR1P2bLXPAP7hdgd1beaPKjM48PHfm5eSTJtq1Jul.B8W3jCJy', 'USER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-23 01:55:34', '2024-03-23 01:55:34'),
(8, 'as', 'as@gmail.coms', NULL, NULL, NULL, NULL, '$2y$10$NvtTx39j8NwI./QgVkwrBu5aRZq47d7o5YEO.MIsiJWU2WxfiWIau', 'USER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-23 02:04:23', '2024-03-23 02:04:23'),
(9, 'Yasin', 'admin@gmail.comss', NULL, NULL, NULL, NULL, '$2y$10$RbMF8tWFV53bXbpmhxasqOVNGZXoozWZED2vbHmT46g/LJIwGNqxi', 'USER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-23 02:11:04', '2024-03-23 02:11:04'),
(10, 'Yasin Yusuf', 'jayautama@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$rkgkqn6Q5VjtFeiN0j9m7OIRDL05CRXLtPHVW7Pffyg9ucFnXCljy', 'USER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-23 07:15:59', '2024-03-23 07:15:59'),
(11, 'Yasin Yusuf', 'admin@amanah.coms', '085707104107', 'active', NULL, NULL, '$2y$10$L0wNnBPz0Dc6SR33CYamN.mSh6H6THPF.av9feeo9AhI1P67Cwuh2', 'BUYERS', '14', '0', 13, NULL, NULL, NULL, NULL, 'perempuan', '1995-01-31', 'Blitar', 'surya', 'Keryawan', 'Masaks', 'https://kualitasmerah.my.id/public/images/1711523699avatar.jpg', NULL, '2024-03-23 07:31:34', '2024-04-29 02:59:46'),
(12, 'andi', 'andi@gmail.com', '123123', 'active', NULL, NULL, '$2y$10$B0ly098hbwNJkFtY5/CCjeoFTSGlOPFGnXoywHhvU0VTQFIRKg3J2', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 06:00:47', '2024-03-24 06:00:47'),
(13, 'aa', 'aa@gmail.co', '123', 'active', NULL, NULL, '$2y$10$47FozAG5e/m17oonYEn0rOWKdY1qnbv.9ZCKzmBaxIXMFUUGzbzpe', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, 'laki-laki', '2024-03-24', 'Blitar', 'surya', 'Keryawan', 'Masak', NULL, NULL, '2024-03-24 06:04:33', '2024-03-24 06:13:09'),
(14, 'aas', 'aas@gmail.com', '123', 'active', NULL, NULL, '$2y$10$0lHgYMvK.iur72exEt.6UeKlZbJto2FwTt9khLPt6Dncgr5xZogx6', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 06:16:02', '2024-03-24 06:16:02'),
(15, 'we', 'we@gmail.com', '123', 'active', NULL, NULL, '$2y$10$FJbDU9D6gW/vAXpQ7aBpEuXfZtTAPVa4cIeOrZuAW0VrbR4oraHCG', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, 'laki-laki', '2024-03-24', 'Jakarta', 'Surya', 'Keryawan', 'Masak', NULL, NULL, '2024-03-24 06:17:37', '2024-03-24 06:25:22'),
(16, 'asd', 'wali@contoh.com', '085707104107', 'active', NULL, NULL, '$2y$10$Uu8bCIIBwkaWYENQiQ4xxel2wrqpTh6tmJH.QXDvAYk.bDVViggLu', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 17:48:26', '2024-03-24 17:48:26'),
(17, 'asd', 'wali@contoh.coms', '085707104107', 'active', NULL, NULL, '$2y$10$55YkBsrYcbpRQ14qvBhvbupu/UEaFIqcnvfj92AF0x9F3qrj/k8mq', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 17:52:30', '2024-03-24 17:52:30'),
(18, 'Rejeki', 'riezky@gmail.com', '082134028989', 'active', NULL, NULL, '$2y$10$95ruXC.fuhfrXMtGQ7cw6.ipOG16fqyN3yzNtbTVF/yLGNdpAdZAy', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-24 23:57:12', '2024-03-24 23:57:12'),
(19, 'fatim', 'fatima@gmail.com', '123', 'active', NULL, NULL, '$2y$10$X/Qc3y5t./GO4C/EIN2PzOz4vhx9aGajotXgUFW1JDZemWKQWHwAK', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, 'laki-laki', '2024-03-25', 'Blitar', 'surya', 'Keryawan', 'Masak', NULL, NULL, '2024-03-25 02:35:40', '2024-03-25 02:39:55'),
(20, 'riezky', 'admin@trial.com', '081111111111', 'active', NULL, NULL, '$2y$10$RL1k/en8eBNUAkZIu1ZtO.EjjYYdrf/XAu1bOyS2pA/EmPWzyiesq', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 05:00:40', '2024-03-25 05:00:40'),
(21, 'Riezky nyobain', 'trial@3sixty.id', '085640', 'active', NULL, NULL, '$2y$10$88Zwuej9ec4dxVSw3/VLkedGKHqjhle8QhcuT7CDXJlFOikkKQAoq', 'BUYERS', '3', '2', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 02:36:46', '2024-03-27 04:30:40'),
(22, 'Deby Chin', 'debychint02@gmail.com', '081617800084', 'active', NULL, NULL, '$2y$10$VH13Lchp8eAGCRN/Mh3MKOWnmqkOGypX2FBuTb1lUU9dzhzusHhNC', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 03:07:44', '2024-03-27 03:07:44'),
(23, 'yy', 'yy@yy.com', '123123', 'active', NULL, NULL, '$2y$10$rLZNDz4DeJWnQ8dxSyKFqONukXtFPCetuAvu3MU.yt8qChncPAaXi', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 03:09:12', '2024-03-27 03:09:12'),
(24, 'Andree Surya', 'andresuryapanuluh@gmail.com', '082242987759', 'active', NULL, NULL, '$2y$10$qh/i.GuaoRxEyLU7HLTlsePvO1q2qP/idMNC.0rAJ22vC.urbeHuy', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 04:16:48', '2024-03-27 04:16:48'),
(25, 'zaenal', 'kamisamasindicate@gmail.com', '089655470055', 'active', NULL, NULL, '$2y$10$.Mh2kGEj89cBvnymSSXQNOSQmIsiPSVdx.fGc57626TV1ABf/KJ46', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 05:40:55', '2024-03-27 05:40:55'),
(26, 'Coba saja aku', 'coba@mail.com', '088282828', 'active', NULL, NULL, '$2y$10$yxRwYNfwx9F.6hZTSnqB2.geH5kc3ndvKmUkUp1dwiQxUjw5EoH16', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, 'laki-laki', '2000-12-27', 'Semarang', 'Gg merah', 'Usaha', 'Memasak', NULL, NULL, '2024-03-27 11:48:01', '2024-03-27 11:49:00'),
(27, 'Sakina', 'ilmaamalia1309@gmail.com', '085878055557', 'active', NULL, NULL, '$2y$10$HcwPweLqSV0wjkcIRQhumOio0GCGIU7I9otyjrIGGYCsS2ZFarKrm', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 12:06:03', '2024-03-27 12:06:03'),
(28, 'Coba lagi', 'cobalagi@mail.com', '0000000', 'active', NULL, NULL, '$2y$10$HgVJXgaJrzBteQ1nOJHLA.zscbHCLf6DLeX/8c8865ut.CyLFcJwi', 'BUYERS', '2', '0', 1, NULL, NULL, NULL, NULL, 'laki-laki', '1981-05-27', 'Semarang', 'Gudang garam', 'Pengusaha', 'Masak', 'https://kualitasmerah.my.id/public/images/1711555618avatar.png', NULL, '2024-03-27 16:06:11', '2024-03-27 16:10:09'),
(29, 'Anto', 'antorach234@gmail.com', '085643512189', 'active', NULL, NULL, '$2y$10$2TPzNbB9cU2SukzrKG/GMOdFapnf5bePSxExTIxmNmbLxYpdj.0fy', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-27 16:14:01', '2024-03-27 16:14:01'),
(30, 'Rezeki', 'rezeki@halal.com', '082134444444', 'active', NULL, NULL, '$2y$10$l68Dm.LzkRNdfJdfd0IN9OLEiywfc4spw/cQmAlEbmtu3pvj.Z.Vu', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 02:49:05', '2024-03-28 02:49:05'),
(31, 'Rezeki elditya', 'riezky@3sixty.is', '000000000', 'active', NULL, NULL, '$2y$10$f1C/Bg74wMTj464AN3g.muRV1MpzrN2kI6IzpZu1Vh1YALnJN2ghW', 'BUYERS', '9', '9', 0, NULL, NULL, NULL, NULL, 'laki-laki', '2024-05-28', 'Semarang', 'Gudang garam', 'Wirausaha', 'Memasak', 'https://kualitasmerah.my.id/public/images/1711594523avatar.jpg', NULL, '2024-03-28 02:54:36', '2024-03-28 03:01:36'),
(32, 'Rizki Fadhillah', 'rizki.fadhillah1203@gmail.com', '085274175117', 'active', NULL, NULL, '$2y$10$qEUWnj24f3RGBtYk6zxETexBS11/LSNtXOlwNFdcehlFeV8PJUbQi', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 04:56:56', '2024-03-28 04:56:56'),
(33, 'riezky coba coba', 'cobaaja@gmail.com', '000000000', 'active', NULL, NULL, '$2y$10$qk2u4K9cWSCrIPUcMH43aOqzJY2Kdy7mq8MqVdNLkrFpknULDg6Fm', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 06:52:54', '2024-03-28 06:52:54'),
(34, 'Riezky', 'riezky@mail.com', '0000000', 'active', NULL, NULL, '$2y$10$h5tVtQ.mRWXPysXa/HXnn.C7u3Xbc/ArlVZYKypv3wK.8xKmkcjZa', 'BUYERS', '3', '1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-28 07:01:36', '2024-03-28 07:03:45'),
(35, 'Riezky', 'riezky@3sixty.id', '00000000000', 'active', NULL, NULL, '$2y$10$FafSrP9l273gp9BlGcAhnO.u/MiwDLyvYm9ToipwKs/fMWegeSHFG', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://kualitasmerah.my.id/public/images/1711934250avatar.jpg', NULL, '2024-04-01 00:58:08', '2024-04-01 01:17:30'),
(36, '123', 'yasinyus@gmail.comee', '1234567888', 'active', NULL, NULL, '$2y$10$iUdcKLo5n9/6ksZCyArSX.by8I7IQrBWGr5ZoeCgjYR7B7Qzq1jjO', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 09:32:25', '2024-04-01 09:32:25'),
(37, 'sff', 'yasinyus@gmail.comss', '123456', 'active', NULL, NULL, '$2y$10$W0klVH.PY75lc5g8Tg1zQ.W5d/VtWvLdfh6hYvy2kIgeWnLokehTG', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 09:52:48', '2024-04-01 09:52:48'),
(38, 'dfgdfgdfg', 'yasinyus@gmail.comdd', '123123', 'active', NULL, NULL, '$2y$10$V8J3FYzlvTkxGNaxFO8pnenejbrjtCS8Xtl4L56ayrxI7KcFO8eN2', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-01 09:59:39', '2024-04-01 09:59:39'),
(39, 'Riezky', 'ujicoba@3sixty.id', '0888888008', 'active', NULL, NULL, '$2y$10$XKgWsROUjexSywWi9cNWhOvys7k0c63ARjNy2PsfzBVEgngpBoyeC', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-16 01:36:17', '2024-04-16 01:36:17'),
(40, 'rie', 'testingtesting@gmail.com', NULL, 'active', NULL, NULL, '$2y$10$RnGFlgdztcS/xFkGFu/FEOjmou56RoxTwTzLhMCnvlsDbBMr5Fj32', 'BUYERS', '2', '2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://kualitasmerah.my.id/public/images/1713768368avatar.jpg', NULL, '2024-04-22 06:43:12', '2024-04-22 08:46:18'),
(41, 'ass', 'admin@gmail.comssss', '1231123345345', 'active', NULL, NULL, '$2y$10$VeY0qI3cGgEVCRfMrg7TB.8p/rvgQgp9BDFWXjMo.h8N4v.uveTau', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 06:50:18', '2024-04-22 06:50:18'),
(42, 'Cobalagi', 'cobalagi@gmail.com', '00000000', 'active', NULL, NULL, '$2y$10$kmpKz7iFDZ/OIlNRPDBB8uRJBtcY3Xz0iFNiJwPpheSYvLdjKvJyO', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-28 15:51:01', '2024-04-28 15:51:01'),
(43, 'Cobacoba', 'cobacoba@gmail.com', '00000000', 'active', NULL, NULL, '$2y$10$wDLt/u3u271avWuWwIFxpOut/KaRtxpaypDAO6EZJQNNUDx3NDT/y', 'BUYERS', '2', '0', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://kualitasmerah.my.id/public/images/1714319657avatar.jpg', NULL, '2024-04-28 15:53:48', '2024-04-28 15:57:59'),
(44, 'assd', 'asd@asd.coms', NULL, 'active', NULL, NULL, '$2y$10$6tPF8VSHRu2nXJhQxfEhqOaO6iKiq4jt1qePtektX7I1LwJyhKzfK', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 01:16:42', '2024-04-29 01:16:42'),
(45, 'asd', 'admin@gmail.comxcxc', NULL, 'active', NULL, NULL, '$2y$10$1icPDM6LnJenYcSX.rX22ukKONGsRt9E4rx3fBXRtlxhYkgIcukA6', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 01:27:33', '2024-04-29 01:27:33'),
(46, 'Zaenal', 'poinmerah@gmail.com', '089655470055', 'active', NULL, NULL, '$2y$10$pdXFssJFHmOn4MOWCVlse.zExLvGz7cPbzYIf0mPmba5BQ2YHgtVy', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-29 01:27:52', '2024-04-29 01:27:52'),
(47, 'Rezki', 'cobainyuk@gmail.com', NULL, 'active', NULL, NULL, '$2y$10$4JOgVByBSdgrw1epOz77Se04wPK43QggGHnvE7/dVGAFZq8YskgWy', 'BUYERS', '8', '3', 3, NULL, NULL, NULL, NULL, 'laki-laki', '1994-04-29', 'Semarang', 'Gg', 'Usaha', 'Memancing', 'https://kualitasmerah.my.id/public/images/1714354853avatar.jpg', NULL, '2024-04-29 01:40:13', '2024-04-29 04:15:21'),
(48, 'abcc', 'admin2@gmail.coms', '123123', 'active', NULL, NULL, '$2y$10$fuG9tlL/b4Wk.FdZgDr0VefX8auL5fhwdZIvQNsACmT9PZGvGQIz2', 'BUYERS', '0', '0', 0, NULL, NULL, NULL, NULL, 'laki-laki', '', 'jj', 'jj', 'jj', 'jj', NULL, NULL, '2024-04-29 01:49:59', '2024-04-29 02:01:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `audiences`
--
ALTER TABLE `audiences`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buyers_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `merchandises`
--
ALTER TABLE `merchandises`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `qrs`
--
ALTER TABLE `qrs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `audiences`
--
ALTER TABLE `audiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `merchandises`
--
ALTER TABLE `merchandises`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `qrs`
--
ALTER TABLE `qrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
