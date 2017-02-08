-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2017 at 06:31 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `develoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipology` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `tipology`, `country`, `estate`, `city`, `email`, `description`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ÿy', 'Sociedad anónima (SA)', 'Colombia', 'Eu irure non et aliquid commodi molestiae', 'Ipsum corporis aute optio autem pariatur Cillum nulla magnam nesciunt amet dolore voluptas', 'tiga@yahoo.com', 'Iste doloribus in aspernatur magni id nostrum et maxime porro eiusmod dolor.', 'Pa$$w0rd!', NULL, '2017-02-08 14:35:39', '2017-02-08 19:52:05'),
(2, 'Gage Castillo', 'Sociedad anónima (SA)', 'Perú', 'Et maxime recusandae Qui quod alias sit porro molestiae ea dolor quo', 'Hic doloremque similique anim impedit molestiae qui eu cillum voluptas quod autem ab repudiandae esse consequuntur suscipit vero quis nostrum', 'vuhenyqydy@yahoo.com', 'Accusamus itaque culpa, unde rerum tenetur voluptatem. Adipisicing nemo et provident, repudiandae.', '$2y$10$jH/MPhasiHSlaliq0F/d9OziakHQpaczaSa1tPxMPZlTt5MEVI5Te', NULL, '2017-02-08 14:37:37', '2017-02-08 14:37:37'),
(3, 'Kareem Melendez', 'Sociedad anónima (SA)', 'Venezuela', 'Est esse repellendus Quis sit ut dignissimos sunt dolor quisquam', 'Sint eius velit pariatur Fugiat quia sed quidem amet sed vel numquam deserunt qui esse', 'cinu@gmail.com', 'In omnis consequatur, id deserunt rerum quia nobis autem esse, deserunt eveniet, fuga. Ut duis eveniet, nobis et irure qui.', '$2y$10$2wvo7gPc4jnSTjze4ndIhulJaCWCd6wDuDSpFvZ.xBE/slsXgPKQ6', NULL, '2017-02-08 19:52:56', '2017-02-08 19:52:56'),
(4, 'Giselle Roy', 'Sociedad anónima (SA)', 'Venezuela', 'Molestiae ut dolores esse est maiores aut voluptate voluptatem Numquam sunt eaque temporibus exercitationem dolor deleniti aliquip', 'Possimus aut placeat quae esse perspiciatis molestiae quibusdam', 'qytemacutu@hotmail.com', 'Minima laborum. Sit, voluptas at in dolores voluptate quia Nam cillum corporis ipsa, maiores.', '$2y$10$bzRWQa.Gt8tVXiLqxW3B5uvaScWZ96lpvDObFc2h/to3.PhY7eslm', NULL, '2017-02-08 19:53:37', '2017-02-08 19:53:37'),
(5, 'Nathaniel Larson', 'Sociedad anónima (SA)', 'Colombia', 'Id officia fugit nobis sed porro ea exercitationem ratione nulla', 'Nihil ad esse facilis natus aute sunt sunt et quae impedit voluptatem adipisci ut labore magna quia', 'cakilege@yahoo.com', 'Voluptatem neque optio, irure earum aut ab sit, qui id dolore veniam, quia porro magnam.', '$2y$10$kMkUHMwguhOuQTs8NhlZ1OmiTrGDK478RLciSOXo/NLJ3nUAOPeNK', NULL, '2017-02-08 19:53:46', '2017-02-08 19:53:46'),
(6, 'Kylynn Strickland', 'Sociedad anónima (SA)', 'Afganistan', 'Ut eos vel est nulla nihil et et aut quo non in est Nam laborum In laboriosam incidunt', 'Dolor exercitation culpa odit obcaecati veniam reprehenderit itaque dolorum nisi nesciunt aut voluptatem nihil deserunt laborum', 'tiwucihim@hotmail.com', 'Dolores quam totam facere quo blanditiis consequatur? Iste sit, fugiat impedit, soluta illum.', '$2y$10$CV5lJ1QWr9Posd6E8G/ZYOtplFjh4utQNbgqyUb1l3MFLk96NUB0a', NULL, '2017-02-08 19:53:54', '2017-02-08 19:53:54'),
(7, 'Merritt Snow', 'Sociedad anónima (SA)', 'Colombia', 'Dolore reprehenderit iusto rerum ipsum ea illo aliquam laborum Dolor tempore molestiae', 'Veritatis aspernatur a et nisi voluptatem distinctio Placeat in', 'jabu@yahoo.com', 'Alias itaque similique ullam aut accusamus assumenda aliqua. Laborum. Adipisci eligendi duis architecto enim exercitation quae quos.', '$2y$10$mkwgfnpkEFGBDtrCdZZhLOB1C/AtHLr68a8ZYF6Vli7Wm6SD0cC0q', NULL, '2017-02-08 19:54:07', '2017-02-08 19:54:07'),
(8, 'aaaa', 'Sociedad anónima (SA)', 'Perú', 'Quo in minus sint cumque minim beatae id velit in consectetur reiciendis non dolor', 'Consequatur recusandae Est aperiam commodi ullam impedit rerum officia ut dolor mollit nostrud', 'vaqug@hotmail.com', 'Suscipit eius est do maiores magna ducimus, illo dolorem occaecat assumenda quis dolores nihil laborum debitis qui a.', '$2y$10$dx9CXjYy8q71PQuSoIQJ4OCnPruzWetDCcUJDr4mpvaiv/dSsDB/K', NULL, '2017-02-08 20:18:32', '2017-02-08 20:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_02_07_152333_create_companies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
