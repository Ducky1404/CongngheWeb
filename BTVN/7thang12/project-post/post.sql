-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2024_12_08_162011_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Et voluptas ad at nobis voluptas.', 'Impedit harum sapiente eum et aut. Non sit eum accusamus magnam pariatur quidem optio. Eaque aut et quas libero aspernatur ut.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(2, 'Cumque aliquam cupiditate voluptatem est totam.', 'Qui autem minus est et quis dolorum. Blanditiis asperiores natus consequuntur maiores. Dolorem quaerat vitae consectetur natus molestiae. Assumenda ipsam vero explicabo a.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(3, 'Porro error et rem incidunt.', 'Totam tempora ipsum qui animi quis quis consequatur iste. Commodi est praesentium voluptatum aut beatae quia assumenda nam. Distinctio qui neque laborum occaecati ut consequuntur. Velit id eos adipisci ipsum sunt perspiciatis.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(4, 'Voluptatibus omnis ea expedita.', 'Error itaque minus aut harum beatae. Repellat magni et aut laudantium omnis voluptatem. Veniam dolorem ex eos doloremque voluptas. Cumque recusandae beatae aut quaerat sint ut.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(5, 'Laudantium occaecati nesciunt sed.', 'Natus non illo aut harum quisquam sapiente molestias. Aliquid ut recusandae inventore voluptatum. Sit maxime provident itaque voluptas.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(6, 'Quos qui et nulla iure sit placeat.', 'A nisi ipsam nisi placeat. Ullam unde consequatur omnis voluptas omnis. Vitae rerum architecto est dolores. Quam sit vel vel sed vero. Quo soluta similique eos.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(7, 'Voluptas et quae enim.', 'Officiis exercitationem cumque sed molestiae. Ullam unde quis commodi eius dolorem est et possimus. Magni voluptatem optio quis et. Tempore modi consectetur corporis laborum.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(8, 'Explicabo qui sed numquam.', 'Sit sit molestiae maxime delectus quibusdam deserunt. Perspiciatis facere molestiae voluptatem voluptatem et. Dolores at ut alias. Omnis facilis voluptas quo ut velit debitis.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(9, 'Id nihil soluta voluptatum ex.', 'Tenetur voluptatum nemo deserunt doloremque aliquid in. Quidem provident perferendis ea accusantium nemo vel. Rerum magni molestiae facilis excepturi dignissimos fugiat. Eius aut nam est ex neque in officiis. Et aliquid autem rerum labore dolor distinctio iure. Accusantium dolores vero enim ut.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(10, 'Enim molestiae placeat corrupti dolorum voluptatum est.', 'Magnam dolorem aut eveniet eos. Autem nostrum recusandae exercitationem aut maiores. Aspernatur error ut mollitia consequatur architecto. Dolore adipisci nam quia quis iusto. Dolorum non praesentium qui.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(11, 'Cumque non nobis quo consectetur suscipit nostrum.', 'Doloremque error optio qui ut. Eius eligendi nobis id rem odit modi. Vel sequi qui aspernatur incidunt rerum delectus sed harum. In aut eos soluta et.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(12, 'Ut placeat excepturi est eaque.', 'Sint deserunt laudantium saepe soluta eos rerum. Voluptatibus vel culpa quidem cumque. Quae adipisci aliquid illo modi repellendus.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(13, 'Quam sunt similique ullam necessitatibus.', 'Est ad officiis tempora vel. Libero qui aut maiores et. Cumque iure aperiam laborum sit totam quo enim. Quam sit laborum voluptates aspernatur iste ducimus.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(14, 'Occaecati quasi maxime dicta officiis similique.', 'Ratione voluptatem sequi recusandae vitae veniam distinctio dolor error. Quaerat sit voluptate deleniti aperiam voluptatum nobis molestiae. Qui ex temporibus aspernatur rerum exercitationem dolorem blanditiis. Repudiandae nihil qui et ut quisquam.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(15, 'Error aperiam minus id quia laborum.', 'Iure consequatur provident qui dolor commodi ducimus. Pariatur veritatis officia est nihil. Aut beatae itaque molestias ex consequuntur illo. Saepe rerum laborum incidunt ab et ipsa facere. Doloremque velit non omnis totam. Sint rerum ratione maxime quas.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(16, 'Veniam voluptatem voluptatem et.', 'Architecto doloremque et iure omnis id minus quia. Quia aut qui dolore ducimus culpa. Enim ut nihil ab porro ad dignissimos eaque mollitia.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(17, 'Dolores quia enim doloremque illo quae sed.', 'Pariatur ut dolorem quo temporibus aspernatur iusto qui. Dolore ut omnis consequatur. Necessitatibus qui maxime sed. Tempore veniam ut minima adipisci.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(18, 'Rerum temporibus vel iusto quos expedita.', 'Ut eligendi veritatis rerum. Distinctio voluptatem labore rem molestias similique. Rerum ea autem ullam sed dolores alias et.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(19, 'Explicabo quo labore dolorum eum sequi.', 'Sunt voluptas nihil dignissimos deserunt qui sapiente. Iusto praesentium labore iusto. Omnis dolore at libero nemo qui eius esse. Rerum voluptates et qui ducimus id labore consequuntur et. Incidunt optio velit impedit error laboriosam placeat eos.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(20, 'Voluptates dolorem et accusamus id nam non.', 'Amet error sit vel quae. Exercitationem tenetur animi itaque modi consectetur pariatur architecto. Fugiat culpa occaecati est reprehenderit nihil et voluptatem. Facere aliquid dicta consequatur ipsum sit veritatis.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(21, 'Porro aperiam odit iusto laboriosam.', 'Ea velit et corporis. Vero illum reprehenderit fuga. Consectetur saepe porro reiciendis quidem eligendi et. Itaque similique repellendus quidem dolores ipsum. Et quis distinctio velit quo repellat. Doloribus quasi consectetur non non dolores molestiae.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(22, 'Et molestiae necessitatibus qui nostrum esse soluta.', 'Totam ut quod autem dolorem dignissimos. Dolor ad in animi asperiores cum. Qui dolorem nulla sit maxime enim aut. Id autem aliquam asperiores qui. Et debitis non qui atque facere ut. Sapiente dolor animi architecto ea repellat.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(23, 'Deleniti dolores voluptas qui qui.', 'Ipsum vitae ex consequuntur inventore et officiis. Dignissimos delectus veritatis quibusdam aut ea. Est quos minus optio consequatur.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(24, 'Aperiam voluptas quo qui facilis.', 'Cum alias cupiditate consequatur dolor impedit laborum perspiciatis impedit. Iusto nesciunt iure non laboriosam ut voluptate. Exercitationem nulla aliquid deserunt quaerat. Illo itaque dicta reiciendis molestiae. Consectetur magni dolores labore error harum aut illum.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(25, 'Voluptate fugiat tenetur molestiae fuga consequuntur voluptatum.', 'Assumenda ad molestias cumque quam quis velit. Quia eos voluptatem quisquam minima velit. Est odit rerum esse nihil illo. Dolores adipisci corrupti exercitationem.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(26, 'Ea dolores et ut minima.', 'Doloremque praesentium atque velit hic doloremque est iste. Eius et libero illum est laboriosam voluptas laborum. Repellat deserunt voluptatum dolor sed. Omnis et et sequi quia eos et.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(27, 'Et dolores velit voluptate aut reprehenderit.', 'Reprehenderit suscipit est recusandae qui impedit repellendus. Consectetur culpa sapiente inventore quidem. Qui quisquam enim alias quos veniam in eum. Inventore est et quaerat. Ut consequatur tempore placeat doloremque aliquam iure voluptatem qui.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(28, 'Libero est voluptatibus eum.', 'Ullam dolores dolorem culpa tempora. Harum et quia et saepe ab veritatis. Adipisci cum tempora magni ut fugit magnam. Ab quia et quae ex odio. Molestiae laboriosam numquam porro.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(29, 'Sint ducimus nostrum quisquam.', 'Nihil mollitia sunt eaque dolore rerum soluta. Est laborum quasi est accusantium voluptatem deleniti. Qui sunt porro commodi est qui qui possimus. Atque voluptas ipsam officiis saepe expedita ipsam sit beatae. Voluptatem placeat earum qui. Autem blanditiis rerum eligendi autem sit est inventore qui.', '2024-12-08 09:48:23', '2024-12-08 09:48:23'),
(30, 'Vel nulla laudantium quo.', 'Sunt modi qui aspernatur soluta repellendus. Quibusdam fuga aspernatur consequatur et. Repellat voluptate totam voluptas maiores iusto rerum excepturi. Molestiae molestiae cum rerum et accusantium harum.', '2024-12-08 09:48:23', '2024-12-08 09:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
