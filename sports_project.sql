-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2021 at 11:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `photo`, `price`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Testing Two', '/storage/itemimg/1609644216_shop-grid-img10.jpg', '30000', 'Testing Two', '2021-01-02 20:53:36', '2021-01-02 20:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `photo`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Premier League', '/storage/leagueimg/1609585520_PremierLeague.png', 'England', '2021-01-02 04:35:20', '2021-01-02 04:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `otherteam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `name`, `match_date`, `match_time`, `description`, `team_id`, `otherteam_id`, `created_at`, `updated_at`) VALUES
(1, 'Chelsea Vs  Tottenham Hotspur', '2021-01-04', '00:00', 'Testing', 5, 7, '2021-01-02 22:42:01', '2021-01-02 22:42:01'),
(2, 'Liverpool Vs Arsenal', '2021-01-03', '23:00', 'Testing', 1, 6, '2021-01-02 22:42:58', '2021-01-02 22:42:58'),
(3, 'Manchester City  Vs Manchester Unitd', '2021-01-03', '19:30', 'Testing', 4, 3, '2021-01-02 22:43:48', '2021-01-02 22:43:48'),
(4, 'Everton Vs Leicester', '2021-01-03', '21:30', 'Testing', 2, 8, '2021-01-02 22:44:42', '2021-01-02 22:44:42'),
(5, 'AstonVilla VS Brighton', '2021-01-03', '19:35', 'Testing', 20, 19, '2021-01-02 23:09:46', '2021-01-02 23:09:46'),
(6, 'LEEDS UNITED VS CRYSTAL PALACE', '2021-01-03', '11:35', 'Testing', 17, 16, '2021-01-02 23:10:47', '2021-01-02 23:10:47'),
(7, 'SHEFFIELD UNITED VS NEWCASTLE UNITED', '2021-01-03', '18:00', 'Testing', 14, 15, '2021-01-02 23:12:22', '2021-01-02 23:12:22');

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
(4, '2020_12_26_134447_create_posts_table', 1),
(5, '2020_12_26_154229_create_leagues_table', 1),
(6, '2020_12_27_033228_create_teams_table', 1),
(7, '2020_12_27_033252_create_matches_table', 1),
(8, '2020_12_30_043118_create_results_table', 1),
(9, '2021_01_02_123639_create_items_table', 2),
(10, '2021_01_03_070707_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(2, 'App\\User', 1);

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
-- Table structure for table `permissions`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Premier League News', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe illum blanditiis quaerat aperiam voluptate porro repudiandae labore fugiat non. Dolor deleniti excepturi dolores accusamus neque, voluptatum mollitia error ullam commodi?', '/storage/postimg/1609585352_37328636-9092419-image-a-33_1609155301000_0.jpg', '2021-01-02 04:32:32', '2021-01-02 06:02:45'),
(2, 'Arsenal can now play with \'the handbrake off\' says Arteta', 'Mikel Arteta believes Arsenal can express themselves now they have strung together three straight wins in a week.\r\nMikel Arteta believes Arsenal can play with freedom now they have turned the corner on their dismal run of form.\r\n\r\nThe Gunners made it three Premier League wins in the space of eight days with a 4-0 triumph against struggling West Bromwich Albion at a snow-covered Hawthorns.\r\n\r\nAlexandre Lacazette hit a second-half double in the space of four minutes to send Arsenal 11th in the table, after Kieran Tierney and Bukayo Saka had opened up a half-time lead.\r\n\r\nThe three-win streak puts an end to a run of seven matches without a victory and Arteta hopes he has seen the back of his team\'s miserable stretch of results.\r\n\r\n\"I hope so, at least the energy and the convincing momentum that you get from everybody that is involved, it\'s much more positive,\" Arteta said.\r\n\r\n\"At the end of the day, I wasn\'t that concerned with the performances.\r\n\r\n\"I think we lost games when we were really unlucky and most of them it was our own fault because we made some errors and we lack some discipline in certain moments.\r\n\r\n\"But you need to win football matches and now this brings a different momentum, a different energy, and now the players get the handbrake off and you can see that they are more free to play.\"', '/storage/postimg/1609642015_arsenal-manager-mikel-arteta_stzolcz4nkpe19em7pxqyrkdr.jpg', '2021-01-02 20:16:55', '2021-01-02 20:16:55'),
(3, 'Mauricio Pochettino is back - but why has he chosen Paris St-Germain?', 'As a former player who enjoyed two and a half seasons at PSG, the decision to take the job may well be a no-brainer, but that\'s a long way from saying it is going to be a walk in the park, as the former incumbent at the club Thomas Tuchel would no doubt tell him.\r\n\r\nTuchel had already told the club he wasn\'t going to be staying on next season.\r\n\r\nTuchel is one of those modern German managers who has always understood football as a game in which the collective is far more important than the individual, whereas at a club like PSG the importance of the star is paramount, to the extent that players like Kylian Mbappe and Neymar have a direct line of communication with the president.\r\n\r\nUnsurprisingly therefore, you sense Tuchel felt his authority was being constantly undermined.\r\n\r\nDespite being runners-up in last year\'s Champions League, he leaves with the club - French champions in seven of the previous eight seasons - in a recently unprecedented third place in Ligue 1.\r\n\r\nThey are still just a point off top spot and very much in with a chance of winning the league, but it is their worst return at this stage since the 2013-14 season.\r\n\r\nFourteen points from a possible 24 might be good enough at any other club, but Tuchel leaves with PSG having lost four of their first 17 games.\r\n\r\nLast season, before the league was terminated after 27 games, they had lost just three. But the sacking had more to do with perception than numbers.\r\n\r\nThe main focus of the squad last season had been on the Champions League and they followed his instructions to the letter.\r\n\r\nDuring that campaign they showed unity particularly when, after a dinner at Marco Verratti\'s restaurant where they promised to work as a team, they came back from a 2-1 first-leg deficit against Borussia Dortmund to win the home game 2-0 and make their way into the quarter-finals just before the pandemic hit.\r\n\r\nBut this season it has proved impossible to recreate that spirit and the often tetchy and awkward relationship Tuchel had with director of football Leonardo meant he had to go.', '/storage/postimg/1609648873__116330606_gettyimages-1081656414.jpg', '2021-01-02 22:11:13', '2021-01-02 22:11:13'),
(4, 'Manchester United are ready to move on from Paul Pogba with Erling Haaland favoured over his Borussia Dortmund team-mate Jadon Sancho.', 'Jadon Sancho was once top of Manchester United \'s wish list but now Ole Gunnar Solskjaer wants to move for the Borussia Dortmund star\'s teammate  Erling Haaland .\r\n\r\nSolskjaer had solidified his position at United heading into the January window following a 10-match unbeaten run and the Norwegian manager is determined to recruit his countryman.\r\n\r\nAfter tracking ex-Manchester City youth product Sancho before the season, United are ready to switch their attention to Haaland, with reports suggesting he has a £70million release clause.', '/storage/postimg/1609666409_gettyimages-1193383499.jpg', '2021-01-03 03:03:29', '2021-01-03 03:03:29'),
(5, 'Rumour Has It: Solskjaer wants Haaland over Sancho, Man Utd to sell Pogba', 'Jadon Sancho was once top of Manchester United \'s wish list but now Ole Gunnar Solskjaer wants to move for the Borussia Dortmund star\'s teammate  Erling Haaland .\r\n\r\nSolskjaer had solidified his position at United heading into the January window following a 10-match unbeaten run and the Norwegian manager is determined to recruit his countryman.\r\n\r\nAfter tracking ex-Manchester City youth product Sancho before the season, United are ready to switch their attention to Haaland, with reports suggesting he has a £70million release clause.', '/storage/postimg/1609666638_haaland-cropped_1si91af31yr171wbt5ccutt2ho.jpg', '2021-01-03 03:07:18', '2021-01-03 03:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hometeam_id` smallint(6) NOT NULL,
  `awayteam_id` smallint(6) NOT NULL,
  `home_goal` smallint(6) NOT NULL,
  `away_goal` smallint(6) NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'web', '2021-01-03 00:56:07', '2021-01-03 00:56:07'),
