-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sakatonik.answers: ~13 rows (approximately)
INSERT INTO `answers` (`id`, `question_id`, `answer`, `value`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 10, 'Tidak memiliki kondisi medis apapun', '2', NULL, '2023-04-05 01:55:41', '2023-04-05 04:29:33'),
	(2, 10, 'Diabetes mellitus', '1', NULL, '2023-04-05 01:55:41', '2023-04-05 04:29:33'),
	(3, 10, 'Hipertensi ', '1', NULL, '2023-04-05 01:55:41', '2023-04-05 04:29:33'),
	(4, 10, 'Penyakit jantung coroner', '1', NULL, '2023-04-05 01:55:41', '2023-04-05 04:29:33'),
	(59, 11, 'Jarang atau hampir tidak pernah dalam 1 bulan. (1-2 kali dalam 1 bulan)', '1', NULL, '2023-04-06 01:03:02', '2023-04-06 01:03:02'),
	(60, 11, 'Sering (lebih dari 3 kali dalam 1 bulan)', '1', NULL, '2023-04-06 01:03:02', '2023-04-06 01:03:02');

-- Dumping data for table sakatonik.failed_jobs: ~0 rows (approximately)

-- Dumping data for table sakatonik.guests: ~0 rows (approximately)

-- Dumping data for table sakatonik.migrations: ~16 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2022_06_25_062321_create_permission_tables', 1),
	(7, '2022_06_25_063012_create_categories_table', 1),
	(8, '2022_06_25_063114_create_posts_table', 1),
	(9, '2022_06_25_063615_create_events_table', 1),
	(10, '2022_06_25_215310_create_apiusers_table', 1),
	(11, '2022_06_29_144316_add_roles_to_users', 1),
	(12, '2023_03_22_152945_create_answers_table', 1),
	(13, '2023_03_22_162713_create_questions_table', 1),
	(14, '2023_03_23_093113_create_types_table', 1),
	(15, '2023_03_23_103541_create_guest_table', 1),
	(18, '2023_03_22_162713_create_results_table', 2),
	(19, '2023_03_23_093113_create_pharmacies_table', 3);

-- Dumping data for table sakatonik.model_has_permissions: ~0 rows (approximately)

-- Dumping data for table sakatonik.model_has_roles: ~0 rows (approximately)

-- Dumping data for table sakatonik.password_resets: ~0 rows (approximately)

-- Dumping data for table sakatonik.permissions: ~0 rows (approximately)

-- Dumping data for table sakatonik.personal_access_tokens: ~3 rows (approximately)
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\User', 1, 'authToken', '02da19485c83907a96b0dd5de03ceb476634b1815b5a8c40fddf8a70cde8c9eb', '["*"]', '2023-04-11 04:23:45', '2023-04-08 04:16:56', '2023-04-11 04:23:45'),
	(2, 'App\\Models\\User', 1, 'authToken', 'fb480db3c7ea5c90fec17cc3d9c54922bbf8a7866b4e1c7d634e18da0c2c53ca', '["*"]', NULL, '2023-04-08 07:49:02', '2023-04-08 07:49:02'),
	(3, 'App\\Models\\User', 1, 'authToken', 'eb2a1bce73eed20ad849d8fe07d3e689753539f758308cb556b883b9901c4509', '["*"]', NULL, '2023-04-10 01:46:18', '2023-04-10 01:46:18');

