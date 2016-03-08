--
-- Database: `poly_date_test`
--
CREATE DATABASE IF NOT EXISTS `poly_date_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `poly_date_test`;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state`) VALUES
(1, 'Portland', 'Oregon'),
(2, 'Portland', 'Oregon'),
(3, 'Portland', 'Oregon'),
(4, 'Portland', 'Oregon'),
(5, 'Portland', 'Oregon'),
(6, 'Portland', 'Oregon'),
(7, 'Portland', 'Oregon'),
(8, 'Portland', 'Oregon'),
(9, 'Portland', 'Oregon'),
(10, 'Portland', 'Oregon'),
(11, 'Portland', 'Oregon'),
(12, 'Portland', 'Oregon'),
(13, 'Portland', 'Oregon'),
(14, 'Portland', 'Oregon'),
(15, 'Portland', 'Oregon'),
(16, 'Portland', 'Oregon'),
(17, 'Portland', 'Oregon'),
(18, 'Portland', 'Oregon'),
(19, 'Portland', 'Oregon'),
(20, 'Portland', 'Oregon'),
(21, 'Portland', 'Oregon'),
(22, 'Portland', 'Oregon'),
(23, 'Portland', 'Oregon'),
(24, 'Portland', 'Oregon'),
(25, 'Portland', 'Oregon'),
(26, 'Portland', 'Oregon'),
(27, 'Portland', 'Oregon'),
(28, 'Portland', 'Oregon'),
(29, 'Portland', 'Oregon'),
(30, 'Portland', 'Oregon'),
(31, 'Portland', 'Oregon'),
(32, 'Portland', 'Oregon'),
(33, 'Portland', 'Oregon'),
(34, 'Portland', 'Oregon'),
(35, 'Portland', 'Oregon'),
(36, 'Portland', 'Oregon'),
(37, 'Portland', 'Oregon'),
(38, 'Portland', 'Oregon'),
(39, 'Portland', 'Oregon'),
(40, 'Portland', 'Oregon'),
(41, 'Portland', 'Oregon'),
(42, 'Portland', 'Oregon'),
(43, 'Portland', 'Oregon'),
(44, 'Portland', 'Oregon'),
(45, 'Portland', 'Oregon'),
(46, 'Portland', 'Oregon'),
(47, 'Portland', 'Oregon'),
(48, 'Portland', 'Oregon'),
(49, 'Portland', 'Oregon'),
(50, 'Portland', 'Oregon'),
(51, 'Portland', 'Oregon'),
(52, 'Portland', 'Oregon'),
(53, 'Portland', 'Oregon'),
(54, 'Portland', 'Oregon'),
(55, 'Portland', 'Oregon'),
(56, 'Portland', 'Oregon'),
(57, 'Portland', 'Oregon'),
(58, 'Portland', 'Oregon'),
(59, 'Portland', 'Oregon'),
(60, 'Portland', 'Oregon'),
(61, 'Portland', 'Oregon'),
(62, 'Portland', 'Oregon'),
(63, 'Portland', 'Oregon'),
(64, 'Portland', 'Oregon'),
(65, 'Portland', 'Oregon'),
(66, 'Portland', 'Oregon'),
(67, 'Portland', 'Oregon'),
(68, 'Portland', 'Oregon'),
(69, 'Portland', 'Oregon'),
(70, 'Portland', 'Oregon'),
(71, 'Portland', 'Oregon'),
(72, 'Portland', 'Oregon'),
(73, 'Portland', 'Oregon'),
(74, 'Portland', 'Oregon'),
(75, 'Portland', 'Oregon'),
(76, 'Portland', 'Oregon'),
(77, 'Portland', 'Oregon'),
(78, 'Portland', 'Oregon'),
(79, 'Portland', 'Oregon'),
(80, 'Portland', 'Oregon'),
(81, 'Portland', 'Oregon'),
(82, 'Portland', 'Oregon'),
(83, 'Portland', 'Oregon'),
(84, 'Portland', 'Oregon'),
(85, 'Portland', 'Oregon'),
(86, 'Portland', 'Oregon'),
(87, 'Portland', 'Oregon'),
(88, 'Portland', 'Oregon'),
(89, 'Portland', 'Oregon'),
(90, 'Portland', 'Oregon'),
(91, 'Portland', 'Oregon'),
(92, 'Portland', 'Oregon'),
(93, 'Portland', 'Oregon'),
(94, 'Portland', 'Oregon'),
(95, 'Portland', 'Oregon'),
(96, 'Portland', 'Oregon');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kinks`
--

CREATE TABLE `kinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `relationship_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE `relationships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_one` int(11) DEFAULT NULL,
  `user_id_two` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `identity` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `kink_friendly` tinyint(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `about_me` text,
  `interests` varchar(255) DEFAULT NULL,
  `seeking_gender` varchar(255) DEFAULT NULL,
  `seeking_relationship_type` varchar(255) DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `zip_code_id` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zip_codes`
