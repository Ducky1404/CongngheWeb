-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2024 lúc 04:08 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btvn03`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `publication_year` year(4) NOT NULL,
  `book_genre` varchar(255) NOT NULL,
  `library_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_author`, `publication_year`, `book_genre`, `library_id`) VALUES
(1, 'Sister Ebert', 'Magnolia Effertz', '1977', 'Prof. Olaf Langosh', 3),
(2, 'Mr. Louvenia Langosh', 'Mrs. Cleta Reichel', '1976', 'Dulce Wintheiser', 1),
(3, 'Eloisa Rau', 'Prof. Yasmin Leuschke', '1980', 'Adella Lubowitz Jr.', 6),
(4, 'Citlalli Jakubowski', 'Elmira Kuhic', '2013', 'Marianna Stroman', 5),
(5, 'Mrs. Birdie Sauer', 'Madalyn Leannon', '2013', 'Jonathan West', 3),
(6, 'Simone Labadie', 'Gayle Wintheiser', '1999', 'Jeanette Ledner', 4),
(7, 'Andreanne Abernathy', 'Mona Herman', '1972', 'Annalise Reinger', 7),
(8, 'Paul Deckow', 'Brisa Cartwright', '1978', 'Mr. Lonzo Wolf II', 3),
(9, 'Tyrese Schiller', 'Freddy Kub', '1982', 'Prof. Theodore Cremin DVM', 4),
(10, 'Prof. Nikko Hessel', 'Alejandra Feeney', '1987', 'Hiram Gislason', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cinemas`
--

