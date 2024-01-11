-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 04:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_lara`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_models`
--

CREATE TABLE `about_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `subtitle` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_models`
--

INSERT INTO `about_models` (`id`, `title`, `subtitle`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'About Me-1', 'Lorem Ipsum has been the industry\'s-1', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.-1', '1674997808-63d670301ead9.jpg', 1, '2023-01-29 06:51:18', '2024-01-10 21:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `banner_sections`
--

CREATE TABLE `banner_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `pro` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_sections`
--

INSERT INTO `banner_sections` (`id`, `title`, `name`, `pro`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Welcome To ZamanIt', 'ZamanIT', 'SEO Expert', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1675334914-63db95025348c.jpg', 1, '2023-01-12 12:41:42', '2023-02-02 04:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Web Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1675521649-63de6e71401ea.jpg', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2023-02-01 02:52:10', '2023-02-04 08:40:49'),
(3, 'Butter', 'dfsdfsdasfdasdffds sdfsdf sdfsdf sdf asdf  s fs', '1675521169.jpg', 'sdfsdaf', 1, '2023-02-04 08:32:49', '2023-02-04 08:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `client_pro` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `client_pro`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Amrito Bosu', 'web dev', '1675598715.jpg', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2023-02-05 06:05:15', '2023-02-05 06:05:15'),
(4, 'Jack', 'web dev-1', '1675598738.jpg', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2023-02-05 06:05:38', '2023-02-05 06:05:38'),
(5, 'Liam.', 'Digital ,m', '1675598812.jpg', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2023-02-05 06:06:52', '2023-02-05 06:06:52'),
(6, 'Ana', 'seo expert', '1675598901.jpg', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2023-02-05 06:08:21', '2023-02-05 06:08:21'),
(7, 'Amrita Bosu', 'Web dev', '1704942999.png', 'We have a team of experts in SEO, Linkbuilding, Social Media Marketing and Web Design and Development. Our team of digital marketing professionals is highly experienced and knowledgeable in the', 1, '2024-01-10 21:16:39', '2024-01-10 21:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `firstname`, `lastname`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Zaman', 'IT', '1675250357.jpg', '2023-02-01 05:19:17', '2023-02-01 05:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Amrito Bosu', 'dsf', 'dfsfsd', '2023-01-30 08:02:39', '2023-01-30 08:02:39'),
(14, 'Shekher', 'Shekherpaul36@gmail.com', 'hello amrito', '2023-02-01 01:38:48', '2023-02-01 01:38:48'),
(15, 'Amrito Bosu', 'fdsfd', 'sdfsfd', '2023-02-04 23:28:45', '2023-02-04 23:28:45'),
(16, 'dsfdsf', 'sdffsd', 'sdf', '2023-02-04 23:29:12', '2023-02-04 23:29:12'),
(17, 'Amrita Bosu', 'amritabosu98@gmail.com', 'hi', '2024-01-10 21:10:06', '2024-01-10 21:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
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
(5, '2023_01_12_124207_create_banner_sections_table', 2),
(6, '2023_01_29_111903_create_about_models_table', 3),
(7, '2023_01_29_143548_create_teams_table', 4),
(8, '2023_01_30_040953_create_services_table', 5),
(9, '2023_01_30_063421_create_clients_table', 6),
(10, '2023_01_30_111546_create_messages_table', 7),
(11, '2023_01_31_061430_create_profiles_table', 8),
(12, '2023_02_01_050140_create_portfolios_table', 9),
(13, '2023_02_01_074147_create_blogs_table', 10),
(14, '2023_02_01_102139_create_logos_table', 11),
(15, '2023_02_04_152537_create_comments_table', 12),
(16, '2023_02_04_164957_create_new_comments_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `new_comments`
--

CREATE TABLE `new_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amritabosu98@gmail.com', '$2y$10$vIJOi8Ga0pbjTon3ALjCJe2nvUg/ncV9CzzItYlGXhm5bZxmCac02', '2023-01-16 17:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `desc` text NOT NULL,
  `item_1` varchar(191) NOT NULL,
  `item_2` varchar(191) NOT NULL,
  `item_3` varchar(191) NOT NULL,
  `item_4` varchar(191) NOT NULL,
  `item_5` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `desc`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply', '1675232435.jpg', '2023-02-01 00:20:35', '2023-02-05 01:36:27'),
(3, 'PageMaker including versions of Lorem Ipsum.', 'ook. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'PageMaker including', 'PageMaker including', 'PageMaker including', 'PageMaker including', 'PageMaker including', '1675575839.jpg', '2023-02-04 23:43:59', '2023-02-04 23:43:59'),
(4, 'This Web page is desigen by Html, css, Js and Develop in Laravel', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Web Development', 'Responsive Desigen', 'Smooth Scrolling', 'Bacekend in  laravel', 'Admin pnale also Responsive', '1675582498.jpg', '2023-02-05 01:34:58', '2023-02-05 01:34:58'),
(5, 'PageMaker including versions of Lorem Ipsum.', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Digital Marketing', 'versions of Lorem Ipsum.', 'versions of Lorem Ipsum.', 'versions of Lorem Ipsum.', 'versions of Lorem Ipsum.', '1675583104.jpg', '2023-02-05 01:45:04', '2023-02-05 01:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `prof` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `about_desc` text NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `linkedin` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `prof`, `phone`, `email`, `address`, `image`, `about_desc`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(4, 'Amrito Bosu', 'Web Developer', '01884119754', 'amritabosu98@gmail.com', 'Narail, Dhaka, Bangladesh', '1675170821.jpg', 'electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', '2023-01-31 07:13:41', '2023-01-31 07:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `item_1` varchar(191) NOT NULL,
  `item_2` varchar(191) NOT NULL,
  `item_3` varchar(191) NOT NULL,
  `item_4` varchar(191) NOT NULL,
  `item_5` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `target`, `name`, `title`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'data-plane-2', 'Web Development', 'I will design a professional website for your business', 'Interactive Elements', 'Mobile / Tablet Responsive Design', 'Licensed Stock Photos', 'Form Submissions with CMS Panel', 'Google Maps Integration', '1675496083.jpg', 'I am a UX and UI designer specializing in designing personal or business website. Enjoy simple pricing ($200 for the Home Page and $100 for each additional Page). All sites are connected to a beautiful and easy-to-use editing panel with a Contact Management System for website updates. Be sure to contact first for information and tutorial.', 1, '2023-02-04 01:34:43', '2023-02-04 01:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `linkedin` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `image`, `facebook`, `twitter`, `instagram`, `linkedin`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Amrito Bosu', 'Web Developer', '1675016924-63d6badcb9463.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 11:35:26', '2023-01-29 12:28:44'),
(4, 'pant', 'fdgdf', '1675017932.jpg', 'fdggf', 'gfgf', 'fggf', 'fgf', 1, '2023-01-29 12:45:32', '2023-01-29 12:45:32'),
(5, 'Jack', 'SEO Expert', '1675018480.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 12:54:41', '2023-01-29 12:54:41'),
(6, 'Harry', 'Web Designer', '1675018554.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 12:55:54', '2023-01-29 12:55:54'),
(7, 'Jacob', 'Facebook Marketer', '1675018629.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 12:57:09', '2023-01-29 12:57:09'),
(8, 'John', 'Web Dev', '1675018864.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 13:01:05', '2023-01-29 13:01:05'),
(9, 'Robert', 'Instagram Marketer', '1675018916.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 13:01:56', '2023-01-29 13:01:56'),
(10, 'Michael', 'Linkedin Marketer', '1675018976.jpg', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 'https://www.facebook.com/amrita.bosu.184', 1, '2023-01-29 13:02:56', '2023-01-29 13:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amrito Bosu', 'amritabosu98@gmail.com', NULL, '$2y$10$YqoaBSLa.gzzAnLD/9SeNe.6943SnxyIopXb9VsxiVw7NcoKXeSN6', 'OjYFqSDC9Sf0eTarN4KL81AO3cRm0PxNcMJNXrJjC4Nv8OvqkleDOf13A8jc', '2023-01-09 08:52:01', '2023-01-10 17:39:53'),
(2, 'Amrito', 'amrito@gmail.com', NULL, '123456789', NULL, NULL, NULL),
(3, 'Akm Ashraf', 'ashraf@gmail.com', NULL, '$2y$10$sqA6I.UzWe1ebsBhpFxCzel.NBv3MMRxSmBzC4P0lUCp1Jjw9/8ne', NULL, '2023-01-16 17:27:26', '2023-01-16 17:27:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_models`
--
ALTER TABLE `about_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_sections`
--
ALTER TABLE `banner_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_comments`
--
ALTER TABLE `new_comments`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `about_models`
--
ALTER TABLE `about_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_sections`
--
ALTER TABLE `banner_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `new_comments`
--
ALTER TABLE `new_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
