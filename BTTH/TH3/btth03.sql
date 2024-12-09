-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2024 lúc 04:04 AM
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
-- Cơ sở dữ liệu: `btth03`
--

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
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `grade_level` enum('Pre-K','Kindergarten') NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`class_id`, `grade_level`, `room_number`, `created_at`, `updated_at`) VALUES
(1, 'Pre-K', '344', NULL, NULL),
(2, 'Kindergarten', '759', NULL, NULL),
(3, 'Kindergarten', '996', NULL, NULL),
(4, 'Kindergarten', '721', NULL, NULL),
(5, 'Pre-K', '932', NULL, NULL),
(6, 'Kindergarten', '620', NULL, NULL),
(7, 'Pre-K', '919', NULL, NULL),
(8, 'Kindergarten', '399', NULL, NULL),
(9, 'Kindergarten', '316', NULL, NULL),
(10, 'Kindergarten', '336', NULL, NULL),
(11, 'Pre-K', '525', NULL, NULL),
(12, 'Kindergarten', '679', NULL, NULL),
(13, 'Kindergarten', '347', NULL, NULL),
(14, 'Pre-K', '808', NULL, NULL),
(15, 'Kindergarten', '206', NULL, NULL),
(16, 'Kindergarten', '982', NULL, NULL),
(17, 'Pre-K', '617', NULL, NULL),
(18, 'Pre-K', '229', NULL, NULL),
(19, 'Kindergarten', '802', NULL, NULL),
(20, 'Kindergarten', '260', NULL, NULL),
(21, 'Kindergarten', '488', NULL, NULL),
(22, 'Pre-K', '491', NULL, NULL),
(23, 'Kindergarten', '598', NULL, NULL),
(24, 'Kindergarten', '687', NULL, NULL),
(25, 'Pre-K', '336', NULL, NULL),
(26, 'Kindergarten', '875', NULL, NULL),
(27, 'Kindergarten', '430', NULL, NULL),
(28, 'Pre-K', '368', NULL, NULL),
(29, 'Pre-K', '859', NULL, NULL),
(30, 'Pre-K', '492', NULL, NULL),
(31, 'Kindergarten', '704', NULL, NULL),
(32, 'Pre-K', '793', NULL, NULL),
(33, 'Pre-K', '472', NULL, NULL),
(34, 'Pre-K', '611', NULL, NULL),
(35, 'Kindergarten', '349', NULL, NULL),
(36, 'Kindergarten', '502', NULL, NULL),
(37, 'Kindergarten', '494', NULL, NULL),
(38, 'Kindergarten', '356', NULL, NULL),
(39, 'Kindergarten', '877', NULL, NULL),
(40, 'Pre-K', '901', NULL, NULL),
(41, 'Kindergarten', '909', NULL, NULL),
(42, 'Kindergarten', '716', NULL, NULL),
(43, 'Kindergarten', '653', NULL, NULL),
(44, 'Pre-K', '502', NULL, NULL),
(45, 'Pre-K', '416', NULL, NULL),
(46, 'Pre-K', '587', NULL, NULL),
(47, 'Pre-K', '810', NULL, NULL),
(48, 'Pre-K', '655', NULL, NULL),
(49, 'Kindergarten', '736', NULL, NULL),
(50, 'Kindergarten', '989', NULL, NULL),
(51, 'Pre-K', '970', NULL, NULL),
(52, 'Kindergarten', '109', NULL, NULL),
(53, 'Pre-K', '379', NULL, NULL),
(54, 'Pre-K', '281', NULL, NULL),
(55, 'Pre-K', '353', NULL, NULL),
(56, 'Pre-K', '436', NULL, NULL),
(57, 'Kindergarten', '952', NULL, NULL),
(58, 'Pre-K', '206', NULL, NULL),
(59, 'Pre-K', '938', NULL, NULL),
(60, 'Kindergarten', '977', NULL, NULL),
(61, 'Kindergarten', '459', NULL, NULL),
(62, 'Pre-K', '938', NULL, NULL),
(63, 'Kindergarten', '124', NULL, NULL),
(64, 'Kindergarten', '985', NULL, NULL),
(65, 'Pre-K', '669', NULL, NULL),
(66, 'Kindergarten', '711', NULL, NULL),
(67, 'Kindergarten', '872', NULL, NULL),
(68, 'Pre-K', '971', NULL, NULL),
(69, 'Pre-K', '861', NULL, NULL),
(70, 'Pre-K', '293', NULL, NULL),
(71, 'Kindergarten', '490', NULL, NULL),
(72, 'Kindergarten', '672', NULL, NULL),
(73, 'Pre-K', '990', NULL, NULL),
(74, 'Pre-K', '831', NULL, NULL),
(75, 'Kindergarten', '490', NULL, NULL),
(76, 'Pre-K', '111', NULL, NULL),
(77, 'Kindergarten', '168', NULL, NULL),
(78, 'Kindergarten', '552', NULL, NULL),
(79, 'Pre-K', '739', NULL, NULL),
(80, 'Kindergarten', '899', NULL, NULL),
(81, 'Pre-K', '284', NULL, NULL),
(82, 'Pre-K', '367', NULL, NULL),
(83, 'Kindergarten', '397', NULL, NULL),
(84, 'Pre-K', '151', NULL, NULL),
(85, 'Pre-K', '364', NULL, NULL),
(86, 'Kindergarten', '572', NULL, NULL),
(87, 'Pre-K', '862', NULL, NULL),
(88, 'Pre-K', '133', NULL, NULL),
(89, 'Kindergarten', '745', NULL, NULL),
(90, 'Kindergarten', '970', NULL, NULL),
(91, 'Pre-K', '723', NULL, NULL),
(92, 'Pre-K', '481', NULL, NULL),
(93, 'Kindergarten', '833', NULL, NULL),
(94, 'Pre-K', '921', NULL, NULL),
(95, 'Kindergarten', '533', NULL, NULL),
(96, 'Kindergarten', '734', NULL, NULL),
(97, 'Pre-K', '695', NULL, NULL),
(98, 'Pre-K', '242', NULL, NULL),
(99, 'Kindergarten', '541', NULL, NULL),
(100, 'Kindergarten', '700', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `computers`
--

CREATE TABLE `computers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `operating_system` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `memory` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `computers`
--

INSERT INTO `computers` (`id`, `computer_name`, `model`, `operating_system`, `processor`, `memory`, `available`) VALUES
(1, 'accusantium', 'laboriosam', 'odio', 'ea', 4, 0),
(2, 'eos', 'repellat', 'dolorum', 'ut', 16, 0),
(3, 'corporis', 'sit', 'ut', 'adipisci', 16, 0),
(4, 'aliquid', 'ut', 'quas', 'eos', 16, 1),
(5, 'sit', 'natus', 'est', 'delectus', 2, 1),
(6, 'ab', 'repellat', 'mollitia', 'dolore', 4, 0),
(7, 'dolor', 'eos', 'sunt', 'architecto', 16, 1),
(8, 'sit', 'commodi', 'id', 'in', 32, 1),
(9, 'non', 'rem', 'quibusdam', 'error', 2, 0),
(10, 'dolorum', 'consequatur', 'porro', 'ducimus', 64, 1),
(11, 'quod', 'est', 'est', 'nulla', 32, 0),
(12, 'sit', 'amet', 'harum', 'aut', 8, 1),
(13, 'laboriosam', 'vitae', 'enim', 'minima', 8, 0),
(14, 'nesciunt', 'et', 'cumque', 'quia', 4, 0),
(15, 'sapiente', 'culpa', 'ipsam', 'aut', 8, 0),
(16, 'temporibus', 'ratione', 'error', 'magni', 2, 1),
(17, 'sed', 'exercitationem', 'assumenda', 'nulla', 16, 1),
(18, 'quis', 'eum', 'quo', 'voluptatem', 8, 0),
(19, 'qui', 'ut', 'temporibus', 'quia', 32, 1),
(20, 'maxime', 'adipisci', 'animi', 'quia', 32, 1),
(21, 'exercitationem', 'quaerat', 'id', 'omnis', 32, 0),
(22, 'quia', 'architecto', 'expedita', 'impedit', 64, 1),
(23, 'vero', 'doloremque', 'voluptatum', 'quidem', 32, 1),
(24, 'labore', 'odio', 'aliquam', 'ipsum', 4, 0),
(25, 'perspiciatis', 'ut', 'eos', 'minus', 8, 1),
(26, 'debitis', 'ratione', 'possimus', 'mollitia', 2, 1),
(27, 'id', 'quia', 'voluptates', 'omnis', 32, 0),
(28, 'repellat', 'voluptatem', 'possimus', 'veniam', 64, 1),
(29, 'autem', 'atque', 'sit', 'atque', 8, 0),
(30, 'quia', 'eaque', 'aut', 'est', 64, 0),
(31, 'necessitatibus', 'fuga', 'minus', 'qui', 4, 1),
(32, 'rem', 'aliquam', 'quidem', 'iure', 32, 0),
(33, 'beatae', 'pariatur', 'suscipit', 'rerum', 2, 0),
(34, 'laboriosam', 'aut', 'amet', 'voluptates', 2, 1),
(35, 'eveniet', 'non', 'doloremque', 'aut', 2, 1),
(36, 'ut', 'rem', 'voluptatem', 'nostrum', 2, 0),
(37, 'a', 'non', 'recusandae', 'dolor', 64, 1),
(38, 'ab', 'est', 'natus', 'consectetur', 16, 1),
(39, 'quia', 'quod', 'ipsa', 'aut', 32, 0),
(40, 'eum', 'consequatur', 'voluptates', 'enim', 16, 1),
(41, 'velit', 'quibusdam', 'dolores', 'excepturi', 8, 0),
(42, 'doloremque', 'rerum', 'et', 'et', 2, 1),
(43, 'consectetur', 'modi', 'necessitatibus', 'et', 64, 0),
(44, 'laudantium', 'voluptatibus', 'culpa', 'mollitia', 64, 0),
(45, 'eius', 'itaque', 'quam', 'distinctio', 4, 1),
(46, 'aut', 'in', 'sequi', 'voluptate', 16, 0),
(47, 'tenetur', 'facere', 'dolor', 'quia', 8, 0),
(48, 'blanditiis', 'quaerat', 'officia', 'corrupti', 2, 0),
(49, 'error', 'et', 'debitis', 'magni', 32, 1),
(50, 'possimus', 'consequatur', 'odio', 'aspernatur', 32, 1);

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
-- Cấu trúc bảng cho bảng `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `reporter_by` varchar(255) NOT NULL,
  `reported_date` datetime NOT NULL,
  `description` text NOT NULL,
  `urgency` enum('Low','Medium','High') NOT NULL,
  `status` enum('Open','In Progress','Resolved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `issues`
--

INSERT INTO `issues` (`id`, `computer_id`, `reporter_by`, `reported_date`, `description`, `urgency`, `status`) VALUES
(1, 24, 'Xavier Schamberger', '2009-11-14 00:00:00', 'Et quisquam alias dolores alias culpa numquam. Quisquam quia dolor quo molestias fugit sequi. Omnis perspiciatis est dolores.', 'High', 'Resolved'),
(2, 40, 'Rosina Sawayn', '2002-02-09 00:00:00', 'Necessitatibus beatae nihil exercitationem voluptatem reprehenderit quia quia eaque. Nesciunt explicabo sint laboriosam iusto voluptates qui. Autem perspiciatis illo consequatur voluptatem.', 'High', 'In Progress'),
(3, 36, 'Maxime Schmeler', '2001-04-25 00:00:00', 'Commodi aperiam neque laborum in accusantium et est. Vero maiores placeat facilis velit quo facilis facere. Qui architecto consectetur non omnis officiis vitae.', 'High', 'In Progress'),
(4, 12, 'Deron Cronin', '2012-10-05 00:00:00', 'Perferendis quia a numquam cupiditate id dolorum aut nisi. Quo sint sit odit nobis laborum. Accusamus nesciunt ut et porro non ut repellendus. Quis dolorem sapiente aliquam reiciendis occaecati.', 'Medium', 'Open'),
(5, 10, 'Dr. Marina Batz IV', '2001-02-15 00:00:00', 'Ea quaerat voluptatem voluptatem quia tempore mollitia. Qui ad natus molestias reiciendis ut repellat ut. Quia quos veritatis repellendus consectetur magni beatae quia.', 'High', 'In Progress'),
(6, 46, 'Kamren Goyette', '2013-10-27 00:00:00', 'Excepturi cumque qui laboriosam nulla aut. Consequatur quia quidem et cum. Est magni esse dolor aut debitis dolorum dignissimos. Qui repellendus nemo quibusdam sit eos ut.', 'High', 'Resolved'),
(7, 24, 'Prof. Laurence VonRueden', '2001-02-20 00:00:00', 'Placeat animi et qui beatae quisquam corporis. Saepe est ipsa qui optio.', 'Low', 'In Progress'),
(8, 38, 'Minnie Mertz', '1984-10-17 00:00:00', 'Provident voluptatibus sit facilis mollitia beatae. Eligendi animi odit eum voluptatem.', 'Medium', 'In Progress'),
(9, 1, 'Prof. Cruz Morar', '2021-11-07 00:00:00', 'Natus quasi dolorem atque qui. Sint autem molestiae adipisci amet itaque. Dignissimos inventore reiciendis rerum officia nisi aliquid nemo. Voluptatem et velit dolore dolorem occaecati consequatur sunt. Unde quos enim expedita magnam officiis nihil voluptatem.', 'Low', 'In Progress'),
(10, 22, 'Christopher Haag', '1996-05-13 00:00:00', 'A ipsum ut accusantium modi explicabo id. Enim minima iure qui sed. Temporibus sit provident et. Perferendis fugit fuga magni necessitatibus sed magnam.', 'Low', 'Open'),
(11, 3, 'Clay Jacobs', '1978-07-12 00:00:00', 'Qui cumque ipsam recusandae quam illum rerum. Nobis praesentium culpa est quia beatae rem eum. Labore recusandae magnam quod eligendi blanditiis omnis deleniti. Minus maiores quis dolorum ut ullam.', 'High', 'Resolved'),
(12, 49, 'Dr. Linwood Rolfson Jr.', '1985-02-19 00:00:00', 'Sapiente corporis rerum maiores quod voluptatibus quos suscipit repudiandae. Molestias nemo quam sed et. Cupiditate assumenda inventore perferendis tenetur nihil non ad nobis.', 'High', 'In Progress'),
(13, 21, 'Vernie Bayer', '1975-03-08 00:00:00', 'Consequuntur adipisci perspiciatis voluptate laboriosam incidunt voluptas. Illum assumenda magnam magni quae pariatur voluptatum maxime. Sit occaecati dolorum omnis fuga dolores dolores et consectetur.', 'High', 'In Progress'),
(14, 39, 'Sim Cartwright I', '2010-07-10 00:00:00', 'Voluptate veniam et ut. Saepe sit aut vel voluptas saepe. Enim provident exercitationem aut qui dolore amet iusto omnis. Voluptatem cupiditate dolore quae saepe. Totam consequatur commodi iure itaque est.', 'High', 'Resolved'),
(15, 46, 'Monica VonRueden V', '1993-09-13 00:00:00', 'Eos ipsum labore ipsa modi. Eos natus velit ut aliquam. Cumque autem ut nesciunt sit nostrum.', 'Low', 'Open'),
(16, 20, 'Roma Pfeffer', '1984-09-12 00:00:00', 'Omnis exercitationem est dolores enim. Vel consectetur corrupti repellat soluta perferendis maxime. Modi et aut earum ipsam reiciendis. Nesciunt mollitia itaque dignissimos saepe quia rerum.', 'Medium', 'In Progress'),
(17, 16, 'Prof. Garfield Roob', '2020-02-26 00:00:00', 'Qui quasi esse eum. Eum velit quae cumque dolore natus ut quia ipsum. Doloremque quidem suscipit quo consequatur eos voluptatem.', 'Low', 'Resolved'),
(18, 48, 'Dr. Cristopher Weber DVM', '2009-11-10 00:00:00', 'Esse eos qui quo quo repellendus consequuntur excepturi. Rerum reiciendis aut consequuntur odio illo iste. Est illo ut inventore praesentium doloribus ut.', 'Medium', 'In Progress'),
(19, 10, 'Prof. Tess Stokes PhD', '1973-12-30 00:00:00', 'Id temporibus qui cupiditate sit qui ut dignissimos incidunt. Et dignissimos quo officia. Sequi nostrum tempora laborum consectetur. Quos vero quia ut voluptatem voluptatibus. Amet hic porro earum officia vel voluptatibus eius.', 'High', 'In Progress'),
(20, 44, 'Kaitlin Bernier', '2002-12-16 00:00:00', 'Eius voluptate nesciunt magni voluptates. Corrupti laborum officia velit quo suscipit earum. Numquam voluptates natus facilis et atque.', 'Low', 'In Progress'),
(21, 1, 'Eve Goyette', '2016-01-19 00:00:00', 'Cupiditate commodi consequatur adipisci quia. Soluta tempora sequi id culpa. Autem corporis repellendus magni perspiciatis laborum.', 'High', 'Open'),
(22, 21, 'Leif Wunsch', '2013-09-17 00:00:00', 'Voluptas qui maiores voluptas qui sit voluptatem. Repellendus et voluptate aperiam perferendis deleniti. Eaque repellendus consequatur et blanditiis voluptatibus. Consectetur dolores tempore vero.', 'High', 'In Progress'),
(23, 24, 'Amie White Sr.', '2015-04-11 00:00:00', 'Modi exercitationem velit aut dicta temporibus. Quis nulla occaecati perferendis nobis nemo dolor enim. Molestiae ut inventore id vel aut aut. Aut ut aliquid ab aut et.', 'Low', 'Resolved'),
(24, 9, 'Lisette Stoltenberg', '2021-12-12 00:00:00', 'Ex accusantium aspernatur nesciunt animi eveniet voluptates. Eius nisi qui doloremque et a. Nihil culpa quae illum et officia voluptatibus.', 'Low', 'Open'),
(25, 46, 'Jaylin Ernser', '2014-02-15 00:00:00', 'Neque autem est cumque similique sapiente non. Officia sed et sit quisquam sunt vitae. Consequatur cumque quia quidem nostrum iure perspiciatis. Incidunt recusandae repudiandae exercitationem odio.', 'Low', 'Resolved'),
(26, 30, 'Kimberly Abbott', '2012-05-13 00:00:00', 'Et consequatur nihil voluptatum est sapiente. Quo architecto vel nulla vero. Quisquam distinctio voluptate porro adipisci earum facere quia.', 'Low', 'In Progress'),
(27, 41, 'Ms. Rose Murphy', '2004-08-27 00:00:00', 'Ut magni tenetur ipsum et voluptas vel eveniet. Repudiandae exercitationem ipsum omnis eum nihil. Quaerat modi repellat iste doloribus. Ex in sed voluptas id impedit repudiandae dolor.', 'Low', 'In Progress'),
(28, 21, 'Mr. Evans Leannon III', '1994-05-02 00:00:00', 'Quae fuga voluptas eius aut. Eum voluptas deserunt ut voluptas quo. Laudantium qui in voluptatem modi. Amet impedit laudantium molestiae sequi reprehenderit.', 'Medium', 'Resolved'),
(29, 38, 'Lonie Wolf', '2023-08-04 00:00:00', 'Natus quis eum autem. Molestiae et temporibus perspiciatis autem et at libero. At ea ut corrupti facere ratione nulla assumenda omnis. Blanditiis consectetur aspernatur voluptate nemo.', 'Medium', 'Resolved'),
(30, 7, 'Kyla Harvey', '2007-08-01 00:00:00', 'Sunt sequi animi sed. Laborum quia aspernatur voluptas. Consequatur enim ea rem accusamus nihil accusantium.', 'Medium', 'Resolved'),
(31, 14, 'Mr. Lucas O\'Conner III', '2002-09-19 00:00:00', 'Iusto illo officia sed dolorem porro provident. Quo qui harum occaecati veritatis est. Soluta minus sed commodi rerum et doloribus. Rerum dolores aut ipsa suscipit vero.', 'Low', 'Resolved'),
(32, 50, 'Madaline Boyer', '1994-04-07 00:00:00', 'In nisi dicta veritatis aperiam. Eligendi repudiandae occaecati quas sed adipisci ut rem. Aut sint possimus omnis dolor quod. Velit quis illum doloribus iusto.', 'High', 'Open'),
(33, 15, 'Lance Cummings', '1978-01-05 00:00:00', 'Assumenda voluptatum aut saepe rerum sunt assumenda sed. Et consequuntur tempore quia assumenda et suscipit. Dolores atque distinctio neque qui beatae ea.', 'Medium', 'Resolved'),
(34, 15, 'Vivian Halvorson DVM', '1987-04-11 00:00:00', 'Est mollitia quia quos quo dolores optio. Est rerum laborum sapiente laudantium dicta quo ea. Voluptatem est ea qui autem et provident distinctio aut. Expedita quaerat sapiente consequatur cumque sunt dolores fugit.', 'Medium', 'In Progress'),
(35, 11, 'Doyle Stanton', '1974-08-02 00:00:00', 'A quis quidem eius rerum laboriosam nam quisquam. Et explicabo animi exercitationem voluptas corporis. Eaque est autem consequatur nihil mollitia est.', 'High', 'In Progress'),
(36, 23, 'Pierre Schultz', '2019-01-10 00:00:00', 'Eveniet aut libero atque optio illum sed. Ut aspernatur sit sed veniam. Qui quam perferendis qui qui in maxime. Necessitatibus provident porro laboriosam quo ipsam. Laboriosam eos hic vitae deserunt non.', 'Low', 'Open'),
(37, 40, 'Damon Casper', '2013-12-28 00:00:00', 'Ea aut consectetur qui autem similique qui. Et rerum illo voluptatem ex sint. Provident tenetur impedit aperiam magnam expedita. Id aut ratione eius ducimus.', 'Medium', 'In Progress'),
(38, 16, 'Edyth Klocko', '1992-03-02 00:00:00', 'Esse est aut rem. Ut assumenda sed velit ut. Itaque autem error reprehenderit similique. Quibusdam perferendis sed ipsa sint sed omnis quia.', 'Medium', 'Resolved'),
(39, 6, 'Annetta Tromp I', '1997-10-16 00:00:00', 'Nihil pariatur ad velit ut ullam quasi quis. Quia et incidunt necessitatibus sed recusandae.', 'Medium', 'Resolved'),
(40, 35, 'Charlie Green Jr.', '1985-06-07 00:00:00', 'In totam ut aspernatur quia facere consectetur. Suscipit suscipit totam natus et iusto culpa minima quia. Dolores perferendis ex maiores vel ipsam eum vitae labore. Accusamus vitae non reprehenderit minima.', 'Low', 'Resolved'),
(41, 17, 'Rozella Walsh', '2008-02-09 00:00:00', 'Quaerat doloremque exercitationem suscipit quae voluptas. Omnis consequatur porro distinctio sit omnis possimus. Doloribus molestiae soluta architecto modi consequatur eaque.', 'Medium', 'In Progress'),
(42, 26, 'Loren Grant II', '1985-05-07 00:00:00', 'Error sed enim est a. Omnis quidem veniam odio labore non odio omnis. Suscipit modi facilis enim voluptatum. Molestias facilis unde dignissimos praesentium assumenda.', 'Medium', 'In Progress'),
(43, 29, 'Haskell Dicki DDS', '2010-02-11 00:00:00', 'Ut fugit est consequuntur aperiam velit quasi. Est rem officia voluptas ea nesciunt qui reiciendis laudantium.', 'Medium', 'In Progress'),
(44, 38, 'Kenton Hammes', '1991-05-18 00:00:00', 'Sit est laudantium occaecati necessitatibus error unde similique. Non ea officiis sunt magnam. Expedita doloremque consequatur unde molestiae. Culpa dolore laboriosam inventore sit provident aut ipsam eius.', 'High', 'Resolved'),
(45, 30, 'Ms. Isobel Considine', '1989-07-25 00:00:00', 'Excepturi recusandae non corporis et repellat deleniti. Maiores dolorem reprehenderit dolor a qui. Dolores ut et corrupti suscipit vitae pariatur aperiam. Corporis eos quo repellat facere laborum quidem sed.', 'High', 'Open'),
(46, 24, 'Mrs. Rosalind Miller', '2004-02-05 00:00:00', 'Reprehenderit voluptatum praesentium maiores aut explicabo nisi laudantium. Adipisci ipsum magni quasi maiores in nostrum et. Qui sit tenetur et perspiciatis.', 'Low', 'Resolved'),
(47, 36, 'Marcella Sanford I', '1992-05-19 00:00:00', 'Inventore deleniti id consequuntur vel natus autem architecto. Expedita unde iusto reiciendis dolor nulla. Vitae fuga dolores ut beatae harum. Eos dolorum minima veritatis ipsa ea doloremque vero.', 'Low', 'Open'),
(48, 19, 'Freeda Parker', '1997-11-12 00:00:00', 'Doloremque qui soluta aut earum consequatur dolores. Ex id ut maiores. Et reprehenderit debitis cumque dolorem enim.', 'Medium', 'Open'),
(49, 23, 'Ned Tremblay', '2005-10-27 00:00:00', 'Quia similique exercitationem repellendus quia odio. Eligendi aut doloribus autem amet expedita fugiat cupiditate dolor. Explicabo ut dolore sit similique omnis. Ab rerum explicabo nihil soluta error.', 'High', 'Open'),
(50, 19, 'Kasandra Rolfson', '1980-06-10 00:00:00', 'Ut quaerat labore aut eos atque aut. Illum cum reprehenderit ducimus repellat repellat ratione et commodi. Consequatur quia ipsa illo reprehenderit pariatur enim.', 'Medium', 'Resolved');

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
-- Cấu trúc bảng cho bảng `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  `form` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `name`, `brand`, `dosage`, `form`, `price`, `stock`) VALUES
(1, 'Conor Sawayn', 'quia', 'quia', 'consequuntur', 765.60, 61),
(2, 'Miss Adele Koepp V', 'omnis', 'ut', 'recusandae', 107.70, 38),
(3, 'Lee Rohan', 'suscipit', 'non', 'accusamus', 833.96, 11),
(4, 'Merritt Toy', 'et', 'quae', 'sequi', 697.62, 19),
(5, 'Gail Bergnaum', 'enim', 'temporibus', 'quia', 704.18, 5),
(6, 'Dr. Deshaun O\'Keefe I', 'natus', 'et', 'facere', 277.19, 48),
(7, 'Tad Sanford', 'et', 'voluptatem', 'hic', 623.35, 98),
(8, 'Keanu Muller', 'repellendus', 'sit', 'illo', 184.65, 47),
(9, 'Maritza Johnson V', 'debitis', 'voluptas', 'eius', 317.33, 87),
(10, 'Jose Runolfsdottir', 'voluptatem', 'at', 'quis', 970.19, 67),
(11, 'Dr. Miller Reinger DVM', 'autem', 'labore', 'et', 104.31, 15),
(12, 'Abby Bayer', 'repudiandae', 'sunt', 'eius', 989.88, 39),
(13, 'Prof. Theresa Runolfsson', 'similique', 'corrupti', 'quae', 149.35, 87),
(14, 'Prof. Federico Johnson', 'voluptas', 'odit', 'reiciendis', 800.34, 69),
(15, 'Dina Schuppe', 'illo', 'atque', 'ab', 389.98, 90),
(16, 'Alyce Lebsack', 'quo', 'in', 'error', 734.07, 2),
(17, 'Dr. Green Greenholt', 'beatae', 'dolore', 'similique', 617.19, 90),
(18, 'Rosemary Johnson', 'blanditiis', 'voluptatum', 'sequi', 877.58, 61),
(19, 'Velma Schowalter', 'dolor', 'ex', 'reprehenderit', 196.01, 7),
(20, 'Jarret Daugherty', 'error', 'perspiciatis', 'eum', 263.43, 59),
(21, 'Juanita Becker Sr.', 'quo', 'odit', 'in', 476.02, 44),
(22, 'Emmie Ebert Sr.', 'sit', 'ipsam', 'cupiditate', 255.50, 39),
(23, 'Lonnie Wiza', 'culpa', 'occaecati', 'exercitationem', 38.60, 30),
(24, 'Mr. Darien Durgan PhD', 'laborum', 'quidem', 'at', 330.41, 50),
(25, 'Joseph Dicki', 'minus', 'laborum', 'reprehenderit', 952.86, 97),
(26, 'Prof. Trey Gaylord MD', 'sunt', 'non', 'sint', 155.80, 6),
(27, 'Kadin Goldner DVM', 'voluptatum', 'delectus', 'ipsum', 928.03, 24),
(28, 'Yazmin McKenzie', 'rerum', 'est', 'numquam', 253.72, 40),
(29, 'Prof. Juvenal Larkin Jr.', 'error', 'ut', 'beatae', 966.23, 63),
(30, 'Lawson Kulas', 'non', 'saepe', 'eum', 129.78, 81),
(31, 'Ms. Anissa Hand', 'possimus', 'adipisci', 'qui', 239.48, 12),
(32, 'Prof. Jessie McClure V', 'et', 'saepe', 'quia', 842.91, 83),
(33, 'Modesta Balistreri', 'fuga', 'magnam', 'iusto', 371.25, 2),
(34, 'Miss Gina Stokes III', 'rerum', 'aut', 'dolorem', 186.66, 16),
(35, 'Winston Harris', 'veritatis', 'omnis', 'et', 488.72, 21),
(36, 'Erna Witting', 'deserunt', 'et', 'et', 416.13, 32),
(37, 'Kasandra Schiller', 'rerum', 'accusantium', 'sint', 25.56, 15),
(38, 'Jefferey Altenwerth', 'mollitia', 'dolores', 'saepe', 148.62, 77),
(39, 'Juwan Beier IV', 'voluptatem', 'et', 'est', 637.88, 30),
(40, 'Tyrese Huel', 'illo', 'exercitationem', 'est', 239.26, 68),
(41, 'Stone Labadie', 'et', 'magni', 'consequuntur', 144.18, 98),
(42, 'Laura O\'Hara', 'minus', 'at', 'in', 697.25, 57),
(43, 'Josefa Feeney', 'inventore', 'architecto', 'porro', 811.33, 55),
(44, 'Enid McCullough I', 'aut', 'quod', 'voluptates', 536.74, 61),
(45, 'Nicole Walter', 'alias', 'et', 'labore', 892.08, 49),
(46, 'Prof. Madisyn Dibbert', 'voluptate', 'aut', 'molestias', 168.17, 71),
(47, 'Prof. Marquis Kemmer', 'voluptatem', 'quasi', 'architecto', 517.81, 15),
(48, 'Prof. Nedra Corwin', 'molestiae', 'voluptas', 'et', 900.30, 10),
(49, 'Archibald McLaughlin', 'omnis', 'numquam', 'perferendis', 195.07, 73),
(50, 'Assunta Romaguera', 'qui', 'aut', 'modi', 351.08, 28);

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
(4, '2024_12_09_004047_create_medicines_table', 1),
(5, '2024_12_09_004055_create_sales_table', 2),
(9, '2024_12_09_010438_drop_medicines_table', 4),
(10, '2024_12_09_010840_create_medicines_table', 5),
(62, '0001_01_01_000000_create_users_table', 6),
(63, '0001_01_01_000001_create_cache_table', 6),
(64, '0001_01_01_000002_create_jobs_table', 6),
(65, '2024_12_09_004126_create_classes_table', 6),
(66, '2024_12_09_004135_create_computers_table', 6),
(67, '2024_12_09_004144_create_issues_table', 6),
(68, '2024_12_09_011735_create_students_table', 6),
(69, '2024_12_09_013026_create_medicines_table', 6),
(70, '2024_12_09_013047_create_sales_table', 6);

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
-- Cấu trúc bảng cho bảng `sales`
--

CREATE TABLE `sales` (
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `sale_date` datetime NOT NULL,
  `customer_phone` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sales`
--

INSERT INTO `sales` (`sale_id`, `medicine_id`, `quantity`, `sale_date`, `customer_phone`, `created_at`, `updated_at`) VALUES
(1, 6, 62, '2009-04-15 00:00:00', '3728937257', NULL, NULL),
(2, 26, 92, '1999-03-24 00:00:00', '2307178586', NULL, NULL),
(3, 39, 33, '1970-08-29 00:00:00', '0872580136', NULL, NULL),
(4, 25, 71, '1992-05-28 00:00:00', '3343013764', NULL, NULL),
(5, 43, 36, '1982-05-22 00:00:00', '5461624990', NULL, NULL),
(6, 9, 43, '2018-08-02 00:00:00', '6669888065', NULL, NULL),
(7, 43, 78, '1974-08-04 00:00:00', '1879879226', NULL, NULL),
(8, 1, 60, '2006-04-14 00:00:00', '7683076191', NULL, NULL),
(9, 40, 78, '2013-08-06 00:00:00', '9398706848', NULL, NULL),
(10, 15, 96, '2010-05-06 00:00:00', '3609298858', NULL, NULL),
(11, 49, 33, '2015-07-22 00:00:00', '2225050685', NULL, NULL),
(12, 3, 73, '1996-12-09 00:00:00', '8724713334', NULL, NULL),
(13, 34, 52, '1997-02-03 00:00:00', '2269120607', NULL, NULL),
(14, 40, 68, '1974-04-23 00:00:00', '9318066343', NULL, NULL),
(15, 19, 97, '2003-05-23 00:00:00', '8731213651', NULL, NULL),
(16, 12, 73, '2024-11-15 00:00:00', '3341604622', NULL, NULL),
(17, 24, 86, '1972-12-23 00:00:00', '4686178237', NULL, NULL),
(18, 15, 33, '1999-05-23 00:00:00', '2930627310', NULL, NULL),
(19, 41, 52, '1981-07-06 00:00:00', '4520427067', NULL, NULL),
(20, 24, 54, '2015-06-20 00:00:00', '6058778300', NULL, NULL),
(21, 23, 46, '1988-08-08 00:00:00', '2613869366', NULL, NULL),
(22, 48, 93, '2012-09-28 00:00:00', '1125304911', NULL, NULL),
(23, 45, 81, '2016-12-23 00:00:00', '9601493379', NULL, NULL),
(24, 32, 94, '2005-03-31 00:00:00', '6715546826', NULL, NULL),
(25, 9, 45, '1998-05-02 00:00:00', '3460608004', NULL, NULL),
(26, 31, 2, '1980-09-19 00:00:00', '0142007374', NULL, NULL),
(27, 14, 98, '2007-03-14 00:00:00', '2702991029', NULL, NULL),
(28, 21, 14, '1981-05-15 00:00:00', '3953444096', NULL, NULL),
(29, 36, 65, '1979-12-24 00:00:00', '2660757536', NULL, NULL),
(30, 31, 24, '1990-10-23 00:00:00', '6522309083', NULL, NULL),
(31, 2, 48, '2013-10-06 00:00:00', '5784900961', NULL, NULL),
(32, 14, 99, '1994-04-08 00:00:00', '5443834675', NULL, NULL),
(33, 35, 52, '2022-06-06 00:00:00', '1948342115', NULL, NULL),
(34, 6, 17, '2001-05-13 00:00:00', '0132204056', NULL, NULL),
(35, 41, 99, '2016-08-28 00:00:00', '1341151501', NULL, NULL),
(36, 11, 64, '1973-08-13 00:00:00', '0124716105', NULL, NULL),
(37, 49, 97, '2024-02-03 00:00:00', '2132261561', NULL, NULL),
(38, 45, 22, '2023-04-11 00:00:00', '7066782812', NULL, NULL),
(39, 24, 2, '1972-11-02 00:00:00', '5538940705', NULL, NULL),
(40, 26, 5, '1977-12-17 00:00:00', '0923603347', NULL, NULL),
(41, 21, 97, '1990-05-22 00:00:00', '2711941957', NULL, NULL),
(42, 24, 52, '1986-04-24 00:00:00', '6224016494', NULL, NULL),
(43, 23, 59, '1972-11-29 00:00:00', '6933218968', NULL, NULL),
(44, 28, 46, '1973-06-16 00:00:00', '2960713704', NULL, NULL),
(45, 48, 92, '1992-06-04 00:00:00', '3292968597', NULL, NULL),
(46, 34, 52, '2022-12-19 00:00:00', '8234145666', NULL, NULL),
(47, 23, 53, '2010-12-20 00:00:00', '6933301151', NULL, NULL),
(48, 15, 38, '2024-09-08 00:00:00', '4184724869', NULL, NULL),
(49, 45, 77, '2024-03-02 00:00:00', '9808828712', NULL, NULL),
(50, 42, 10, '2024-05-13 00:00:00', '7844178448', NULL, NULL);

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
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `parent_phone` varchar(255) NOT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `date_of_birth`, `parent_phone`, `class_id`, `created_at`, `updated_at`) VALUES
(1, 'Gino', 'Volkman', '2022-10-28', '7984837741', 40, NULL, NULL),
(2, 'Laura', 'Boehm', '2009-09-08', '5940431798', 51, NULL, NULL),
(3, 'Tanya', 'Becker', '1980-04-27', '4236001320', 73, NULL, NULL),
(4, 'Cyrus', 'Heidenreich', '1972-12-20', '7060445273', 74, NULL, NULL),
(5, 'Jaylon', 'Ledner', '1972-04-29', '4640891869', 56, NULL, NULL),
(6, 'Vallie', 'Renner', '1988-08-08', '2957350663', 32, NULL, NULL),
(7, 'Reece', 'Kris', '1990-01-27', '2957182848', 54, NULL, NULL),
(8, 'Caitlyn', 'Marvin', '1984-11-01', '5916071687', 12, NULL, NULL),
(9, 'Ebony', 'Doyle', '1994-03-22', '8181555914', 18, NULL, NULL),
(10, 'Keely', 'Beahan', '2001-09-16', '6801368082', 2, NULL, NULL),
(11, 'Catalina', 'Walker', '2007-08-25', '2915171918', 65, NULL, NULL),
(12, 'Jesus', 'Reynolds', '2008-05-20', '0067398531', 100, NULL, NULL),
(13, 'Kassandra', 'Wisoky', '1999-10-26', '7771459412', 93, NULL, NULL),
(14, 'Kristoffer', 'Cartwright', '1992-09-28', '7664031066', 31, NULL, NULL),
(15, 'Javon', 'Hills', '1981-01-01', '9787274106', 35, NULL, NULL),
(16, 'Hillard', 'Crona', '1971-12-18', '9007296242', 40, NULL, NULL),
(17, 'Cory', 'Krajcik', '1994-08-06', '0786441575', 92, NULL, NULL),
(18, 'Phyllis', 'Kilback', '1982-01-19', '5838372972', 26, NULL, NULL),
(19, 'Zora', 'Bahringer', '1971-03-05', '2494133420', 78, NULL, NULL),
(20, 'Ara', 'Quitzon', '1989-12-21', '5550701679', 96, NULL, NULL),
(21, 'Alayna', 'O\'Kon', '2011-05-29', '9106802058', 41, NULL, NULL),
(22, 'Evangeline', 'Tremblay', '2007-06-29', '2389552581', 27, NULL, NULL),
(23, 'Danyka', 'Doyle', '1988-08-27', '8238471165', 53, NULL, NULL),
(24, 'Earline', 'Bruen', '2005-01-26', '8560087382', 87, NULL, NULL),
(25, 'Freda', 'Feeney', '2003-03-06', '1437480068', 49, NULL, NULL),
(26, 'Noemi', 'Gutmann', '2010-05-07', '3741248512', 49, NULL, NULL),
(27, 'Hardy', 'Bartell', '2014-06-18', '0174544830', 41, NULL, NULL),
(28, 'Vella', 'Harvey', '2017-01-05', '8696685650', 58, NULL, NULL),
(29, 'Allen', 'Ebert', '1971-02-18', '0436556076', 24, NULL, NULL),
(30, 'Chadd', 'Hills', '1976-08-05', '5004928674', 60, NULL, NULL),
(31, 'Rashawn', 'Cummings', '1998-04-28', '8345238278', 56, NULL, NULL),
(32, 'Vada', 'Cruickshank', '1984-03-24', '4201591114', 82, NULL, NULL),
(33, 'Bulah', 'Adams', '2015-01-08', '9867947578', 46, NULL, NULL),
(34, 'Ward', 'Dickens', '2009-11-26', '8366931961', 36, NULL, NULL),
(35, 'Creola', 'Purdy', '1992-04-06', '3274478599', 17, NULL, NULL),
(36, 'London', 'Dach', '1979-07-06', '4252978211', 31, NULL, NULL),
(37, 'Kelli', 'Legros', '2023-05-20', '3883707464', 88, NULL, NULL),
(38, 'Nicholaus', 'Ritchie', '2024-06-16', '9688057911', 44, NULL, NULL),
(39, 'Drew', 'Hansen', '2007-01-04', '8970151358', 93, NULL, NULL),
(40, 'Rosina', 'Ratke', '2013-08-19', '6650465095', 90, NULL, NULL),
(41, 'Teresa', 'Fahey', '2015-12-19', '1695481914', 55, NULL, NULL),
(42, 'Kassandra', 'Corwin', '2016-10-01', '4806857088', 25, NULL, NULL),
(43, 'Shirley', 'Altenwerth', '1987-11-21', '2845394562', 75, NULL, NULL),
(44, 'Stanford', 'Weber', '2001-04-12', '9725937078', 6, NULL, NULL),
(45, 'Stephanie', 'Kozey', '2000-09-21', '3773082647', 31, NULL, NULL),
(46, 'Neal', 'Stamm', '2021-08-08', '8196353216', 85, NULL, NULL),
(47, 'Roselyn', 'Stamm', '1983-10-01', '4350080465', 86, NULL, NULL),
(48, 'Lavada', 'Buckridge', '1978-05-16', '1231934526', 15, NULL, NULL),
(49, 'Guiseppe', 'Gleason', '2015-05-09', '8364122782', 18, NULL, NULL),
(50, 'Anya', 'Funk', '1996-09-14', '3970300310', 77, NULL, NULL);

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
-- Chỉ mục cho bảng `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Chỉ mục cho bảng `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_computer_id_foreign` (`computer_id`);

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
-- Chỉ mục cho bảng `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `sales_medicine_id_foreign` (`medicine_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_class_id_foreign` (`class_id`);

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
-- AUTO_INCREMENT cho bảng `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `computers`
--
ALTER TABLE `computers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`medicine_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
