-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2021 at 04:51 PM
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
(2, 'Testing Two', '/storage/itemimg/1609644216_shop-grid-img10.jpg', '30000', 'Testing Two', '2021-01-02 20:53:36', '2021-01-02 20:53:36'),
(3, 'Testing Two', '/storage/itemimg/1609730602_shop-grid-img2.jpg', '30000', 'Testing', '2021-01-03 20:53:22', '2021-01-03 20:53:22'),
(4, 'Testing Three', '/storage/itemimg/1609730670_shop-grid-img8.jpg', '40000', 'Testing 3', '2021-01-03 20:54:30', '2021-01-03 20:54:30'),
(5, 'Testing Four', '/storage/itemimg/1609730712_shop-grid-img4.jpg', '40000', 'Testing Four', '2021-01-03 20:55:12', '2021-01-03 20:55:12'),
(6, 'Testing Four', '/storage/itemimg/1609740740_shop-grid-img7.jpg', '35000', 'Testing', '2021-01-03 23:42:20', '2021-01-03 23:42:20'),
(7, 'Testing Five', '/storage/itemimg/1609740778_shop-grid-img1.jpg', '40000', 'Testing', '2021-01-03 23:42:58', '2021-01-03 23:42:58'),
(8, 'Testing Six', '/storage/itemimg/1609740824_shop-grid-img6.jpg', '10000', 'Testing 7', '2021-01-03 23:43:44', '2021-01-03 23:43:44'),
(9, 'Testing eight', '/storage/itemimg/1609740863_shop-grid-img5.jpg', '35000', 'Testing8', '2021-01-03 23:44:23', '2021-01-03 23:44:23'),
(10, 'Testing Nine', '/storage/itemimg/1609740903_shop-grid-img9.jpg', '35000', 'Testing 9', '2021-01-03 23:45:03', '2021-01-03 23:45:03');

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
(1, 'Premier League', '/storage/leagueimg/1609585520_PremierLeague.png', 'England', '2021-01-02 04:35:20', '2021-01-02 04:35:20'),
(2, 'Laliga', '/storage/leagueimg/1609694078_Laliga.jpg', 'Spain', '2021-01-03 10:44:38', '2021-01-03 10:44:38'),
(3, 'Bundesliga', '/storage/leagueimg/1610022099_Bundesliga.jpg', 'Germany', '2021-01-07 05:51:39', '2021-01-07 05:51:39'),
(4, 'Serie A', '/storage/leagueimg/1610022124_Serie A.jpg', 'Italy', '2021-01-07 05:52:04', '2021-01-07 05:52:04'),
(5, 'Ligue 1', '/storage/leagueimg/1610022153_Ligue 1.jpg', 'France', '2021-01-07 05:52:33', '2021-01-07 05:52:33'),
(6, 'Champions League', '/storage/leagueimg/1610022202_Champions League.jpg', 'Europa', '2021-01-07 05:53:22', '2021-01-07 05:53:22'),
(7, 'Europa League', '/storage/leagueimg/1610022226_Europa League.jpg', 'Europa', '2021-01-07 05:53:46', '2021-01-07 05:53:46');

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
(7, 'SHEFFIELD UNITED VS NEWCASTLE UNITED', '2021-01-03', '18:00', 'Testing', 14, 15, '2021-01-02 23:12:22', '2021-01-02 23:12:22'),
(8, 'New Vs Bri', '2021-01-06', '11:46', 'Testing', 15, 19, '2021-01-04 21:45:31', '2021-01-04 21:45:31'),
(9, 'BARCELONA VS ATLETICO MADRID', '2021-01-06', '02:30', 'TESTING', 21, 22, '2021-01-05 00:50:01', '2021-01-05 00:50:01');

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
(10, '2021_01_03_070707_create_permission_tables', 3),
(11, '2021_01_06_030925_create_orders_table', 4),
(12, '2021_01_06_033730_create_orderdetails_table', 5);

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
(1, 'App\\User', 4),
(1, 'App\\User', 5),
(2, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetials`
--

CREATE TABLE `orderdetials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetials`
--

INSERT INTO `orderdetials` (`id`, `item_id`, `order_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 4, 8, 1, '2021-01-06 05:55:09', '2021-01-06 05:55:09'),
(2, 3, 8, 1, '2021-01-06 05:55:09', '2021-01-06 05:55:09'),
(3, 5, 8, 1, '2021-01-06 05:55:09', '2021-01-06 05:55:09'),
(4, 10, 9, 1, '2021-01-06 21:00:39', '2021-01-06 21:00:39'),
(5, 9, 9, 1, '2021-01-06 21:00:39', '2021-01-06 21:00:39'),
(6, 10, 10, 5, '2021-01-06 22:01:09', '2021-01-06 22:01:09'),
(7, 8, 11, 1, '2021-01-07 06:46:32', '2021-01-07 06:46:32'),
(8, 9, 11, 1, '2021-01-07 06:46:32', '2021-01-07 06:46:32'),
(9, 10, 11, 1, '2021-01-07 06:46:32', '2021-01-07 06:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderdate` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `orderno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `user_id`, `total`, `status`, `orderno`, `created_at`, `updated_at`) VALUES
(8, '2021-01-06', 1, 110000, 0, '5ff5ac259dd9a', '2021-01-06 05:55:09', '2021-01-06 05:55:09'),
(9, '2021-01-07', 3, 70000, 0, '5ff6805fa090c', '2021-01-06 21:00:39', '2021-01-06 21:00:39'),
(10, '2021-01-07', 3, 175000, 0, '5ff68e8cf2765', '2021-01-06 22:01:08', '2021-01-06 22:01:08'),
(11, '2021-01-07', 5, 80000, 0, '5ff709b071c52', '2021-01-07 06:46:32', '2021-01-07 06:46:32');

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
(4, 'Manchester United are ready to move on from Paul Pogba', 'Jadon Sancho was once top of Manchester United \'s wish list but now Ole Gunnar Solskjaer wants to move for the Borussia Dortmund star\'s teammate  Erling Haaland .\r\n\r\nSolskjaer had solidified his position at United heading into the January window following a 10-match unbeaten run and the Norwegian manager is determined to recruit his countryman.\r\n\r\nAfter tracking ex-Manchester City youth product Sancho before the season, United are ready to switch their attention to Haaland, with reports suggesting he has a £70million release clause.', '/storage/postimg/1609666409_gettyimages-1193383499.jpg', '2021-01-03 03:03:29', '2021-01-03 07:01:42'),
(5, 'Rumour Has It: Solskjaer wants Haaland over Sancho, Man Utd to sell Pogba', 'Jadon Sancho was once top of Manchester United \'s wish list but now Ole Gunnar Solskjaer wants to move for the Borussia Dortmund star\'s teammate  Erling Haaland .\r\n\r\nSolskjaer had solidified his position at United heading into the January window following a 10-match unbeaten run and the Norwegian manager is determined to recruit his countryman.\r\n\r\nAfter tracking ex-Manchester City youth product Sancho before the season, United are ready to switch their attention to Haaland, with reports suggesting he has a £70million release clause.', '/storage/postimg/1609666638_haaland-cropped_1si91af31yr171wbt5ccutt2ho.jpg', '2021-01-03 03:07:18', '2021-01-03 03:07:18'),
(6, 'Zidane will not rest Benzema, Hazard to be eased back', 'Zinedine Zidane has no plans to rest Real Madrid striker Karim Benzema as he vowed slowly ease Eden Hazard back to full match fitness.\r\n\r\nBenzema failed to register a single shot on goal in Madrid\'s 2-0 win over Celta Vigo in LaLiga on Saturday and twice missed the target from good positions.\r\n\r\nThe 33-year-old has started 15 of Madrid\'s 17 LaLiga matches this season and only goalkeeper Thibaut Courtois and Raphael Varane have played more minutes.\r\n\r\nWhen asked in a post-match media conference if Benzema, who has scored eight goals in LaLiga, needed a break, following a slightly jaded showing, Zidane disagreed.\r\n\r\n\"I don’t think he’s tired,\" Zidane said.\r\n\r\n\"I think he did well and I took him off so that another player could play. We’re in a great spell. We’re doing the right things and we have to continue like this.\"\r\n\r\nHazard came off the bench for another run out late in the second half against Celta as he stepped up his return from an injury-hit start to the season.', '/storage/postimg/1609680953_ben.jpg', '2021-01-03 07:05:53', '2021-01-03 07:05:53'),
(7, 'Inter 6-2 Crotone: Lautaro treble leads Nerazzurri to fifth straight success', 'Lautaro Martinez hit a perfect hat-trick and Romelu Lukaku sparkled as Inter defeated Crotone 6-2 at San Siro to turn up the heat on Milan at the start of 2021.\r\n\r\nInter moved top of Serie A at least until Milan\'s meeting with Benevento later on Sunday as they recovered from a testing first half to ease past their struggling visitors.\r\n\r\nIt was all square at the break after Martinez cancelled out Niccolo Zanellato\'s opener and was in close attendance for a Luca Marrone own goal prior to Vladimir Golemic\'s equalising penalty.\r\n\r\nBut Martinez completed his treble following the interval, while Lukaku, involved in the first four Nerazzurri goals, was also on target and Achraf Hakimi swept in the sixth in a fifth straight win.\r\n\r\nOnly an apparent injury to the outstanding Lukaku put a slight dampener on a day that had started in laboured fashion.', '/storage/postimg/1609681086_lautaro-martinez-celebrates-at-san-siro_1ezb5kvj5bx3n1pay9b4sjcy3l.jpg', '2021-01-03 07:08:06', '2021-01-03 07:08:06'),
(8, 'West Brom 0-4 Arsenal: Revived Gunners make it three in a row in the snow', 'Arsenal claimed a stylish 4-0 win over West Brom at a snow-covered Hawthorns to continue their Premier League resurgence on Saturday.\r\n\r\nAfter a seven-match winless run in the top flight prior to Christmas, the Gunners defeated Chelsea at home and Brighton and Hove Albion away and were full of confidence against Sam Allardyce\'s struggling side.\r\n\r\nFine first-half goals five minutes apart from Kieran Tierney and Bukayo Saka - the first a sublime solo strike, the second a flowing team move - made a mockery of tricky conditions and moved Arsenal out of sight.\r\n\r\nAlexandre Lacazette added a comical clincher and later doubled his tally as a third straight victory boosted Mikel Arteta\'s men up to 11th, now suddenly looking up the table rather than back towards the relegation scrap in which West Brom remain mired.\r\n\r\nArsenal had quickly assumed control in the falling snow, although Matt Phillips might have done better than shoot straight at Bernd Leno from a rare West Brom opening.\r\n\r\nThe visitors heeded that warning and soon led when Tierney pushed the ball past Darnell Furlong on the left flank, then checked back inside to beat his opponent again and finally beat Sam Johnstone with a curling right-footed effort.\r\n\r\nThe swift second was equally impressive, albeit an entirely different kind of goal as Emile Smith Rowe moved the ball on to Saka and continued his run while Lacazette took possession and fed a pass back into his path. Through on goal, Smith Rowe unselfishly squared to find Saka once more for a simple finish.\r\n\r\nA flag denied West Brom an early second-half response as Matheus Pereira ran offside before his drive against the post landed back at the feet of Callum Robinson with the goal gaping.\r\n\r\nInstead, a bizarre third went Arsenal\'s way when Semi Ajayi awkwardly volleyed against his own post and recovered to block Smith Rowe\'s follow-up but watched Lacazette lash in the rebound - the Frenchman netting in a fourth consecutive match in all competitions.\r\n\r\nHe had another four minutes later, kneeing in Tierney\'s drilled cross, with West Brom ultimately fortunate to escape further punishment.', '/storage/postimg/1609681220_reser.jpg', '2021-01-03 07:10:20', '2021-01-03 07:10:20'),
(9, 'Real Madrid retake top spot in La Liga while Leipzig hit Bundesliga summit', 'Real Madrid retook top spot in La Liga on Saturday night with a 2-0 home win against Celta Vigo, the sixth victory in their previous seven league matches.\r\n\r\nLucas Vázquez opened the scoring after just six minutes at the Alfredo Di Stéfano Stadium with a header at the far post after Marco Asensio’s fine run and delivery from the left wing. Eight minutes after the break the roles were reversed as Asensio doubled the lead for Zinedene Zidane’s men, Vázquez laying the ball across the penalty area for Asensio to apply a cool finish.', '/storage/postimg/1609681277_1760.jpg', '2021-01-03 07:11:17', '2021-01-03 07:11:17'),
(10, 'Arteta expects Ozil decision in \'next few days\' as midfielder nears Arsenal exit', 'Mikel Arteta is expecting news either way on Mesut Ozil\'s future in the coming days, with the midfielder linked to Fenerbahce.\r\nMesut Ozil\'s Arsenal career looks set to end in the \"next few days\", with a decision on his future expected soon, according to Mikel Arteta.\r\n\r\nReports emerged this week claiming Ozil was in talks with MLS franchise DC United and Turkish side Fenerbahce, whom the former Real Madrid star is said to have supported as a child.\r\n\r\nOzil joined Arsenal from Los Blancos in 2013 and provided 54 assists in 184 Premier League appearances for the club – in the same period, only Kevin De Bruyne (74), David Silva (63) and Christian Eriksen (62) have created more goals than the German World Cup winner.\r\n\r\nHowever, he has laid on just two since the start of 2019-20, as he fell out of favour again under Arteta despite the Spaniard initially appearing set on building the team around Ozil.\r\n\r\nWith his contract up at the end of the season, the 32-year-old is now able to negotiate a free transfer, though for any deal to go through this month, Arsenal will need to be involved in negotiations.\r\n\r\nReports in Turkey have claimed a deal with Fenerbahce has already been agreed, and while Arteta would not confirm whether this was the truth, he did state a decision is expected very soon.\r\n\r\n\"I don\'t know what\'s going to happen,\" Arteta told reporters on Thursday. \"Now he\'s free to negotiate with other clubs, we will discuss internally the best situation for him, for the near future, with the player and the agent and try to find the best solution for everybody.\r\n\r\n\"Every player wants to play football, this is why we picked this profession. We are so lucky to be doing what we do, so for every player not playing, it is hard.\r\n\r\n\"We will decide what happens in the next few days.\"\r\n\r\nOzil\'s position at Arsenal has long been a source of contention, with some supporters adamant he should not have been excluded from the Premier League squad at the start of the season, while others have routinely urged him to leave for his own good but to also release the Gunners from the pressure of his substantial wages.\r\n\r\nArteta appeared optimistic about the situation, though did accept Ozil could yet stay for the time being.\r\n\r\n\"If something is sorted this month it\'s because it\'s good for both parties; good for Mesut and his future, and good for the club,\" he continued.\r\n\r\n\"If that\'s the case, we will move forward. If it\'s not the case, the player will remain here.\r\n\r\n\"He\'s been training with us, but he had some days [off] because we decided to give him some days for something personal, but he\'s been training with us all the time.\r\n\r\n\"We are aware of all the conversations with Mesut internally and his agent, and this communication keeps going. From now on he\'s free to talk to any club.\"', '/storage/postimg/1610021607_ozilcropped_32iyzjhdzil412d8xrhib8uet.jpg', '2021-01-04 21:41:18', '2021-01-07 05:43:27'),
(11, 'Liverpool\'s Chinese New Year special edition shirt leaked online', 'Nike released an eye catching Chinese New Year collection at the end of 2020 - and this is set to include a special edition Liverpool kit, with leaks showing the first images of the design.\r\n\r\n\r\n\r\nThe Reds signed a kit deal with Nike ahead of the 2020/21 season - the sportswear giants taking over from New Balance - in a lucrative partnership said to have the potential to rival that of Manchester United\'s with adidas.\r\n\r\n\r\n\r\nNike have already promised four (four Jeremy? That\'s insane) Liverpool strips this season. Their traditional red home shirt, eye catching marble turquoise away kit and checked black third strip have already been released, while images of a black and white striped fourth kit have been leaked in recent weeks.\r\n\r\nAccording to Footy Headlines, Nike are now poised to release a fifth, special edition Liverpool shirt to tie in with Chinese New Year.\r\n\r\n\r\n\r\nThe v-neck shirt is jet black with red sleeves and black trim, and comes complete with the Nike 2021 CNY Swoosh design on the right hand side of the chest, and a red Liverpool badge on the left.\r\n\r\n\r\n\r\nThe shirt is the first football kit to be included in Nike\'s Chinese New Year collection - but there is currently no information regarding when the top will be released and be available to purchase.\r\n\r\nNike have already released a selection of footwear items for their New Year collection - a mix of bright, statement \'firecracker\' numbers and subtle, intricate designs - and others are expected to be released later this month.\r\n\r\n\r\n\r\nFooty Headlines have also published images of Liverpool\'s fourth kit; a black and white pin striped shirt with giant Liverpool and Nike Air logos - which is expected to be officially released in January.\r\n\r\n\r\n\r\nLiverpool are one of a small selection of clubs, including Tottenham Barcelona, Inter and PSG, who are set to receive a fourth kit for the 2020/21 season.', '/storage/postimg/1610021791_Crystal-Palace-v-Liverpool---Premier-League-d1a45cd4f9cdc328006086bf33db5165.webp', '2021-01-07 05:46:31', '2021-01-07 05:46:31'),
(12, 'Roy Keane on why Bruno Fernandes can\'t be compared with Eric Cantona', 'Roy Keane has called on Bruno Fernandes to perform on the big stage if he is to earn legitimate comparisons to Manchester United great Eric Cantona.\r\n\r\n\r\n\r\nFernandes has been a revelation since joining the Red Devils from Sporting CP in January 2020 and has proved undroppable this campaign, appearing in 25 of United\'s 26 matches in all competitions.\r\n\r\nHe has been the match winner on multiple occasions for Ole Gunnar Solskjaer\'s side this term, pitching in with 15 goals and nine assists and leading to people drawing comparisons between him and Cantona.\r\n\r\n\r\n\r\nHowever, Fernandes could do little to prevent United from suffering a Carabao Cup semi final exit at the hands of rivals Manchester City on Wednesday evening as he turned in one of his more subdued performances in a United shirt, and Keane has called for the Portuguese midfielder to step it up when there is silverware on the line if he is to truly be regarded in the same league as Cantona.\r\n\r\n\r\n\"It\'s not easy. Not easy winning football trophies,” Keane told Sky Sports at full time (via the Mirror).\r\n\r\n“You know Fernandes has had great praise and over the past few months people have been comparing him to Cantona etc. But Cantona...Fernandes didn\'t really do much tonight.\r\n\r\n\r\n\r\n“The top players turn up in the big occasions. That\'s what the Cantonas used to do, get their hands-on trophies. And that\'s where this team is a little bit short.\r\n\r\n\"They probably need to have one or two more players come into the squad no doubt and the mentality, maybe they need the confidence of winning a semi-final to get them over the line. Then you get momentum.\"\r\n\r\n\r\n\r\nUnited have not get their hands on any silverware since winning the Europa League in 2017. They are yet to win a trophy during Solskjaer\'s tenure - but are currently level on points with Liverpool at the Premier League summit with a game in hand.', '/storage/postimg/1610021876_Manchester-United-v-Manchester-City---Carabao-Cup--e3737fc45421299b676fb57bead39c96.webp', '2021-01-07 05:47:56', '2021-01-07 05:47:56'),
(13, 'Ole Gunnar Solskjaer unconcerned by Manchester United\'s semi-final record', 'Forever the bridesmaid, never the bride.\r\n\r\n\r\n\r\nOle Gunnar Solskjaer\'s Manchester United lost their fourth semi-final in two years on Wednesday as they fell 2-0 to local rivals Manchester City in the Carabao Cup, having lost to City at the same stage last season as well.\r\n\r\n\r\n\r\nIt was a frustrating night for United, and here\'s what Solskjaer had to say when it was all said and done.\r\n\r\n“City can score many great goals, and you can accept that, but when you concede from two set-plays, simple ones that we should have cleared, we are very disappointed,\" he said (via the club\'s official website). \"It is just not good enough in those moments.\r\n\r\n\r\n\r\n\"We would have liked to have defended that first free-kick better. That is a poor goal to give away, I have to say. It is not one to analyse on telly here. It was very, very disappointing. We didn’t [do enough]. Clearly, we didn’t.\r\n\r\n\r\n\r\n\"We didn’t create enough big chances ourselves, they didn’t create too many big ones either, but we just didn’t have the extra finesse that we have had in the games lately, in the league, in those tight games that we won. We weren’t good enough today and when you concede two set-plays, it is very disappointing.”\r\n“No, it is not psychological. Sometimes, you meet good teams in semis and we just didn’t have enough. At the moment, they are probably the best team in England and we just didn’t have enough. When you lose a semi-final, when you lose against an opponent, you think they deserve it.\r\n\r\n\r\n\r\n\"But we are getting closer. This is a much better version of Man United compared to a year ago in those semis. That’s positive but it is not enough.”\r\n\r\n\r\n\r\nHe added (via The Times): “When you get to this stage [of cup competitions], you play against better teams. It comes on some nights [down] to margins, quality. Tonight we conceded from two set plays, which is very disappointing. We need to be better. I’m not sure if it’s about the mental bit. It’s about some practice, some habits and some desire at times.”\r\n\r\n“City played well and when they play well, you have to play really well to beat them and that is just the reality of where we are at. When they play up to their best, we are just lacking that little bit. We are just not there yet. That is a big word, ‘yet’, but we will get there and these boys are getting better.\r\n\r\n\r\n\r\n\"These disappointments will hurt and those little habits that will create those little margins for you, they have been good but we can also be better at the little things.”\r\n\r\n“We wanted to go to a final. We wanted the final to look forward to and that would have given us an extra boost. But it is not happening and then you have to dust it off and use the night to get the disappointment away. Because, on Saturday, FA Cup [against Watford], and then we have big league games against Burnley and Liverpool and, within a month, suddenly the Europa League is here again.\r\n\r\n\r\n\r\n\"There are loads of things to play for. It is allowed for an hour or so to be very disappointed before you go to bed but then you wake up tomorrow morning, with something to look forward to. You have got to.”', '/storage/postimg/1610022038_Manchester-United-v-Manchester-City---Carabao-Cup--742f2296eaf4b90591ea40cd7c460a32.webp', '2021-01-07 05:50:26', '2021-01-07 05:50:38');

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

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `hometeam_id`, `awayteam_id`, `home_goal`, `away_goal`, `match_id`, `created_at`, `updated_at`) VALUES
(1, 5, 7, 0, 1, 1, '2021-01-04 03:36:37', '2021-01-07 08:57:10'),
(3, 17, 16, 3, 0, 6, '2021-01-04 21:38:17', '2021-01-04 21:38:17'),
(4, 15, 19, 0, 0, 8, '2021-01-04 21:45:55', '2021-01-04 21:45:55');

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
(20, 'ASTON VILLA', '/storage/teamimg/1609652277_ASTON VILLA', 1, '2021-01-02 23:07:57', '2021-01-02 23:07:57'),
(21, 'BARCELONA', '/storage/teamimg/1609694133_BARCELONA', 2, '2021-01-03 10:45:33', '2021-01-03 10:45:33'),
(22, 'ATLETICO MADRID', '/storage/teamimg/1609694151_ATLETICO MADRID', 2, '2021-01-03 10:45:51', '2021-01-03 10:45:51'),
(23, 'REAL MADRID', '/storage/teamimg/1609694171_REAL MADRID', 2, '2021-01-03 10:46:11', '2021-01-03 10:46:11'),
(24, 'REAL SOCIEDAD', '/storage/teamimg/1609694190_REAL SOCIEDAD', 2, '2021-01-03 10:46:30', '2021-01-03 10:46:30'),
(25, 'VILLARREAL', '/storage/teamimg/1610022338_VILLARREAL', 2, '2021-01-07 05:55:38', '2021-01-07 05:55:38'),
(26, 'VALENCIA', '/storage/teamimg/1610022355_VALENCIA', 2, '2021-01-07 05:55:55', '2021-01-07 05:55:55'),
(27, 'SEVILLA', '/storage/teamimg/1610022372_SEVILLA', 2, '2021-01-07 05:56:12', '2021-01-07 05:56:12'),
(28, 'SD HUESCA', '/storage/teamimg/1610022390_SD HUESCA', 2, '2021-01-07 05:56:30', '2021-01-07 05:56:30'),
(29, 'REAL VALLADOLID', '/storage/teamimg/1610022409_REAL VALLADOLID', 2, '2021-01-07 05:56:49', '2021-01-07 05:56:49'),
(30, 'REAL BETIS', '/storage/teamimg/1610022458_REAL BETIS', 2, '2021-01-07 05:57:38', '2021-01-07 05:57:38'),
(31, 'OSASUNA', '/storage/teamimg/1610022519_OSASUNA', 2, '2021-01-07 05:58:39', '2021-01-07 05:58:39'),
(32, 'LEVANTE', '/storage/teamimg/1610022556_LEVANTE', 2, '2021-01-07 05:58:53', '2021-01-07 05:59:16'),
(33, 'GRANADA', '/storage/teamimg/1610022600_GRANADA', 2, '2021-01-07 06:00:00', '2021-01-07 06:00:00'),
(34, 'GETAFE', '/storage/teamimg/1610022630_GETAFE', 2, '2021-01-07 06:00:30', '2021-01-07 06:00:30'),
(35, 'ELCHE', '/storage/teamimg/1610022645_ELCHE', 2, '2021-01-07 06:00:45', '2021-01-07 06:00:45'),
(36, 'EIBAR', '/storage/teamimg/1610022680_EIBAR', 2, '2021-01-07 06:01:20', '2021-01-07 06:01:20'),
(37, 'DEPORTIVO ALAVES', '/storage/teamimg/1610022716_DEPORTIVO ALAVES', 2, '2021-01-07 06:01:56', '2021-01-07 06:01:56'),
(38, 'CELTA VIGO', '/storage/teamimg/1610022731_CELTA VIGO', 2, '2021-01-07 06:02:11', '2021-01-07 06:02:11'),
(39, 'CADIZ', '/storage/teamimg/1610022748_CADIZ', 2, '2021-01-07 06:02:28', '2021-01-07 06:02:28'),
(40, 'ATHLETIC CLUB', '/storage/teamimg/1610022766_ATHLETIC CLUB', 2, '2021-01-07 06:02:46', '2021-01-07 06:02:46');

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
(3, 'user2', 'user2@gmail.com', NULL, '$2y$10$0NzYYhj2qDbWrqaO3vlgWeZ7HC0iduObBYst4Cmh8ssVkHzi/u/Gy', NULL, '2021-01-03 01:05:32', '2021-01-03 01:05:32'),
(4, 'mgma', 'mgmg@gmail.com', NULL, '$2y$10$rmQG0UGdWQVy5oAy72gbUOG7.tZWplzbAbgVS3Jaa2z9EMC1s1mc.', NULL, '2021-01-06 05:37:41', '2021-01-06 05:37:41'),
(5, 'susu', 'susu@gmail.com', NULL, '$2y$10$6mxHAL/kA3wFBYb05GIegu7DlgHp5Ds8ruLRBGof1S/h6neXf1QA2', NULL, '2021-01-07 06:46:15', '2021-01-07 06:46:15');

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
-- Indexes for table `orderdetials`
--
ALTER TABLE `orderdetials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails_item_id_foreign` (`item_id`),
  ADD KEY `orderdetails_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderdetials`
--
ALTER TABLE `orderdetials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `orderdetials`
--
ALTER TABLE `orderdetials`
  ADD CONSTRAINT `orderdetails_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
