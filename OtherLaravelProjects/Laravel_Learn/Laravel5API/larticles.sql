-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 10:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larticles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Mark Test Title', 'Test Body', '2018-01-01 21:31:43', '2018-01-01 22:27:05'),
(2, 'Eveniet et molestiae maxime possimus.', 'Dolor culpa neque odio vel sint beatae qui. Nam sed a eum eos repellendus beatae. Est nesciunt praesentium nostrum eum et assumenda explicabo. Animi nemo earum quam.', '2018-01-01 21:31:43', '2018-01-01 21:31:43'),
(3, 'Quibusdam commodi debitis eos aut deserunt eum.', 'Dolor voluptatem fugiat ut ut asperiores. Fuga est mollitia numquam inventore iste. Odio asperiores eius enim harum est odit.', '2018-01-01 21:31:43', '2018-01-01 21:31:43'),
(4, 'Autem et et quis veniam non exercitationem.', 'Amet earum iusto velit molestiae quidem maxime. Facilis corrupti odio sed consequatur.', '2018-01-01 21:31:43', '2018-01-01 21:31:43'),
(6, 'Et qui labore quidem vel.', 'Aut ut eligendi dolorem nisi. Rerum magni vero sit. Aut corporis repudiandae similique assumenda voluptas. Libero corporis ea aut sunt neque atque.', '2018-01-01 21:31:43', '2018-01-01 21:31:43'),
(7, 'In sequi consequatur nobis dolorem.', 'Voluptates iusto rem omnis repellat aliquam. Quos magni ut eaque quis illum. Et dicta rem est distinctio aut cumque consequatur.', '2018-01-01 21:31:43', '2018-01-01 21:31:43'),
(8, 'Id et molestias cumque ducimus nihil cum.', 'Provident sint qui perspiciatis quisquam commodi quia incidunt. Dolore eos ducimus dignissimos sit. Nulla laborum voluptas qui dolores odit. Ipsum autem nulla vel aspernatur commodi qui quia.', '2018-01-01 21:31:43', '2018-01-01 21:31:43'),
(9, 'Fugit neque impedit quia.', 'Et ab deleniti quia temporibus. Perspiciatis quisquam adipisci aliquam atque. Corporis sint harum fugit eaque. Est omnis aliquid neque ut ut.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(10, 'Id qui sint adipisci cumque autem est cupiditate.', 'Illum aperiam velit impedit velit et autem velit dolores. Vero velit impedit sequi eveniet vel perferendis fuga.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(11, 'Dicta qui quis voluptate illo dolor ut.', 'Magni omnis nobis nihil eius. Deleniti alias ea autem rerum beatae ea laboriosam est. Quis maxime laudantium mollitia eligendi. Hic ut non earum et beatae.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(12, 'Sint saepe sint commodi quidem.', 'Et voluptatibus voluptatibus sunt quos sunt culpa dignissimos. Quas consequatur perferendis saepe quasi accusamus culpa. Occaecati facilis accusantium omnis sit accusamus non.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(13, 'Ut in nisi ipsam possimus dolor provident natus.', 'Necessitatibus impedit sed excepturi. Voluptatem ad cupiditate debitis cum earum suscipit libero debitis. Sit amet aliquam odit aperiam.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(14, 'Ut quod aut nam et. Vero qui ab et.', 'Unde et est sed et aspernatur modi vel. Cum aut in maxime explicabo ullam sunt voluptas reprehenderit. Magni et ullam animi placeat rem architecto.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(15, 'Reprehenderit amet officiis et tempora in.', 'Neque est eum optio error. Mollitia provident quis qui suscipit quaerat.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(16, 'Cum expedita error molestiae aperiam.', 'Voluptas ipsum ab molestiae repellat et fuga harum. Fugit dolore consequuntur voluptas aut voluptatem fugiat. Nobis corporis id iusto quia.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(17, 'Autem consequatur est minus praesentium quaerat.', 'Modi soluta perspiciatis odit perferendis autem. Saepe vel enim eos iure vero. Perspiciatis molestias facilis perspiciatis quia voluptatem. Et aperiam et voluptas inventore qui rerum consequatur est.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(18, 'Neque sapiente numquam et quam ad optio.', 'Et distinctio reprehenderit aperiam explicabo maiores et incidunt. Totam impedit consectetur ducimus veniam aut. Maiores architecto aut consequatur animi.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(19, 'Qui deserunt eos ducimus.', 'Voluptatum alias consequatur quasi repudiandae molestias. Molestiae sint sit et ullam quae odio sed omnis. A in quae dicta dolore ad voluptatem et. Ut repellat ipsam autem vel.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(20, 'Rerum tempora unde quidem veritatis sapiente.', 'Earum earum et maxime. Esse ut eos quaerat veniam vero. Iste odio sed nam qui. Quo eos et quia est laboriosam et non. Quia dolorem corrupti et minima neque.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(21, 'Incidunt id minima non minima hic amet enim.', 'Sit et et et similique. Ratione accusamus eligendi qui molestias cupiditate qui debitis et. Ut eum eius et. Qui recusandae voluptatem placeat ut et quos.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(22, 'Aliquam et quia temporibus.', 'Exercitationem quo eaque nemo a. Quidem ullam ut quisquam quibusdam dolor. Quia quibusdam accusamus placeat accusantium magnam est. Adipisci voluptatem qui ipsum temporibus aut quis.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(23, 'Vel nisi libero eos nihil alias excepturi.', 'Qui sit cumque nostrum soluta a iusto. Molestiae ad repudiandae est ex iure veritatis consectetur. Error esse quidem enim blanditiis dolorem quas iusto soluta.', '2018-01-01 21:31:44', '2018-01-01 21:31:44'),
(24, 'Reiciendis quod nesciunt ad.', 'Provident optio quo impedit velit est eius nesciunt et. Id aliquam harum eligendi maiores voluptatem. Esse exercitationem quia repellat iure veritatis.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(25, 'Inventore nobis praesentium assumenda et.', 'Eos natus perferendis et sit eos earum numquam. Aut explicabo ut esse ratione eum doloribus odit. Enim voluptate in sequi quo.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(26, 'Aliquam voluptas reprehenderit omnis cum.', 'Asperiores aut porro et dolor. Minima qui officiis sapiente odio. Facilis non laudantium commodi. Dignissimos dolorum veritatis dolores cumque.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(27, 'Maiores nihil et quaerat sed error sed.', 'Asperiores aut asperiores rerum ea ut inventore. Laboriosam dolorem voluptatum vel consequatur praesentium voluptates itaque. Velit excepturi aut reiciendis voluptate dolorum.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(28, 'Saepe odit ea dolores molestias in id iusto.', 'Fugiat non velit molestiae suscipit. Debitis qui quos eos. Optio impedit officia consequuntur iure accusamus. Culpa distinctio culpa autem architecto aut modi.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(29, 'Voluptatum sed assumenda aut optio soluta.', 'Recusandae sunt nostrum provident soluta sequi veniam consequatur. Ut autem eum incidunt quia dolores. Magni commodi labore repudiandae officiis. Odit autem consequatur in accusamus hic voluptatem.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(30, 'Dignissimos sapiente facere rem corrupti.', 'Aut quis ducimus veritatis sit at distinctio ea. Ea inventore accusantium ut. Velit voluptatum unde et molestiae eaque soluta ab. Sed doloremque ea veniam voluptatem ut.', '2018-01-01 21:31:45', '2018-01-01 21:31:45'),
(31, 'Mark Test Title', 'Test Body', '2018-01-01 22:21:18', '2018-01-01 22:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_01_211928_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
