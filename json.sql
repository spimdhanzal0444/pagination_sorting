-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 09:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `json`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(10, 'Md', 'Hanzal', 'Hanzal@gmail.com', '123456'),
(14, 'Md', 'Jubaer', 'jubaer@gmail.com', '123456'),
(15, 'Meer', 'Jubaer', 'jubaer@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image`)),
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`title`)),
  `link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`link`)),
  `user_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '1' CHECK (json_valid(`user_id`)),
  `status` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'active' CHECK (json_valid(`status`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category`, `image`, `title`, `link`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Test Category', '[\"download.png\",\"download.png\",null]', '[\"blog title 1\",\"Title 1\",null]', '[\"link 1\",\"ww\",null]', '1', '[\"inactive\",\"inactive\",\"Set Status\"]', '2021-11-29 03:03:16', '2021-11-29 03:03:16'),
(4, 'Test Category 2', '[\"download.png\",\"download.png\",\"download.png\"]', '[\"test title 2\",\"Title 1\",\"blog title 2\"]', '[\"link 2\",\"link 1\",\"Link 2\"]', '1', '[\"inactive\",\"inactive\",\"active\"]', '2021-11-29 03:24:35', '2021-11-29 03:24:35');

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
(6, '2021_11_28_162930_create_blogs_table', 2),
(7, '2022_01_08_182408_create_paginates_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `paginates`
--

CREATE TABLE `paginates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paginates`
--

INSERT INTO `paginates` (`id`, `title`, `description`, `sort_description`, `created_at`, `updated_at`) VALUES
(1, 'Ms.', 'Vel eos laboriosam sed necessitatibus in incidunt neque. In nesciunt soluta beatae voluptatem qui consequatur. Voluptate et sint enim iste nesciunt sed ut.', 'Ex nisi enim qui voluptatem qui ut. Nihil voluptate doloribus quia voluptas. Tenetur quis libero libero id nobis modi. Amet est nobis aut.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(2, 'Prof.', 'Reiciendis fugiat esse asperiores. Iusto soluta odit ipsam deleniti quia. Iusto itaque velit quia et. Eum aliquid repellendus sunt et.', 'Quibusdam ut et ut sed. At nisi sapiente aut eum eligendi qui qui. Minus eos rerum ratione similique facilis quos blanditiis et. Fugiat et id labore velit vitae incidunt nesciunt.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(3, 'Miss', 'Aut porro quia illo quas laudantium provident est. Exercitationem deleniti iusto soluta quod. Facilis officia dolorem quo sit illo. Odio consectetur hic est nemo quos. Quas libero nesciunt et.', 'Non atque commodi non aut maiores eum. Velit quasi nobis nulla reprehenderit vero esse beatae. Omnis numquam et mollitia delectus quod soluta.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(4, 'Prof.', 'Sed aut dolorem dolorum minima accusantium. Sit praesentium deserunt eum nihil. Harum nobis sint vero corporis molestiae et voluptatibus. Quis aut error quo ducimus dolore debitis vitae eum.', 'Eveniet possimus accusamus et atque cum sequi dolorum. Aut distinctio temporibus qui fugiat voluptas minus nobis. Quisquam nemo veniam autem quibusdam aspernatur dolores.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(5, 'Dr.', 'Maxime cumque deserunt delectus aut occaecati eum. Sint iste voluptatibus omnis ut aut illum. Quas illo nisi maxime ratione. Aut assumenda excepturi et.', 'Culpa porro quas magni est. Voluptate distinctio et autem qui. Culpa et alias unde et iusto cupiditate at. Nihil quibusdam sit iste vitae nobis quo. Vel vel velit sunt perspiciatis autem.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(6, 'Dr.', 'Voluptatum fuga suscipit est enim accusantium. Consequatur est sed reprehenderit debitis quis aut tempora quis.', 'Voluptatem nesciunt adipisci qui consequuntur in explicabo quo. Dolorem dolorem itaque repudiandae sequi. Velit eos magnam omnis eligendi.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(7, 'Prof.', 'Est exercitationem dolore sed molestiae. Omnis facilis rerum eius. Iusto est temporibus vel magnam consequatur.', 'Dolores laborum vero minus quis. Hic laboriosam voluptas dolorem neque sed explicabo. Sed exercitationem eos nulla soluta. Porro et nihil magni nemo tenetur. Enim non aut vel doloremque beatae.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(8, 'Miss', 'Et perferendis odio molestiae sunt quo provident. Accusantium qui quaerat sequi non porro neque. Aspernatur earum quia est rerum quisquam. Animi laboriosam harum dolore quas et pariatur quidem.', 'Est dolor omnis necessitatibus consequuntur labore. Autem qui a consequuntur ut. Ut ullam voluptatibus eius eius quis reprehenderit culpa et.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(9, 'Miss', 'Consequatur ut praesentium omnis eos facilis sed doloremque. Omnis explicabo aut sit assumenda impedit veniam praesentium quos. Voluptas omnis architecto id recusandae autem.', 'Labore eveniet eveniet dolore vero quam fugit laborum at. Reprehenderit odio unde rerum ipsam.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(10, 'Dr.', 'Rerum quod ut illo minima mollitia a qui. Eos autem ad consequatur. Atque illum omnis quaerat rerum sint.', 'Quos dolore sint in dolor. Nobis voluptas eligendi ea corporis eum qui enim. Eaque aut perferendis deserunt aut necessitatibus est explicabo sint. Quaerat voluptatibus sit nulla maxime.', '2022-01-09 02:59:12', '2022-01-09 02:59:12'),
(11, 'Dr.', 'Aliquid omnis modi aut perspiciatis et nisi. Et possimus ipsum et quisquam.', 'Quam laboriosam sint illo esse. Accusantium tenetur dolores ad sit. Sequi nisi molestias explicabo tempora adipisci suscipit.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(12, 'Prof.', 'Et exercitationem tenetur molestiae. Sit corrupti et nihil excepturi praesentium enim est. Accusamus cum ut voluptas voluptate omnis et.', 'Officia dolorum pariatur tempora laudantium iure. Libero maiores ipsa alias debitis ipsam animi distinctio. Aut temporibus placeat iste perspiciatis. Perspiciatis architecto iste non nesciunt.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(13, 'Mr.', 'Et ex ullam est non. Quam quia occaecati harum doloribus velit repellendus deserunt. Autem quod aut veniam enim. Quam natus illo temporibus autem.', 'Vel est illum reiciendis sit enim. In dignissimos quo vero libero ab. Sapiente voluptatem vel a numquam et. Eveniet enim rerum aut dolor.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(14, 'Miss', 'Et corrupti at omnis. Deserunt culpa excepturi quae nam eaque animi sit. Est dolor rerum a voluptate.', 'Accusamus et omnis quis voluptatem. Molestiae perspiciatis possimus rem earum velit necessitatibus qui. Explicabo necessitatibus ipsum fugit atque quia non.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(15, 'Mr.', 'Doloribus explicabo quos maxime quod illo sunt. Dolor corporis tenetur dignissimos ullam. Et recusandae consequatur eius sed beatae.', 'Consequuntur fuga delectus saepe aut. Et error nesciunt qui quo rerum dolores accusamus consequuntur. Ut iste voluptas quia sed eum. Illum qui itaque cumque. Ut non eos rem a est.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(16, 'Ms.', 'Rerum enim repellendus aspernatur molestiae nostrum. Voluptatem amet possimus aut sunt. Quae commodi et autem aperiam mollitia et.', 'Laudantium iste enim voluptatem modi est sint. Mollitia et fuga omnis illum consequuntur repudiandae adipisci. Iste ipsum ullam omnis quasi.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(17, 'Mr.', 'Neque nihil facilis ut eos eos alias. Enim maxime libero officia quaerat libero. Illo molestias odio possimus consequatur tenetur ut ipsam culpa. Molestias cum ducimus fugit libero.', 'Ut eos sunt minima nam tempora tenetur. Et non ut tenetur quos. Quis vitae eum ut consequatur recusandae ut totam. Deserunt unde eius saepe placeat et dignissimos rerum.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(18, 'Ms.', 'Ea veniam eius eligendi et quasi alias. Dolorum sunt id ut voluptas.', 'Eius nobis id sint eum qui. Eligendi velit numquam nemo fuga.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(19, 'Miss', 'Et consequatur ipsum vel consequatur occaecati. Cupiditate quia velit neque est molestiae harum. Vel nostrum praesentium dolor dolores molestiae ad quidem. Qui illo quos dolorem voluptate.', 'Quo dolore excepturi ut velit rerum expedita. Nihil labore hic omnis. Sed sunt est voluptates quod. Soluta recusandae qui veritatis est aut cupiditate.', '2022-01-09 02:59:13', '2022-01-09 02:59:13'),
(20, 'Prof.', 'Dolorum dolores ipsum sit consequatur occaecati esse doloribus. Sit veritatis quia commodi temporibus animi. Numquam sunt vero nemo incidunt ut vel. Id id nesciunt ea iusto expedita.', 'Pariatur exercitationem voluptates et et ea debitis. Sed vel mollitia deleniti reiciendis. Quidem at blanditiis corporis nobis repudiandae ut ut. Sunt quo odio sint officia in aliquam.', '2022-01-09 02:59:13', '2022-01-09 02:59:13');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '123456', NULL, '2021-11-03 17:21:45', '2021-11-02 17:21:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `paginates`
--
ALTER TABLE `paginates`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paginates`
--
ALTER TABLE `paginates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