-- Dumping data for table sakatonik.pharmacies: ~3 rows (approximately)
INSERT INTO `pharmacies` (`id`, `name`, `address`, `city`, `country`, `contact`, `maps`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'aaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'IDN', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', NULL, NULL, '2023-04-06 06:21:15'),
	(2, 'bbbbbbbbbb', 'Purwokerto, Srengat Blitar', 'blitar', 'MAL', 'bbbbbbbbbbbbb', 'bbbbbbbbbbbbbb', NULL, '2023-04-06 06:32:23', '2023-04-06 06:32:46'),
	(3, 'Apotek punden sehat', 'Purwokerto, Srengat Blitar', 'blitar', 'IDN', '1231243245', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126919.23449107991!2d106.75421464519133!3d-6.2339012288771976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e59dca4ed7%3A0x2c172c1d623f4017!2sApotik%20New%20Djakarta!5e0!3m2!1sid!2sid!4v1681178962318!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', NULL, '2023-04-10 03:59:02', '2023-04-11 02:09:33');

-- Dumping data for table sakatonik.questions: ~19 rows (approximately)
INSERT INTO `questions` (`id`, `id_question_type`, `question`, `step`, `lang`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(3, 2, 'jus nikmat', 3, 'english', '2023-04-10 07:30:14', '2023-03-24 16:26:47', '2023-04-10 07:30:14'),
	(9, 5, 'Berapa usia Anda?', 1, 'bahasa', '2023-04-04 02:06:02', '2023-04-04 02:03:31', '2023-04-04 02:06:02'),
	(10, 6, 'Apakah Anda memiliki kondisi medis tertentu (seperti DM, Hipertensi, Jantung, dsb) yang mengharuskan konsumsi obat secara teratur?', 1, 'bahasa', NULL, '2023-04-04 02:06:54', '2023-04-04 02:06:54'),
	(11, 6, 'Seberapa sering Anda mengalami keluhan flu? (keluhan yang dimaksud adalah demam, batuk, pilek, badan terasa pegal-pegal atau tidak nyaman)', 1, 'bahasa', NULL, '2023-04-04 02:07:50', '2023-04-04 02:07:50'),
	(12, 6, 'Apakah Anda sering membeli dan mengonsumsi antibiotik tanpa resep dokter?', 1, 'bahasa', NULL, '2023-04-04 02:08:18', '2023-04-04 02:08:18'),
	(13, 7, 'Apakah Anda merokok?', 2, 'bahasa', NULL, '2023-04-05 01:20:28', '2023-04-05 01:20:28'),
	(14, 7, 'Berapa jam Anda tidur setiap harinya?', 2, 'bahasa', NULL, '2023-04-05 01:21:06', '2023-04-05 01:21:06'),
	(15, 7, 'Apakah Anda memiliki gangguan kesulitan untuk tidur (insomnia)?', 2, 'bahasa', NULL, '2023-04-05 01:46:56', '2023-04-05 01:46:56'),
	(16, 7, 'Apakah Anda sering merasa lelah meski sudah beristirahat cukup?', 2, 'bahasa', NULL, '2023-04-05 01:47:25', '2023-04-05 01:47:25'),
	(17, 7, 'Berapa kali Anda berolahraga dalam 1 minggu?', 2, 'bahasa', NULL, '2023-04-05 01:47:56', '2023-04-05 01:47:56'),
	(18, 7, 'Apakah Anda memiliki pola makan teratur dan selalu mengonsumsi makanan dengan gizi seimbang?', 2, 'bahasa', NULL, '2023-04-05 01:48:40', '2023-04-05 01:48:40'),
	(19, 7, 'Berapa jumlah cairan yang Anda konsumsi setiap harinya? (cairan bisa dalam bentuk air putih, susu, jus)', 2, 'bahasa', NULL, '2023-04-05 01:49:06', '2023-04-05 01:49:06'),
	(20, 8, 'Apakah Anda sering stres, penuh tekanan, diliputi kecemasan belakangan ini?', 3, 'bahasa', NULL, '2023-04-05 01:49:39', '2023-04-05 01:49:39'),
	(21, 8, 'Apakah Anda mengalami perubahan suasana hati (mood) misalnya mudah marah, mudah tersinggung, atau menjadi merasa sedih tanpa sebab?', 3, 'bahasa', NULL, '2023-04-05 01:50:02', '2023-04-05 01:50:02'),
	(22, 9, 'Bagaimana kebersihan/sanitasi di lingkungan tempat tinggal Anda?', 4, 'bahasa', NULL, '2023-04-05 01:50:35', '2023-04-05 01:50:35'),
	(23, 9, 'Bagaimana kebersihan/sanitasi di lingkungan tempat kerja Anda?', 4, 'bahasa', NULL, '2023-04-05 01:50:53', '2023-04-05 01:50:53'),
	(24, 9, 'Apakah sering terpapar polusi udara (asap dari kendaraan, pabrik, rokok)?', 4, 'bahasa', NULL, '2023-04-05 01:51:12', '2023-04-05 01:51:12'),
	(25, 9, 'Apakah Anda selalu mencuci tangan (misalnya sebelum menyiapkan makanan, setelah dari kamar mandi) ?', 4, 'bahasa', NULL, '2023-04-05 01:51:38', '2023-04-05 01:51:38'),
	(26, 5, 'Poke', 1, 'bahasa', '2023-04-06 01:09:43', '2023-04-05 06:53:01', '2023-04-06 01:09:43');

-- Dumping data for table sakatonik.results: ~13 rows (approximately)
INSERT INTO `results` (`id`, `result`, `grade`, `order`, `lang`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Selamat! Anda punya daya tahan tubuh yang baik. Namun, jangan lengah, pertahankan daya tahan tubuh Anda dengan cara-cara ini :', 'good', 1, 'bahasa', NULL, '2023-04-06 02:58:36', '2023-04-06 03:26:50'),
	(2, 'Selalu jaga kebersihan tubuh Anda dan juga lingkungan sekitar, ya.', 'good', 2, 'bahasa', NULL, '2023-04-06 03:00:24', '2023-04-06 03:00:24'),
	(3, 'Hindari terlalu sering begadang. Pastikan Anda cukup istirahat. Paling tidak, tidur selama 7-8 jam setiap harinya.', 'good', 3, 'bahasa', NULL, '2023-04-06 03:02:30', '2023-04-06 03:29:00'),
	(4, 'Pilih konsumsi makanan yang punya gizi seimbang dan tentunya dikonsumsi secara teratur.', 'good', 4, 'bahasa', NULL, '2023-04-10 03:25:19', '2023-04-10 03:25:19'),
	(5, 'angan lupa olahraga secara rutin. Ada baiknya Anda olahraga paling tidak 5 x 30 menit dalam seminggu. Kalau Anda olahraga kardio dengan intensitas ringan-sedang, coba lakukan  3 x 60 menit dalam seminggu. Sedangkan untuk olahraga kardio dengan intensitas sedang-berat, bisa dilakukan 3 x 25 menit dalam seminggu.', 'good', 5, 'bahasa', NULL, '2023-04-10 03:25:48', '2023-04-10 03:25:48'),
	(6, 'Konsumsi cairan secara rutin. Setidaknya 8 gelas air putih dalam sehari.', 'good', 6, 'bahasa', NULL, '2023-04-10 03:27:00', '2023-04-10 03:27:00'),
	(7, 'Saat Anda mulai merasa stres, coba tenangkan pikiran dengan relaksasi. Anda bisa melakukan aktivitas yang menyenangkan hati, misalnya jalani hobi.  Jangan lupa juga untuk selalu berpikiran positif.', 'good', 7, 'bahasa', NULL, '2023-04-10 03:27:35', '2023-04-10 03:27:35'),
	(8, 'Untuk tetap menjaga daya tahan tubuh, Anda disarankan vaksinasi tahunan. Misalnya, rutin vaksinasi influenza setiap tahun.', 'good', 8, 'bahasa', NULL, '2023-04-10 03:27:55', '2023-04-10 03:27:55'),
	(9, 'Untuk memperkuat imunitas tubuh, Anda bisa menambahkan konsumsi suplemen. Namun, jangan sembarangan memilihnya, ya. Anda harus teliti memeriksa komposisi kandungannya dan juga manfaatnya, seperti H2 Cordryceps Milliaris.', 'good', 9, 'bahasa', NULL, '2023-04-10 03:28:16', '2023-04-10 03:34:07'),
	(10, 'Anda masih punya pertanyaan seputar perkuat daya tahan tubuh? Tanyakan langsung ke para dokter lewat LiveChat klikdokter. \r\n(*Ajakan konsultasi kesehatan mengenai daya tahan tubuh di live chat Klikdokter*)', 'medium', 10, 'bahasa', NULL, '2023-04-10 03:28:41', '2023-04-10 03:34:15'),
	(11, 'Congratulations! You have a good immune system. However, do not be careless; maintain your immune system in these ways:\r\nAlways keep your body clean and also the surrounding environment, yes.', 'good', 1, 'english', NULL, '2023-04-10 03:35:46', '2023-04-10 03:35:46'),
	(12, 'Avoid staying up too often. Make sure you get enough rest. At least, sleep for 7-8 hours every day.', 'good', 2, 'english', NULL, '2023-04-10 03:36:25', '2023-04-10 03:36:25'),
	(13, 'Choose the consumption of foods that have balanced nutrition and, of course, must consume regularly.', 'good', 3, 'english', NULL, '2023-04-10 03:36:40', '2023-04-10 03:36:40');

-- Dumping data for table sakatonik.roles: ~0 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2023-03-24 00:29:05', '2023-03-24 00:29:05');

-- Dumping data for table sakatonik.role_has_permissions: ~0 rows (approximately)

-- Dumping data for table sakatonik.types: ~9 rows (approximately)
INSERT INTO `types` (`id`, `slug`, `type_name`, `lang`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'apa-kabar-disana', 'apa kabar disana', 'bahasa', '2023-03-28 02:54:46', '2023-03-24 00:31:31', '2023-03-28 02:54:46'),
	(2, 'jos-gandos-yo', 'jos gandos yo', 'english', '2023-03-28 03:51:25', '2023-03-24 00:38:36', '2023-03-28 03:51:25'),
	(3, 'makanan-sehat', 'Makanan Sehat', 'english', '2023-03-28 02:54:43', '2023-03-24 08:16:28', '2023-03-28 02:54:43'),
	(4, 'jos-gandos-yo', 'jos gandos yo', 'english', '2023-03-31 03:52:54', '2023-03-28 03:53:40', '2023-03-31 03:52:54'),
	(5, 'data-awal', 'Data Awal', 'bahasa', NULL, '2023-03-31 03:53:49', '2023-03-31 03:53:49'),
	(6, 'kesehatan-secara-umum', 'Kesehatan secara umum', 'bahasa', NULL, '2023-03-31 03:54:02', '2023-03-31 03:54:02'),
	(7, 'seputar-gaya-hidup', 'Seputar gaya hidup', 'bahasa', NULL, '2023-03-31 03:54:18', '2023-03-31 03:54:18'),
	(8, 'seputar-kesehatan-mental', 'Seputar kesehatan mental', 'bahasa', NULL, '2023-03-31 03:54:39', '2023-03-31 03:54:39'),
	(9, 'seputar-faktor-lingkungan', 'Seputar Faktor Lingkungan', 'bahasa', NULL, '2023-03-31 03:54:55', '2023-04-10 07:47:50');

-- Dumping data for table sakatonik.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Yasinyus', 'admin@gmail.com', NULL, '$2y$10$dblM8lJB7JHsFqUIKOOqEeqkcKQM4ZNDWRz2lysiupS0YjW0HDuri', 'ADMIN', NULL, NULL, NULL, 'crDDqQASluYXbodBqWJj2nNnt29Bjh6UDBxyxLpPRRT8cJoWBBW0Kg9cYi5l', '2023-03-24 00:29:05', '2023-03-24 00:29:05');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
