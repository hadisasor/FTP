-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 09:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yosr`
--

-- --------------------------------------------------------

--
-- Table structure for table `arafats`
--

CREATE TABLE `arafats` (
  `id` int(10) UNSIGNED NOT NULL,
  `hajj_package_id` int(10) UNSIGNED DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arafats`
--

INSERT INTO `arafats` (`id`, `hajj_package_id`, `information`) VALUES
(184, 68, 'AC'),
(185, 68, 'Room lvl3'),
(186, 68, 'Bedroom lvl2'),
(187, 70, 'tent lvl 3');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `booker_id` int(10) UNSIGNED NOT NULL,
  `hajj_package_id` int(10) UNSIGNED DEFAULT NULL,
  `umrah_package_id` int(10) UNSIGNED DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `paid_amount` int(10) DEFAULT NULL,
  `left_amount` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) NOT NULL,
  `hajj_package_id` int(10) UNSIGNED DEFAULT NULL,
  `umrah_package_id` int(10) UNSIGNED DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `hajj_package_id`, `umrah_package_id`, `information`, `img`, `created_at`, `updated_at`) VALUES
(329, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(330, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(342, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(343, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(344, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(352, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(354, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(355, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(376, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(377, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(378, NULL, NULL, 'asdasdasd', NULL, NULL, NULL),
(480, NULL, NULL, 'asdasdasd', NULL, NULL, NULL);

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
-- Table structure for table `hajj_packages`
--

CREATE TABLE `hajj_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `groupLeader` varchar(255) NOT NULL,
  `numberOfPilgrims` int(11) DEFAULT NULL,
  `groupNumber` int(11) NOT NULL,
  `stayingDays` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `Th_airline` varchar(255) NOT NULL,
  `Th_departmentDate` date NOT NULL,
  `S_arrivalDate` date NOT NULL,
  `S_airline` varchar(255) NOT NULL,
  `S_departmentDate` date NOT NULL,
  `Th_arrivalDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hajj_packages`
--

INSERT INTO `hajj_packages` (`id`, `user_id`, `packageName`, `groupLeader`, `numberOfPilgrims`, `groupNumber`, `stayingDays`, `packagePrice`, `Th_airline`, `Th_departmentDate`, `S_arrivalDate`, `S_airline`, `S_departmentDate`, `Th_arrivalDate`, `created_at`, `updated_at`) VALUES
(94, 6, 'Economy', 'Consectetur dolor lo', 657, 1, -7037, 754, 'Velit ex fugiat vol', '2007-05-12', '2020-10-24', 'Qui ullamco sit est', '2001-07-19', '1998-10-14', NULL, NULL),
(95, 6, 'Premium', 'Nisi qui dolores num', 135, 2, -7857, 23, 'Do labore quae autem', '1977-11-30', '2000-04-19', 'Eaque adipisci et te', '1978-10-15', '2010-08-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hajj_package_hotel`
--

CREATE TABLE `hajj_package_hotel` (
  `id` int(10) NOT NULL,
  `hajj_package_id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hajj_package_hotel`
--

INSERT INTO `hajj_package_hotel` (`id`, `hajj_package_id`, `hotel_id`) VALUES
(161, 94, 2),
(162, 94, 4),
(163, 95, 1),
(164, 95, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `img` varchar(355) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img1` varchar(355) DEFAULT NULL,
  `img2` varchar(355) DEFAULT NULL,
  `img3` varchar(355) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `location`, `stars`, `img`, `created_at`, `updated_at`, `img1`, `img2`, `img3`) VALUES
(1, 'Swiss hotels Maqam Makkah', 'Makkah', 5, 'img/Hotels/Makkah/Swiss hotel Maqam Makkah/399535716.jpg', NULL, NULL, 'img/Hotels/Makkah/Swiss hotel Maqam Makkah/399535718.jpg', 'img/Hotels/Makkah/Swiss hotel Maqam Makkah/399535737.jpg', 'img/Hotels/Makkah/Swiss hotel Maqam Makkah/284750420.jpg'),
(2, 'Al-Ulayan Al-masi', 'Makkah', 3, 'img/Hotels/Makkah/Hotel Al-Ulayan Al-masi/192918040.jpg', NULL, NULL, 'img/Hotels/Makkah/Hotel Al-Ulayan Al-masi/193616109.jpg', 'img/Hotels/Makkah/Hotel Al-Ulayan Al-masi/193617339.jpg', 'img/Hotels/Makkah/Hotel Al-Ulayan Al-masi/193621756.jpg'),
(3, 'Artal Al-Tayeebah', 'Madinah', 2, 'img/Hotels/Madinah/Artal Al-Tayeebah/373341087.jpg', NULL, NULL, 'img/Hotels/Madinah/Artal Al-Tayeebah/373341159.jpg', 'img/Hotels/Madinah/Artal Al-Tayeebah/377251917.jpg', 'img/Hotels/Madinah/Artal Al-Tayeebah/378797982.jpg'),
(4, 'Saja Al-Madinah', 'Madinah', 4, 'img/Hotels/Madinah/Saja Al-Madinah/109605012.jpg', NULL, NULL, 'img/Hotels/Madinah/Saja Al-Madinah/165047860.jpg', 'img/Hotels/Madinah/Saja Al-Madinah/238221869.jpg', 'img/Hotels/Madinah/Saja Al-Madinah/109324797.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_umrah_package`
--

CREATE TABLE `hotel_umrah_package` (
  `umrah_package_id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imgPath` varchar(255) NOT NULL,
  `imgType` varchar(255) NOT NULL,
  `imgLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(5, '2022_08_30_032012_create_hajjpackages_table', 1),
(6, '2022_08_30_032037_create_umrahpackages_table', 1),
(7, '2022_09_28_184124_create_details_table', 1),
(8, '2022_09_28_184352_create_transports_table', 1),
(9, '2022_09_28_184445_create_hotels_table', 1),
(10, '2022_09_28_225703_create_transport_umrahpackage_table', 1),
(11, '2022_09_28_225732_create_transport_hajjpackage_table', 1),
(12, '2022_09_28_225804_create_hotel_umrahpackage_table', 1),
(13, '2022_09_28_225823_create_hotel_hajjpackage_table', 1),
(14, '2022_10_01_153653_create_arafats_table', 1),
(15, '2022_10_01_153715_create_minas_table', 1),
(16, '2022_10_01_154306_create_mina_hajjpackage_table', 1),
(17, '2022_10_01_154330_create_arafat_hajjpackage_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `minas`
--

CREATE TABLE `minas` (
  `id` int(10) UNSIGNED NOT NULL,
  `hajj_package_id` int(10) UNSIGNED DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `rating`, `comment`) VALUES
(184, 1, 4, 'he'),
(201, 4, 4, 'That\'s very good'),
(210, 1, 3, 'adsadsadas'),
(211, 1, 4, 'Good sdfsdf'),
(213, 2, 3, 'هذا نفر مو كويس'),
(214, 2, 3, 'هذا نفر مو كويس'),
(215, 2, 3, 'هذا نفر مو كويس'),
(216, 1, 4, 'هذا جيد'),
(217, 1, 4, 'هذا لذييييذ ياااا ولد');

-- --------------------------------------------------------

--
-- Table structure for table `review_user`
--

CREATE TABLE `review_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `review_id` int(10) UNSIGNED NOT NULL,
  `reviewed_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_user`
--

INSERT INTO `review_user` (`user_id`, `review_id`, `reviewed_id`) VALUES
(1, 201, 4),
(1, 210, 1),
(3, 211, 1),
(1, 213, 2),
(1, 214, 2),
(1, 215, 2),
(1, 216, 1),
(1, 217, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` int(10) UNSIGNED NOT NULL,
  `car` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `img` varchar(355) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_relations`
--

CREATE TABLE `transport_relations` (
  `hajjpackage_id` int(10) UNSIGNED DEFAULT NULL,
  `umrahpackage_id` int(10) UNSIGNED DEFAULT NULL,
  `transport_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `groupLeader` varchar(255) NOT NULL,
  `numberOfPilgrims` int(11) NOT NULL,
  `groupNumber` int(11) NOT NULL,
  `stayingDays` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `Th_airline` varchar(255) NOT NULL,
  `Th_departmentDate` date NOT NULL,
  `S_arrivalDate` date NOT NULL,
  `S_airline` varchar(255) NOT NULL,
  `S_departmentDate` date NOT NULL,
  `Th_arrivalDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `user_id`, `packageName`, `groupLeader`, `numberOfPilgrims`, `groupNumber`, `stayingDays`, `packagePrice`, `Th_airline`, `Th_departmentDate`, `S_arrivalDate`, `S_airline`, `S_departmentDate`, `Th_arrivalDate`, `created_at`, `updated_at`) VALUES
(1, 123, '123', '123', 123, 123, 123, 123, '123', '0000-00-00', '0000-00-00', '123', '0000-00-00', '0000-00-00', '2023-01-27 04:14:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `umrah_packages`
--

CREATE TABLE `umrah_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `groupLeader` varchar(255) NOT NULL,
  `numberOfPilgrims` int(11) DEFAULT NULL,
  `groupNumber` int(11) NOT NULL,
  `stayingDays` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `Th_departmentDate` date NOT NULL,
  `S_arrivalDate` date NOT NULL,
  `Th_airline` varchar(255) NOT NULL,
  `S_departmentDate` date NOT NULL,
  `Th_arrivalDate` date NOT NULL,
  `S_airline` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `umrah_packages`
--

INSERT INTO `umrah_packages` (`id`, `user_id`, `packageName`, `groupLeader`, `numberOfPilgrims`, `groupNumber`, `stayingDays`, `packagePrice`, `Th_departmentDate`, `S_arrivalDate`, `Th_airline`, `S_departmentDate`, `Th_arrivalDate`, `S_airline`, `created_at`, `updated_at`) VALUES
(97, 6, 'Ramadan', 'mood mood', NULL, 1, 6211, 800, '1987-01-31', '1981-08-17', 'Tempor et omnis dese', '1998-08-19', '1973-03-08', 'Illum consequat Ut', NULL, NULL),
(98, 6, 'Economy', 'Cumque labore et dol', 97, 2, 4933, 814, '1981-02-19', '2003-02-27', 'Dolor elit labore a', '2016-08-30', '1982-12-15', 'Eiusmod tempor moles', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fstname` varchar(255) NOT NULL,
  `lstname` varchar(255) NOT NULL,
  `citizen_id` varchar(13) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fstname`, `lstname`, `citizen_id`, `email`, `email_verified_at`, `phone`, `password`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eyad', 'Hajisa-i', NULL, 'Yadoofatani@admin.com', '2022-10-18 23:32:02', '(203) 507-6459', '$2y$10$O3IQ7vjwBkh/OcjJUFc7iesHufxX3a1a5g/yWRMqQJQDAfn1QNcQa', 'Admin', 'fnJs5PemISGGQ4APDgOV2M9eSkuhjg5KH61MbwejaO6N89AheC9c9TJt1pvk', '2022-10-18 23:32:02', '2022-10-18 23:32:02'),
(3, 'Eyad', 'Hajisa-i', NULL, 'Yadoofatani@gmail.com', '2022-10-18 23:32:02', '+1.775.681.1966', '$2y$10$Caeg90omB3ddj/VoB6q82OPS0EUcX5VwvtjyBNs97AjyC5fDcsFnm', 'Pilgrim', '1i5NsLLwOJmnqLoLhLdHBfzGjp1NR3Rvk7KC0fsuSTxuYOJNIhoxtlb4034R', '2022-10-18 23:32:02', '2022-10-18 23:32:02'),
(5, 'Abdulhadi', 'Sasor', NULL, 'hadi@gmail.com', NULL, '0954375136', '$2y$10$jmrPHGUMGvH/9Jlx70rTmO3rbaTpy7gGBcGHLIPzUWdd9bM0.bluO', 'Pilgrim', NULL, '2022-12-02 21:42:58', '2022-12-02 21:42:58'),
(6, 'mood', 'mood', NULL, 'moodx@gmail.com', NULL, '0931638239', '$2y$10$Z.GVt0lxBdi3.B9M5QPVRukTgSW.Fz8WyG6hHxxRdhFsXRhgyflTy', 'Admin', NULL, '2022-12-25 19:59:38', '2022-12-25 19:59:38'),
(10, 'fatani4', 'mohammad', NULL, 'moodxfat@gmail.com', NULL, '09413232423', '$2y$10$HteuLkTv65HA9FZcUAy56.rQe.yBqhFyBwy/gjtmA1a2ltgBXunw.', 'Admin', NULL, '2023-01-16 21:02:41', '2023-01-16 21:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE `visa` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `national_Id` int(13) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_Name` varchar(255) NOT NULL,
  `passport_Id` varchar(20) NOT NULL,
  `national_Idexp` date NOT NULL,
  `passport_Idexp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arafats`
--
ALTER TABLE `arafats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hajj_package_id` (`hajj_package_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booker_id` (`booker_id`),
  ADD KEY `hajj_package_id` (`hajj_package_id`),
  ADD KEY `umrah_package_id` (`umrah_package_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hajj_package_id` (`hajj_package_id`),
  ADD KEY `umrah_package_id` (`umrah_package_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hajj_packages`
--
ALTER TABLE `hajj_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hajjpackages_user_id_foreign` (`user_id`);

--
-- Indexes for table `hajj_package_hotel`
--
ALTER TABLE `hajj_package_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hajjpackage_id` (`hajj_package_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_umrah_package`
--
ALTER TABLE `hotel_umrah_package`
  ADD KEY `hajjpackage_id` (`umrah_package_id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `umrah_package_id` (`umrah_package_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minas`
--
ALTER TABLE `minas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hajj_package_id` (`hajj_package_id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `review_user`
--
ALTER TABLE `review_user`
  ADD KEY `reviewer_id` (`user_id`),
  ADD KEY `review_id` (`review_id`),
  ADD KEY `reviewer_id_2` (`reviewed_id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_relations`
--
ALTER TABLE `transport_relations`
  ADD KEY `transport_hajjpackage_hajjpackage_id_index` (`hajjpackage_id`),
  ADD KEY `transport_hajjpackage_transport_id_index` (`transport_id`),
  ADD KEY `umrahpackage_id` (`umrahpackage_id`);

--
-- Indexes for table `umrah_packages`
--
ALTER TABLE `umrah_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `umrahpackages_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visa`
--
ALTER TABLE `visa`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `national_Id` (`national_Id`),
  ADD UNIQUE KEY `passport_Id` (`passport_Id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hajj_packages`
--
ALTER TABLE `hajj_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `hajj_package_hotel`
--
ALTER TABLE `hajj_package_hotel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `minas`
--
ALTER TABLE `minas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umrah_packages`
--
ALTER TABLE `umrah_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`booker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`hajj_package_id`) REFERENCES `hajj_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`umrah_package_id`) REFERENCES `umrah_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`hajj_package_id`) REFERENCES `hajj_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`umrah_package_id`) REFERENCES `umrah_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hajj_packages`
--
ALTER TABLE `hajj_packages`
  ADD CONSTRAINT `hajjpackages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hajj_package_hotel`
--
ALTER TABLE `hajj_package_hotel`
  ADD CONSTRAINT `hajj_package_hotel_ibfk_1` FOREIGN KEY (`hajj_package_id`) REFERENCES `hajj_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hajj_package_hotel_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_umrah_package`
--
ALTER TABLE `hotel_umrah_package`
  ADD CONSTRAINT `hotel_umrah_package_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_umrah_package_ibfk_2` FOREIGN KEY (`umrah_package_id`) REFERENCES `umrah_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `minas`
--
ALTER TABLE `minas`
  ADD CONSTRAINT `minas_ibfk_1` FOREIGN KEY (`hajj_package_id`) REFERENCES `hajj_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_user`
--
ALTER TABLE `review_user`
  ADD CONSTRAINT `review_user_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transport_relations`
--
ALTER TABLE `transport_relations`
  ADD CONSTRAINT `transport_hajjpackage_transport_id_foreign` FOREIGN KEY (`transport_id`) REFERENCES `transports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transport_relations_ibfk_1` FOREIGN KEY (`hajjpackage_id`) REFERENCES `hajj_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_relations_ibfk_2` FOREIGN KEY (`umrahpackage_id`) REFERENCES `umrah_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umrah_packages`
--
ALTER TABLE `umrah_packages`
  ADD CONSTRAINT `umrahpackages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