CREATE TABLE `cinemas` (
  `cinema_id` bigint(20) UNSIGNED NOT NULL,
  `cinema_name` varchar(255) NOT NULL,
  `cinema_address` varchar(255) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cinemas`
--

INSERT INTO `cinemas` (`cinema_id`, `cinema_name`, `cinema_address`, `total_seats`, `created_at`, `updated_at`) VALUES
(1, 'Petra Wolff', '2550 Douglas Fort Apt. 713\nNew Baronbury, VA 54496-7090', 1, NULL, NULL),
(2, 'Adella Sporer', '79950 Douglas Burgs Suite 974\nCamyllemouth, RI 15738', 4, NULL, NULL),
(3, 'Sammy Lockman', '23903 Vicente Coves Suite 679\nNorth Rhodaport, MD 61676', 0, NULL, NULL),
(4, 'Helga Rodriguez Sr.', '359 Marquardt Branch\nSouth Melisa, CO 11693', 1, NULL, NULL),
(5, 'Gust Schroeder', '3435 Mayer Bypass Suite 437\nMadgechester, NV 45845-6835', 7, NULL, NULL),
(6, 'Jimmie Bradtke', '98089 Claude Lock\nO\'Keefeview, NC 17320-6117', 8, NULL, NULL),
(7, 'Alysa Collier', '932 Lyla Springs Suite 802\nFlatleystad, NE 51629', 7, NULL, NULL),
(8, 'Prof. Flavie Lind I', '318 Little Ford\nHuelhaven, ME 78741', 4, NULL, NULL),
(9, 'Prof. Jay Tillman', '6406 Blanche Club\nWeimanntown, GA 21230-8382', 5, NULL, NULL),
(10, 'Napoleon Carter', '6923 Carmen Wall Apt. 046\nNew Bret, NE 41903', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hardware__devices`
--

CREATE TABLE `hardware__devices` (
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hardware__devices`
--

INSERT INTO `hardware__devices` (`device_id`, `device_name`, `device_type`, `status`, `center_id`, `created_at`, `updated_at`) VALUES
(1, 'Miss Magnolia Brakus DVM', 'Junius Bruen', 1, 2, NULL, NULL),
(2, 'Fletcher Ledner', 'Pat Hayes Sr.', 1, 3, NULL, NULL),
(3, 'Dr. Nicholaus Quitzon', 'Jewell Kling', 1, 1, NULL, NULL),
(4, 'Adriana Kihn', 'Ms. Emmalee Barrows', 1, 1, NULL, NULL),
(5, 'Gretchen Glover', 'Samara Hilpert', 0, 1, NULL, NULL),
(6, 'Natalia Hyatt', 'Monica Mann', 1, 3, NULL, NULL),
(7, 'Dr. Millie Terry', 'Arielle Denesik', 0, 4, NULL, NULL),
(8, 'Dallas Daniel Jr.', 'Elaina Hane', 0, 5, NULL, NULL),
(9, 'Dr. Zetta Haley', 'Spencer Walsh', 0, 1, NULL, NULL),
(10, 'Mrs. Annabelle Harber DVM', 'Prof. Kamren Koelpin', 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `i_t__centers`
--

CREATE TABLE `i_t__centers` (
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `center_name` varchar(255) NOT NULL,
  `center_address` varchar(255) NOT NULL,
  `center_email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `i_t__centers`
--

INSERT INTO `i_t__centers` (`center_id`, `center_name`, `center_address`, `center_email`, `created_at`, `updated_at`) VALUES
(1, 'Cristina Schimmel', '170 Morar Hollow\nSouth Aliciaberg, ME 89828', 'rohan.chanel@gmail.com', NULL, NULL),
(2, 'Concepcion Champlin', '3245 Amber Hill\nLake Demetrischester, CT 67862-4613', 'dawn05@hoppe.com', NULL, NULL),
(3, 'Mathias Kuhic', '288 Romaguera Cliffs\nNew Alysonfurt, IN 24283', 'marks.brook@hotmail.com', NULL, NULL),
(4, 'Dr. Waldo Wintheiser I', '5265 Jake Crescent Apt. 400\nMosciskiport, NM 09483', 'kariane03@gmail.com', NULL, NULL),
(5, 'Reynold Kemmer I', '96118 Kilback Extension Suite 329\nEast Elodyville, NH 17726', 'dratke@schuster.net', NULL, NULL),
(6, 'Lula Bechtelar MD', '2090 Hillard Port\nFadelview, WY 53232', 'ricky.leannon@kling.com', NULL, NULL),
(7, 'Jacquelyn Spencer IV', '81995 Onie Isle\nMrazmouth, PA 46518', 'jessica03@sauer.com', NULL, NULL),
(8, 'Heaven Rippin DVM', '86825 Jordi Skyway Apt. 013\nNorth Hassan, AZ 58401-7906', 'littel.jayda@schamberger.info', NULL, NULL),
(9, 'Princess Nolan II', '78505 Corine Mountains\nConradburgh, ND 24701-5960', 'veum.adella@hotmail.com', NULL, NULL),
(10, 'Prof. Torey Stoltenberg', '292 Cormier Valleys\nHayesview, LA 68743-4457', 'elinore84@runolfsdottir.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptops`
--

CREATE TABLE `laptops` (
  `laptop_id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `specifications` varchar(255) NOT NULL,
  `rental_status` tinyint(1) NOT NULL,
  `renter_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `laptops`
--

INSERT INTO `laptops` (`laptop_id`, `brand`, `model`, `specifications`, `rental_status`, `renter_id`, `created_at`, `updated_at`) VALUES
(1, 'Orrin Kemmer', 'Ms. Mara Bode DDS', 'Austen Torphy', 0, 8, NULL, NULL),
(2, 'Jordane Hintz', 'Ms. Ardith Okuneva PhD', 'Flo Mayer', 1, 3, NULL, NULL),
(3, 'Modesta Schumm', 'Mary Koch', 'Drew Wiegand V', 1, 10, NULL, NULL),
(4, 'Antonette Daugherty', 'Dr. Jo Spencer', 'Myron Grant', 1, 10, NULL, NULL),
(5, 'Tamara Harber', 'Estel Cartwright', 'Jazmyn Daniel', 0, 7, NULL, NULL),
(6, 'Miss Lue Larkin Jr.', 'Lou Walter', 'Dr. Brady Mante I', 1, 2, NULL, NULL),
(7, 'Dr. Heaven Connelly', 'Cindy Ritchie', 'Kraig Schiller', 1, 2, NULL, NULL),
(8, 'Madge Weimann', 'Tad Kutch', 'Dorcas Romaguera', 0, 2, NULL, NULL),
(9, 'Berneice Ryan', 'Sierra Kutch', 'Rickie Donnelly', 0, 8, NULL, NULL),
(10, 'Otha Hudson MD', 'Victor Wuckert V', 'Prof. Austyn Beier', 0, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `libraries`
--

CREATE TABLE `libraries` (
  `library_id` bigint(20) UNSIGNED NOT NULL,
  `library_name` varchar(255) NOT NULL,
  `library_address` varchar(255) NOT NULL,
  `library_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `libraries`
--

INSERT INTO `libraries` (`library_id`, `library_name`, `library_address`, `library_phone`, `created_at`, `updated_at`) VALUES
(1, 'Marques Hills', '389 Justyn Ports\nWest Hildaborough, NY 74787', '+12767152346', NULL, NULL),
(2, 'Gilbert Sporer', '5156 Katrina Ferry Apt. 788\nPort Herminiaburgh, WA 47429-4606', '1-330-643-7963', NULL, NULL),
(3, 'Shyann Hills', '2503 Isom Loaf\nMarquisbury, OH 47400', '1-267-532-2426', NULL, NULL),
(4, 'Miss Millie Schuster', '883 Beryl Forge\nNew Agustinchester, NY 81606', '720-304-2930', NULL, NULL),
(5, 'Prof. John Hackett IV', '53037 Oberbrunner Circles Suite 706\nEast Janiceview, MS 72669-5138', '419.318.1471', NULL, NULL),
(6, 'Benedict Emard IV', '598 Rosemarie Prairie Suite 020\nPort Aylashire, NV 15346-8536', '903.483.4077', NULL, NULL),
(7, 'Maureen Buckridge', '87663 Olson Row\nLake Ashlynn, OK 12289', '+1-856-661-3159', NULL, NULL),
(8, 'Dr. Selina Padberg PhD', '1900 Reginald Drives\nKaylaborough, IN 40814', '+1-651-787-4215', NULL, NULL),
(9, 'Ona Braun', '96354 Alysson Wall\nEast Eastonfurt, OK 70340-0851', '1-580-353-5169', NULL, NULL),
(10, 'Dr. Pat Lowe PhD', '605 Julius Mall\nFayburgh, WI 41511-5647', '401-851-0814', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_11_021249_create_libraries_table', 1),
(5, '2024_12_11_021311_create_books_table', 2),
(6, '2024_12_11_021322_create_renters_table', 2),
(7, '2024_12_11_021330_create_laptops_table', 3),
(8, '2024_12_11_021350_create_i_t__centers_table', 3),
(9, '2024_12_11_021416_create_hardware__devices_table', 4),
(10, '2024_12_11_021428_create_cinemas_table', 4),
(11, '2024_12_11_021434_create_movies_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `movie_director` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `cinema_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_title`, `movie_director`, `release_date`, `duration`, `cinema_id`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Raleigh Nienow', 'Prof. Paul Powlowski I', '1994-04-05', '0', 8, NULL, NULL),
(2, 'Grover Renner', 'Madaline Gutmann DVM', '2018-05-15', '7', 7, NULL, NULL),
(3, 'Daryl Mueller', 'Mrs. Vanessa McDermott', '2012-09-18', '8', 7, NULL, NULL),
(4, 'Romaine Hermann', 'Vicente Ziemann', '1980-04-14', '4', 4, NULL, NULL),
(5, 'Erika Lakin', 'Mikayla Wiegand', '2003-01-16', '6', 3, NULL, NULL),
(6, 'Mylene Mueller', 'Modesta Watsica Jr.', '2010-04-01', '4', 3, NULL, NULL),
(7, 'Adan Balistreri', 'Catharine Jones', '2006-04-29', '6', 4, NULL, NULL),
(8, 'Finn Stiedemann', 'Prof. Stacey Stanton V', '2004-01-17', '9', 10, NULL, NULL),
(9, 'Finn Boyle', 'Ebba Ernser', '1981-07-12', '5', 5, NULL, NULL),
(10, 'Ashly Erdman III', 'Eldred Stracke', '1975-10-05', '2', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `renters`
--

CREATE TABLE `renters` (
  `renter_id` bigint(20) UNSIGNED NOT NULL,
  `renter_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `renters`
--

INSERT INTO `renters` (`renter_id`, `renter_name`, `phone_number`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Kelly Kshlerin', '956-556-3657', 'felton.trantow@hotmail.com', NULL, NULL),
(2, 'Prof. Cheyanne Nitzsche V', '+19413055409', 'serena37@gmail.com', NULL, NULL),
(3, 'Lia Volkman', '+1-509-693-8092', 'gay.blanda@heathcote.com', NULL, NULL),
(4, 'Frederique Cremin I', '(559) 850-3922', 'lamar67@bailey.com', NULL, NULL),
(5, 'Katelynn Auer IV', '914.535.8873', 'abailey@jacobs.org', NULL, NULL),
(6, 'Dr. Ansel Reichert', '+1.507.945.9583', 'drice@lockman.net', NULL, NULL),
(7, 'Sarah Wilderman', '1-732-349-7578', 'haley.kaci@yahoo.com', NULL, NULL),
(8, 'Mr. Selmer Medhurst III', '212-687-3698', 'ervin.zboncak@bernhard.biz', NULL, NULL),
(9, 'Miss Eldora Runolfsdottir Sr.', '(445) 351-5797', 'christine.kshlerin@gmail.com', NULL, NULL),
(10, 'Mr. Tomas Rau', '1-563-213-3285', 'emerald01@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `books_library_id_foreign` (`library_id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hardware__devices`
--
ALTER TABLE `hardware__devices`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `hardware__devices_center_id_foreign` (`center_id`);

--
-- Chỉ mục cho bảng `i_t__centers`
--
ALTER TABLE `i_t__centers`
  ADD PRIMARY KEY (`center_id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`laptop_id`),
  ADD KEY `laptops_renter_id_foreign` (`renter_id`);

--
-- Chỉ mục cho bảng `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`library_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movies_cinema_id_foreign` (`cinema_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `renters`
--
ALTER TABLE `renters`
  ADD PRIMARY KEY (`renter_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `cinema_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hardware__devices`
--
ALTER TABLE `hardware__devices`
  MODIFY `device_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `i_t__centers`
--
ALTER TABLE `i_t__centers`
  MODIFY `center_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `laptops`
--
ALTER TABLE `laptops`
  MODIFY `laptop_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `libraries`
--
ALTER TABLE `libraries`
  MODIFY `library_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `renters`
--
ALTER TABLE `renters`
  MODIFY `renter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_library_id_foreign` FOREIGN KEY (`library_id`) REFERENCES `libraries` (`library_id`);

--
-- Các ràng buộc cho bảng `hardware__devices`
--
ALTER TABLE `hardware__devices`
  ADD CONSTRAINT `hardware__devices_center_id_foreign` FOREIGN KEY (`center_id`) REFERENCES `i_t__centers` (`center_id`);

--
-- Các ràng buộc cho bảng `laptops`
--
ALTER TABLE `laptops`
  ADD CONSTRAINT `laptops_renter_id_foreign` FOREIGN KEY (`renter_id`) REFERENCES `renters` (`renter_id`);

--
-- Các ràng buộc cho bảng `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_cinema_id_foreign` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