--

CREATE TABLE `zip_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `zip_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zip_codes`
--

INSERT INTO `zip_codes` (`id`, `city_id`, `zip_number`) VALUES
(36, 3, 97201),
(37, 4, 97201),
(38, 5, 97201),
(39, 6, 97201),
(40, 7, 97201),
(41, 8, 97201),
(42, 9, 97201),
(43, 10, 97201),
(44, 11, 97201),
(45, 12, 97201),
(46, 13, 97201),
(47, 14, 97201),
(48, 15, 97201),
(49, 16, 97201),
(50, 17, 97201),
(51, 18, 97201),
(52, 19, 97201),
(53, 20, 97201),
(54, 21, 97201),
(55, 22, 97201),
(56, 23, 97201),
(57, 24, 97201),
(58, 25, 97201),
(59, 26, 97201),
(60, 27, 97201),
(61, 28, 97201),
(62, 29, 97201),
(63, 30, 97201),
(64, 31, 97201),
(65, 32, 97201),
(66, 33, 97201),
(67, 34, 97201),
(68, 35, 97201),
(69, 36, 97201),
(70, 37, 97201),
(71, 38, 97201),
(72, 39, 97201),
(73, 40, 97201),
(74, 41, 97201),
(75, 42, 97201),
(76, 43, 97201),
(77, 44, 97201),
(78, 45, 97201),
(79, 46, 97201),
(80, 47, 97201),
(81, 48, 97201),
(82, 49, 97201),
(83, 50, 97201),
(84, 51, 97201),
(85, 52, 97201),
(86, 53, 97201),
(87, 54, 97201),
(88, 55, 97201),
(89, 56, 97201),
(90, 57, 97201),
(91, 58, 97201),
(92, 59, 97201),
(93, 60, 97201),
(94, 61, 97201),
(95, 62, 97201),
(96, 63, 97201),
(97, 64, 97201),
(98, 65, 97201),
(99, 66, 97201),
(100, 67, 97201),
(101, 68, 97201),
(102, 69, 97201),
(103, 70, 97201),
(104, 71, 97201),
(105, 72, 97201),
(106, 73, 97201),
(107, 74, 97201),
(108, 75, 97201),
(109, 76, 97201),
(110, 77, 97201),
(111, 78, 97201),
(112, 79, 97201),
(113, 80, 97201),
(114, 81, 97201),
(115, 82, 97201),
(116, 83, 97201),
(117, 84, 97201),
(118, 85, 97201),
(119, 86, 97201),
(120, 87, 97201),
(121, 88, 97201),
(122, 89, 97201),
(123, 90, 97201),
(124, 91, 97201),
(125, 92, 97201),
(126, 93, 97201),
(127, 94, 97201),
(128, 95, 97201),
(129, 96, 97201);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kinks`
--
ALTER TABLE `kinks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `relationships`
--
ALTER TABLE `relationships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `zip_codes`
--
ALTER TABLE `zip_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kinks`
--
ALTER TABLE `kinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relationships`
--
ALTER TABLE `relationships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;
--
-- AUTO_INCREMENT for table `zip_codes`
--
ALTER TABLE `zip_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
