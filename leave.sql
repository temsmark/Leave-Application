-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2019 at 09:01 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `from` date NOT NULL,
  `to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `department_id`, `leave_id`, `reason`, `period`, `status`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 5, 'Qui consequatur odit omnis laudantium libero aut temporibus in qui odit illo.', 21, 1, '2018-12-30', '2019-01-20', '2019-07-22 21:35:48', '2019-07-25 06:45:22'),
(441, 50, 4, 2, 'Similique voluptatem odit eius earum quae odit velit dicta est porro placeat.', 7, 2, '2018-12-31', '2019-01-07', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(442, 2, 4, 1, 'Possimus reiciendis ut molestias et et quas et est voluptates ut quasi voluptatem iusto.', 21, 2, '2018-12-29', '2019-01-19', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(443, 14, 4, 1, 'Ut nulla nihil facilis adipisci maxime quis nisi qui suscipit quis.', 7, 2, '2019-01-01', '2019-01-08', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(444, 12, 2, 3, 'Ad qui dolores ex aperiam necessitatibus et.', 21, 1, '2019-01-02', '2019-01-23', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(445, 46, 5, 5, 'Saepe possimus odit voluptas culpa tenetur ad corporis est sed alias et exercitationem.', 7, 2, '2018-12-29', '2019-01-05', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(446, 13, 2, 1, 'Sed rerum quo in iure qui sed accusamus eum tempore.', 14, 0, '2018-12-31', '2019-01-14', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(447, 6, 2, 2, 'Ut vitae mollitia quae modi ut et similique.', 7, 2, '2018-12-30', '2019-01-06', '2019-07-22 21:35:47', '2019-07-22 21:35:47'),
(448, 27, 5, 1, 'Exercitationem voluptatibus provident et laudantium unde voluptatem maxime facilis aut occaecati.', 21, 0, '2019-01-01', '2019-01-22', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(449, 19, 1, 3, 'Minima ea in architecto consequatur provident nisi culpa qui commodi et dolores voluptas.', 14, 0, '2019-01-02', '2019-01-16', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(450, 22, 1, 5, 'Beatae labore et soluta quidem magnam et in.', 7, 1, '2018-12-31', '2019-01-07', '2019-07-22 21:35:48', '2019-07-24 13:47:29'),
(451, 35, 4, 5, 'Sunt consequatur ut quia praesentium dolorem ad voluptatum praesentium veniam.', 7, 1, '2019-01-01', '2019-01-08', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(452, 25, 3, 2, 'Nulla quibusdam ullam vel vel non id iusto.', 21, 1, '2019-01-02', '2019-01-23', '2019-07-22 21:35:48', '2019-07-25 06:48:20'),
(453, 38, 4, 2, 'Saepe praesentium eos et voluptates reprehenderit aut eius aut aut numquam ducimus voluptatem.', 21, 0, '2018-12-29', '2019-01-19', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(454, 42, 1, 3, 'Qui qui itaque eaque quae culpa rerum excepturi deleniti officiis.', 7, 1, '2019-01-02', '2019-01-09', '2019-07-22 21:35:48', '2019-07-24 14:01:19'),
(456, 41, 1, 3, 'Odio doloremque inventore ut est corrupti id voluptatem autem.', 7, 1, '2018-12-29', '2019-01-05', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(457, 7, 3, 2, 'Id nisi molestiae quae aliquam et corrupti corporis id amet excepturi earum.', 14, 1, '2018-12-30', '2019-01-13', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(458, 41, 2, 1, 'Beatae aut sequi id aut dicta rerum a.', 21, 2, '2019-01-01', '2019-01-22', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(459, 34, 4, 3, 'Rerum alias distinctio assumenda consequatur sed esse minus doloribus sint.', 21, 2, '2018-12-29', '2019-01-19', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(460, 27, 3, 4, 'Et qui sunt praesentium ex aliquid repellat porro.', 7, 1, '2019-01-01', '2019-01-08', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(461, 49, 5, 1, 'Sed illo sunt eligendi odit voluptatem consequatur est non labore nam reprehenderit error.', 7, 1, '2018-12-31', '2019-01-07', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(462, 41, 3, 5, 'Praesentium nostrum quas iste rerum cum et cumque ut aut qui facere vel sed.', 7, 0, '2018-12-31', '2019-01-07', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(463, 24, 1, 1, 'Sint dignissimos iste facilis autem ut fuga quam officia a harum.', 21, 2, '2018-12-31', '2019-01-21', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(464, 46, 1, 2, 'Qui eum ea officia praesentium aut nesciunt voluptatem ut molestiae.', 7, 2, '2018-12-30', '2019-01-06', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(465, 2, 3, 1, 'Ut facilis fugiat earum dolores enim ex unde deserunt deleniti.', 21, 0, '2018-12-29', '2019-01-19', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(466, 12, 2, 2, 'Id quasi et cupiditate repellat nihil est minus commodi.', 14, 2, '2018-12-30', '2019-01-13', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(467, 4, 4, 2, 'Amet eveniet qui nulla optio aut aperiam facilis ipsum nobis.', 21, 1, '2019-01-02', '2019-01-23', '2019-07-22 21:35:48', '2019-07-24 13:43:42'),
(468, 5, 5, 3, 'Earum distinctio id eaque aut sequi quidem hic qui dolores necessitatibus omnis veritatis eum.', 21, 2, '2018-12-30', '2019-01-20', '2019-07-22 21:35:48', '2019-07-24 13:51:03'),
(469, 44, 5, 1, 'Eum fugiat in temporibus sed delectus fuga quos eveniet aut et unde aliquam.', 7, 1, '2019-01-01', '2019-01-08', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(470, 1, 3, 3, 'Rem et eum est eos voluptatem voluptatem ut non ullam voluptatum dolor modi non.', 14, 1, '2019-01-01', '2019-01-15', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(471, 11, 4, 3, 'Voluptatem sapiente vel eum qui doloremque officia numquam temporibus.', 21, 1, '2019-01-02', '2019-01-23', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(472, 8, 4, 2, 'Ut vero eos earum expedita aut eveniet adipisci a.', 21, 1, '2018-12-30', '2019-01-20', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(473, 25, 3, 3, 'Quia architecto omnis modi mollitia explicabo ipsam omnis quia est et quibusdam eum.', 14, 2, '2018-12-30', '2019-01-13', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(474, 48, 3, 2, 'Eum illum optio perspiciatis voluptatem quam ducimus voluptatem ratione.', 21, 1, '2019-01-01', '2019-01-22', '2019-07-22 21:35:48', '2019-07-25 06:45:37'),
(475, 43, 2, 5, 'Beatae nulla qui rerum exercitationem nobis ratione dolores nihil commodi id.', 21, 1, '2018-12-31', '2019-01-21', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(476, 2, 3, 5, 'Ipsum tenetur non beatae dignissimos repellat alias at voluptas sit.', 7, 0, '2019-01-01', '2019-01-08', '2019-07-22 21:35:48', '2019-07-22 21:35:48'),
(477, 21, 5, 3, 'Qui adipisci esse aut natus nisi et a voluptate consequuntur et asperiores ut.', 21, 1, '2018-12-31', '2019-01-21', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(478, 9, 3, 1, 'Sit quam nemo assumenda consectetur animi quasi occaecati ut expedita ea.', 14, 0, '2018-12-29', '2019-01-12', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(479, 38, 3, 2, 'Id ut nulla perferendis quam est facilis facilis explicabo consequatur est sit non.', 7, 2, '2019-01-02', '2019-01-09', '2019-07-22 21:35:49', '2019-07-25 06:49:26'),
(480, 49, 4, 2, 'Nobis et at cumque temporibus quis quis explicabo id vitae.', 14, 0, '2018-12-29', '2019-01-12', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(481, 41, 5, 5, 'Nostrum voluptas dolor nesciunt ipsam quibusdam optio sit sit nesciunt numquam id non est.', 7, 1, '2019-01-02', '2019-01-09', '2019-07-22 21:35:49', '2019-07-25 06:49:07'),
(482, 16, 1, 5, 'Aut voluptas ea inventore explicabo eos voluptates tempore error est nihil fuga.', 7, 1, '2018-12-30', '2019-01-06', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(483, 23, 5, 5, 'Harum voluptatum sit dolore quo voluptatem enim.', 21, 1, '2018-12-29', '2019-01-19', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(484, 17, 3, 5, 'Est maxime totam doloremque perspiciatis delectus praesentium consectetur est minus.', 14, 2, '2018-12-31', '2019-01-14', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(485, 43, 1, 1, 'Repellat earum at dolorum necessitatibus fugiat aspernatur.', 7, 1, '2019-01-01', '2019-01-08', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(486, 10, 4, 3, 'Ut aut et rerum aut veritatis molestiae in fugiat voluptate sed quod omnis.', 21, 1, '2018-12-31', '2019-01-21', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(487, 33, 2, 4, 'Provident omnis amet distinctio sint tempore officia consequatur sed et qui.', 14, 2, '2018-12-31', '2019-01-14', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(488, 2, 4, 5, 'Reiciendis et architecto repellendus voluptates maxime eum.', 14, 1, '2018-12-30', '2019-01-13', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(489, 16, 1, 1, 'Itaque perferendis maiores nam tempora est eum quos pariatur harum nemo nisi ut.', 7, 2, '2018-12-31', '2019-01-07', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(490, 14, 4, 3, 'Voluptatum aut non molestiae sapiente officiis reiciendis est deleniti officia harum.', 14, 0, '2019-01-02', '2019-01-16', '2019-07-22 21:35:49', '2019-07-22 21:35:49'),
(491, 1, 3, 1, 'me sijui niende wapi', 6, 1, '2019-07-24', '2019-07-30', '2019-07-24 13:27:43', '2019-07-24 13:50:51'),
(492, 1, 3, 1, 'me sijui niende wapi', 6, 1, '2019-07-24', '2019-07-30', '2019-07-24 13:28:05', '2019-07-24 13:50:44'),
(493, 51, 1, 3, 'Baby Shower', 4, 0, '2019-07-26', '2019-07-30', '2019-07-25 06:53:49', '2019-07-25 06:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `emp_no`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', 1, '2019-07-16 21:00:00', '2019-07-24 21:00:00'),
(2, 'Cohred', 1, '2019-07-16 21:00:00', '2019-07-30 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leave_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `leave_name`, `created_at`, `updated_at`) VALUES
(1, 'Adoption leave', '2019-07-18 21:00:00', '2019-07-04 21:00:00'),
(2, 'Pregnancy and/or pregnancy disability*', '2019-07-22 21:00:00', '2019-07-22 21:00:00'),
(3, 'Maternity/Paternity*', '2019-07-22 21:00:00', '2019-07-22 21:00:00'),
(4, 'Voting', '2019-07-22 21:00:00', '2019-07-23 21:00:00'),
(5, 'Annual Leave', '2019-07-22 21:00:00', '2019-07-22 21:00:00'),
(6, 'Other', '2019-07-16 21:00:00', '2019-07-12 21:00:00');

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
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_07_13_110847_create_applications_table', 1),
(42, '2019_07_23_000550_create_departments_table', 2),
(43, '2019_07_23_000624_create_roles_table', 2),
(44, '2019_07_23_203842_create_leaves_table', 3);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'HR', '2019-07-22 21:17:54', '2019-07-22 21:17:54'),
(2, 'USER', '2019-07-22 21:18:14', '2019-07-22 21:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `tel_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `f_name`, `l_name`, `role_id`, `department_id`, `tel_no`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bgaylord', 'Colton', 'Schmitt', '1', 3, '1-414-907-5242 x60023', 'econn@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'n0bEESpxr9', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(2, 'wherzog', 'Janie', 'Windler', '2', 2, '1-670-724-5341 x661', 'hoeger.alford@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dbEVET0JGi', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(3, 'farrell.brittany', 'Retta', 'Koss', '2', 1, '940.949.8838 x35399', 'uwehner@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WStZZAofh4', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(4, 'kertzmann.emory', 'Alice', 'Kertzmann', '2', 2, '+1.578.907.7329', 'francis.kohler@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ujz9CvoLkW', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(5, 'noe.morissette', 'Daisy', 'Spinka', '2', 5, '576-666-1320', 'lewis01@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6dAms50TJt', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(6, 'deven61', 'Pamela', 'Hahn', '2', 2, '+1-928-219-8804', 'hkilback@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E6zB0RTSEG', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(7, 'brice.grady', 'Barbara', 'Weimann', '1', 4, '1-639-249-6599', 'murphy.moore@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Src6Cw8B8Q', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(8, 'inienow', 'Rosella', 'Langworth', '1', 2, '436-270-7065', 'oconnell.antwan@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jqYg76XWFL', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(9, 'yfritsch', 'Maverick', 'Pfannerstill', '2', 2, '290-913-4596 x24689', 'igraham@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uKXnv4Edht', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(10, 'eschuppe', 'Frida', 'Kris', '2', 5, '1-795-577-5658 x6392', 'ralph.kris@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Jbt4FQJDic', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(11, 'lowe.emelia', 'Kaya', 'Torp', '2', 5, '+1-719-967-7064', 'howell.ebert@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9Fzp8uan28', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(12, 'karson05', 'Ivory', 'Zboncak', '1', 5, '(769) 200-7227 x585', 'mcglynn.lonny@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Eg08oF6A7V', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(13, 'joe84', 'Ladarius', 'Rosenbaum', '1', 2, '(845) 366-8483', 'alfred48@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LIWT3T9xQE', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(14, 'rene25', 'Lew', 'Gislason', '2', 2, '295-693-1017', 'lrath@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'moBJGcXNvY', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(15, 'rohan.buster', 'Sofia', 'Fahey', '1', 2, '231.743.5975', 'sipes.deon@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2unay2fh1T', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(16, 'lowell.kshlerin', 'Violet', 'Fay', '1', 4, '+1.820.621.8924', 'romaguera.arnold@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MjcZgQVxSa', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(17, 'vfunk', 'Joesph', 'Konopelski', '2', 1, '227.893.1892 x002', 'hauck.neil@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6If3T7w69j', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(18, 'rturcotte', 'Javonte', 'Hills', '1', 5, '835.809.4522 x1176', 'egleason@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wh4LeQ9ugy', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(19, 'hailie49', 'Linnea', 'Bins', '1', 4, '547-616-3822 x0196', 'uabshire@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gytdjeweUE', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(20, 'norwood.gutmann', 'Ashton', 'McLaughlin', '2', 3, '1-521-219-2285', 'kathleen95@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QznJSrPIuM', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(21, 'johns.elenor', 'Nikko', 'Fisher', '2', 1, '1-903-791-8227 x581', 'foconnell@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oTrD6Aai4z', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(22, 'cboehm', 'Amaya', 'Borer', '1', 5, '+1-915-763-2742', 'bailey.alene@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6aOSpgpggP', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(23, 'weber.kaci', 'Rose', 'Zboncak', '2', 5, '1-870-661-2426 x2591', 'lvonrueden@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VbCiC6tYFX', '2019-07-21 09:00:02', '2019-07-21 09:00:02'),
(26, 'trudie85', 'Magdalena', 'Ankunding', '1', 5, '(893) 902-0307 x8533', 'murphy.derrick@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dtl50vjV9B', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(27, 'xoconnell', 'Kasey', 'Denesik', '1', 2, '380.415.7170', 'bechtelar.porter@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8RmDfbB6ks', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(28, 'morar.maegan', 'Zack', 'Windler', '2', 3, '760-791-7248', 'giovanni57@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A7iRBNx94h', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(29, 'schinner.okey', 'Pamela', 'Wolf', '2', 4, '841.863.7974 x18283', 'nettie.gleason@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VjI31ZIjDR', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(30, 'petra27', 'Willow', 'Yost', '1', 3, '+1-553-964-9006', 'kgreenholt@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UF7TMUmKTM', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(31, 'nikita.jacobi', 'Ramiro', 'Herzog', '2', 5, '793.568.8537 x7574', 'ookeefe@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4eIwxLf5De', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(32, 'braeden08', 'Alvina', 'Jerde', '2', 5, '(830) 718-7155 x1774', 'ryann00@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MIpvaI984m', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(33, 'kyleigh80', 'Vaughn', 'Dickinson', '1', 1, '995.872.1108 x0577', 'thomas.boyle@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bjEQTgyK7c', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(34, 'agustin82', 'Fabiola', 'Considine', '2', 3, '+1-314-562-8873', 'umorissette@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uVUC3ynSm4', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(35, 'fboyle', 'Jaida', 'Goyette', '1', 2, '775.510.2617 x5699', 'dominic48@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '12CCZf5Yru', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(36, 'pete.bosco', 'Damon', 'Bartell', '2', 3, '+1-502-236-0416', 'corkery.santina@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wgqWIvTmBy', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(37, 'davis.emely', 'Samson', 'Jenkins', '1', 2, '+15545665418', 'ryan.christopher@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'brGY3zBopf', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(38, 'fwilderman', 'Hipolito', 'Jast', '2', 4, '286.779.1581', 'lesly.fritsch@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B7ILVgKAks', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(39, 'karina.ruecker', 'Laurence', 'Greenfelder', '1', 4, '(828) 517-1010 x62451', 'barton.dessie@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xzDanbuumG', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(40, 'miller.royal', 'Britney', 'Wilkinson', '2', 4, '(984) 660-0197 x370', 'imelda42@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VO3qafAC5h', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(41, 'torp.braxton', 'Cyril', 'Brakus', '1', 2, '952-601-9717 x418', 'ygoyette@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iPlmZFCV5T', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(42, 'zbode', 'Amelia', 'Wisozk', '2', 1, '1-435-627-8424', 'brant40@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7c6uE00Unh', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(43, 'akrajcik', 'Stephen', 'Marvin', '2', 1, '(268) 429-2519', 'phodkiewicz@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HqG9V6Okjl', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(44, 'nathen04', 'Layla', 'Schuppe', '1', 3, '+1.294.363.4904', 'cmcclure@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YsrISvp9HG', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(45, 'barney.sawayn', 'Amina', 'Wehner', '1', 3, '1-519-918-9333 x5255', 'weissnat.beatrice@hotmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'irCWusRZAW', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(46, 'acasper', 'Kavon', 'Veum', '1', 5, '793.489.9004 x9987', 'lorenzo.donnelly@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RPxfRJTXLJ', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(47, 'jacynthe.oreilly', 'Brenden', 'Haley', '1', 5, '+1-702-870-4337', 'birdie69@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'klT8aQ28Lz', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(48, 'fahey.isom', 'Dulce', 'Cummerata', '2', 4, '(634) 221-6690', 'neoma35@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LZ6OWpRNNX', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(49, 'yryan', 'Raymundo', 'Hermiston', '2', 2, '+1-486-483-4536', 'tlarson@yahoo.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bK6mMRbOfX', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(50, 'cameron.oberbrunner', 'Wilfred', 'Runolfsdottir', '1', 4, '+1-467-552-4265', 'macejkovic.rae@gmail.com', '2019-07-21 09:00:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BKAU899yBs', '2019-07-21 09:00:03', '2019-07-21 09:00:03'),
(51, 'Danco', 'Duncan', 'Kanyi', '1', 1, '0743756083', 'kanyiduncan14@gmail.com', NULL, '$2y$10$5vF1T1Y5Af/JRGtGTxbuR.UmRn5pEivaumwKWyDY28LMM7uhrO2ne', NULL, '2019-07-25 06:52:19', '2019-07-25 06:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