(2, 'admin', 'web', '2021-01-03 00:56:07', '2021-01-03 00:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `league_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `photo`, `league_id`, `created_at`, `updated_at`) VALUES
(1, 'Liverpool', '/storage/teamimg/1609650490_LIVERPOOL', 1, '2021-01-02 22:38:10', '2021-01-02 22:38:10'),
(2, 'Everton', '/storage/teamimg/1609650530_EVERTON', 1, '2021-01-02 22:38:50', '2021-01-02 22:38:50'),
(3, 'Manchester Unitd', '/storage/teamimg/1609650555_MANCHESTER UNITED', 1, '2021-01-02 22:39:15', '2021-01-02 22:39:15'),
(4, 'Manchester City', '/storage/teamimg/1609650569_MANCHESTER CITY', 1, '2021-01-02 22:39:29', '2021-01-02 22:39:29'),
(5, 'Chelsea', '/storage/teamimg/1609650588_CHELSEA', 1, '2021-01-02 22:39:48', '2021-01-02 22:39:48'),
(6, 'Arsenal', '/storage/teamimg/1609650607_ARSENAL', 1, '2021-01-02 22:40:07', '2021-01-02 22:40:07'),
(7, 'Tottenham Hotspur', '/storage/teamimg/1609650626_TOTTENHAM HOTSPUR', 1, '2021-01-02 22:40:26', '2021-01-02 22:40:26'),
(8, 'Leicester', '/storage/teamimg/1609650653_LEICESTER', 1, '2021-01-02 22:40:53', '2021-01-02 22:40:53'),
(9, 'Fulham', '/storage/teamimg/1609652066_FULHAM', 1, '2021-01-02 23:04:26', '2021-01-02 23:04:26'),
(10, 'WEST HAM UNITED', '/storage/teamimg/1609652095_WEST HAM UNITED', 1, '2021-01-02 23:04:55', '2021-01-02 23:04:55'),
(11, 'WOLVERHAMPTON', '/storage/teamimg/1609652116_WOLVERHAMPTON WANDERERS', 1, '2021-01-02 23:05:16', '2021-01-02 23:05:16'),
(12, 'WEST BROMWICH ALBION', '/storage/teamimg/1609652133_WEST BROMWICH ALBION', 1, '2021-01-02 23:05:33', '2021-01-02 23:05:33'),
(13, 'SOUTHAMPTON', '/storage/teamimg/1609652147_SOUTHAMPTON', 1, '2021-01-02 23:05:47', '2021-01-02 23:05:47'),
(14, 'SHEFFIELD UNITED', '/storage/teamimg/1609652167_SHEFFIELD UNITED', 1, '2021-01-02 23:06:07', '2021-01-02 23:06:07'),
(15, 'NEWCASTLE UNITED', '/storage/teamimg/1609652180_NEWCASTLE UNITED', 1, '2021-01-02 23:06:20', '2021-01-02 23:06:20'),
(16, 'CRYSTAL PALACE', '/storage/teamimg/1609652202_CRYSTAL PALACE', 1, '2021-01-02 23:06:42', '2021-01-02 23:06:42'),
(17, 'LEEDS UNITED', '/storage/teamimg/1609652221_LEEDS UNITED', 1, '2021-01-02 23:07:01', '2021-01-02 23:07:01'),
(18, 'BURNLEY', '/storage/teamimg/1609652240_BURNLEY', 1, '2021-01-02 23:07:20', '2021-01-02 23:07:20'),
(19, 'BRIGHTON', '/storage/teamimg/1609652264_BRIGHTON', 1, '2021-01-02 23:07:44', '2021-01-02 23:07:44'),
(20, 'ASTON VILLA', '/storage/teamimg/1609652277_ASTON VILLA', 1, '2021-01-02 23:07:57', '2021-01-02 23:07:57');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$sYoVd0YSu.4.WWguDZlDkuCfFQXPcx/4tEcQOJHw0/.i7.p5uuK7.', NULL, '2021-01-03 00:23:26', '2021-01-03 00:23:26'),
(2, 'user1', 'user1@gmail.com', NULL, '$2y$10$YfZeJCHAc3N8ACN8R9yIb.2pp4/4bHu/QRznx/OYvoXiydefxxdJ.', NULL, '2021-01-03 00:30:13', '2021-01-03 00:30:13'),
(3, 'user2', 'user2@gmail.com', NULL, '$2y$10$0NzYYhj2qDbWrqaO3vlgWeZ7HC0iduObBYst4Cmh8ssVkHzi/u/Gy', NULL, '2021-01-03 01:05:32', '2021-01-03 01:05:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_team_id_foreign` (`team_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_match_id_foreign` (`match_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_league_id_foreign` (`league_id`);

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
