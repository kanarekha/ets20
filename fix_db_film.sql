-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2020 pada 11.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `film_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` char(4) NOT NULL,
  `synopsis` varchar(1000) NOT NULL,
  `country` varchar(50) NOT NULL,
  `directors` varchar(50) NOT NULL,
  `actors` varchar(50) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`film_id`, `title`, `year`, `synopsis`, `country`, `directors`, `actors`, `rating`, `duration`, `poster`, `type`, `created_at`, `updated_at`) VALUES
(1, 'A Queiet Place', '2018', 'Throughout the year 2020, most of Earth\'s human and animal populations have been annihilated by sightless extraterrestrial creatures. The creatures, which attack anything that makes noise, have hypersensitive hearing and are covered in armor which is invulnerable to bullets and explosives.\r\n\r\nThe Abbott family – wife Evelyn, husband Lee, congenitally deaf daughter Regan, and sons Marcus and Beau – silently scavenge for supplies in a deserted town. Going barefoot while out in the open, the family communicates in American Sign Language. Four-year-old Beau is drawn to a battery-powered space shuttle toy, but Lee takes it away due to the noise it would make. Regan returns the toy to Beau, who also takes the batteries that his father removed from it. Beau activates the toy when the family is walking home while crossing a bridge, giving away his location to a nearby creature that kills him before Lee can save him.', 'USA', 'John Krasinski', 'Emily Blunt', '7.50', 90, 'fotofilm/aquietplace.jpg', 'movie', '2020-10-29 15:48:33', '2020-10-29 15:48:33'),
(2, 'Avengers: Endgame', '2019', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 'United States', 'Anthony Russo, Joe Russo', 'Robert Downey Jr., Chris Evans, Mark Ruffalo', '8.40', 181, 'fotofilm/Avengers Endgame.jpg', 'movie', '2020-10-30 08:04:11', '2020-10-30 08:04:11'),
(3, 'Frozen', '2013', 'When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a sn', 'United States', 'Chris Buck, Jennifer Lee', 'Kristen Bell, Idina Menzel, Jonathan Groff', '7.40', 102, 'fotofilm/Frozen.jpg', 'movie', '2020-10-30 08:04:52', '2020-10-30 08:04:52'),
(4, 'Harry Potter and the Deathly Hallows Part 2', '2011', 'Harry, Ron, and Hermione search for Voldemorts remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.', 'United Kingdom', 'David Yates', 'Daniel Radcliffe, Emma Watson, Rupert Grint', '8.10', 130, 'fotofilm/harrypotter.jpg', 'movie', '2020-10-30 08:06:18', '2020-10-30 08:06:18'),
(5, 'Jurassic World', '2015', 'A new theme park, built on the original site of Jurassic Park, creates a genetically modified hybrid dinosaur, the Indominus Rex, which escapes containment and goes on a killing spree.', 'United States', ' Colin Trevorrow', 'Chris Pratt, Bryce Dallas Howard, Ty Simpkins', '7.00', 124, 'fotofilm/Jurassic World.jpg', 'movie', '2020-10-30 08:07:17', '2020-10-30 08:07:17'),
(6, 'Black Panther', '2018', 'TChalla, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his countrys past.', 'United States', ' Ryan Coogler', ' Chadwick Boseman, Michael B. Jordan, Lupita Nyong', '7.30', 134, 'fotofilm/Black Panther.jpg', 'movie', '2020-10-30 08:08:59', '2020-10-30 08:08:59'),
(7, 'Beauty and the Beast', '2017', 'A selfish Prince is cursed to become a monster for the rest of his life, unless he learns to fall in love with a beautiful young woman he keeps prisoner.', 'United States', 'Bill Condon', ' Emma Watson, Dan Stevens, Luke Evans ', '7.10', 129, 'fotofilm/Beauty and the Beast.jpg', 'movie', '2020-10-30 08:09:47', '2020-10-30 08:09:47'),
(8, 'Parasite', '2019', 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', 'South Korea', 'Bong Joon Ho', 'Kang-ho Song, Sun-kyun Lee, Yeo-jeong Jo ', '8.60', 132, 'fotofilm/Parasite.jpg', 'movie', '2020-10-30 08:11:24', '2020-10-30 08:11:24'),
(9, 'Crazy Rich Asians', '2018', 'This contemporary romantic comedy, based on a global bestseller, follows native New Yorker Rachel Chu to Singapore to meet her boyfriends family.', 'United States', 'Jon M. Chu', 'Constance Wu, Henry Golding, Michelle Yeoh ', '6.90', 120, 'fotofilm/Crazy Rich Asians.jpg', 'movie', '2020-10-30 08:12:36', '2020-10-30 08:12:36'),
(10, 'Breaking Bad', '2008', 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his familys future.', 'United States', ' Vince Gilligan', 'Bryan Cranston, Aaron Paul, Anna Gunn', '9.50', 49, 'fotofilm/Breaking Bad.jpg', 'series', '2020-10-30 08:13:59', '2020-10-30 08:13:59'),
(11, 'Game of Thrones', '2011', 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.', 'United States', ' David Benioff, D.B. Weiss', 'Emilia Clarke, Peter Dinklage, Kit Harington ', '9.30', 57, 'fotofilm/Game of thrones.jpg', 'series', '2020-10-30 08:14:39', '2020-10-30 08:14:39'),
(12, 'Avatar: The Last Airbender', '2005', 'In a war-torn world of elemental magic, a young boy reawakens to undertake a dangerous mystic quest to fulfill his destiny as the Avatar, and bring peace to the world.', 'United States', 'Michael Dante DiMartino, Bryan Konietzko', 'Zach Tyler, Mae Whitman, Jack De Sena', '9.20', 23, 'fotofilm/Avatar The Last Airbender.jpg', 'series', '2020-10-30 08:15:13', '2020-10-30 08:15:13'),
(13, 'Sherlock', '2010', 'A modern update finds the famous sleuth and his doctor partner solving crime in 21st century London.', 'United Kingdom', 'Mark Gatiss, Steven Moffat', ' Benedict Cumberbatch, Martin Freeman, Una Stubbs', '9.10', 88, 'fotofilm/Sherlock.jpg', 'series', '2020-10-30 08:15:53', '2020-10-30 08:15:53'),
(14, 'The Haunting of Hill House', '2018', 'Flashing between past and present, a fractured family confronts haunting memories of their old home and the terrifying events that drove them from it.', 'United States', 'Mike Flanagan', 'Michiel Huisman, Carla Gugino, Henry Thomas', '8.70', 57, 'fotofilm/The Haunting of Hill House.jpg', 'series', '2020-10-30 08:16:29', '2020-10-30 08:16:29'),
(15, 'Money Heist', '2017', 'An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.', 'Spain', 'Álex Pina', 'Úrsula Corberó, Álvaro Morte, Itziar Ituño ', '8.40', 70, 'fotofilm/Money Heist.jpg', 'series', '2020-10-30 08:17:14', '2020-10-30 08:17:14'),
(16, 'The End of the F***ing World', '2017', 'James is 17 and is pretty sure he is a psychopath. Alyssa, also 17, is the cool and moody new girl at school. The pair make a connection and she persuades him to embark on a road trip in search of her', 'Spain', 'Álex Pina', 'Úrsula Corberó, Álvaro Morte, Itziar Ituño ', '8.10', 47, 'fotofilm/The End of the Fing World.jpg', 'series', '2020-10-30 08:17:57', '2020-10-30 08:17:57'),
(17, 'Wonder Woman', '2017', 'In present-day Paris, Diana Prince receives a photographic plate from Wayne Enterprises (accompanied by a letter from Bruce Wayne) of herself and four men taken during World War I, prompting her to', 'USA', 'Patty Jenkins', 'Gal Gadot, Chris Pine', '7.40', 141, 'fotofilm/wonderwoman.jpg', 'movie', '2020-10-31 01:13:33', '2020-10-31 01:13:33'),
(18, 'Spectre', '2015', 'A posthumous message from the previous M leads MI6 agent James Bond to carry out an unauthorized mission in Mexico City on the Day of the Dead, where he stops a terrorist bombing plot. Bond kills Marc', 'USA', 'Sam Mendes', 'Daniel Craig', '6.80', 148, 'fotofilm/spectre.jpg', 'movie', '2020-10-31 01:34:10', '2020-10-31 01:34:10'),
(19, 'Jumanji : Welcome to The Jungle', '2017', 'In 1996, in Brantford, New Hampshire, teenager Alex Vreeke receives a board game called Jumanji from his father who discovered it half buried in sand at the coast while jogging.', 'USA', 'Jake Kasdan', 'Dwayne Johnson', '6.90', 119, 'fotofilm/jumanji.jpg', 'movie', '2020-10-31 01:43:56', '2020-10-31 01:43:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(5) NOT NULL,
  `nama_genre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`genre_id`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2020-10-30 08:56:09', '2020-10-30 08:56:09'),
(2, 'Romance', '2020-10-30 08:56:09', '2020-10-30 08:56:09'),
(3, 'Drama', '2020-10-30 08:56:09', '2020-10-30 08:56:09'),
(4, 'Thriller', '2020-10-30 08:56:09', '2020-10-30 08:56:09'),
(5, 'Animation', '2020-10-30 08:56:09', '2020-10-30 08:56:09'),
(6, 'Horror', '2020-10-30 08:56:09', '2020-10-30 08:56:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `have`
--

CREATE TABLE `have` (
  `film_id` int(5) NOT NULL,
  `genre_id` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `role_id` int(5) NOT NULL,
  `name_role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`role_id`, `name_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-29 14:46:17', '2020-10-29 14:46:17'),
(2, 'user', '2020-10-29 14:46:17', '2020-10-29 14:46:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(5) DEFAULT NULL,
  `name_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `picture_user` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `name_user`, `email`, `password`, `phone_number`, `picture_user`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rida Adila', 'ridaadila10@gmail.com', '$2y$10$OoX2OzphJPzWpr1ocHH9HewZ4yVn9nURde/qOdEa33AxPJSiejvUW', '082140063816', NULL, '2020-10-29 21:22:44', '2020-10-29 21:22:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_activity`
--

CREATE TABLE `user_activity` (
  `id_user_activity` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `film_id` int(5) NOT NULL,
  `rating_film` decimal(4,2) NOT NULL,
  `review_film` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_activity`
--

INSERT INTO `user_activity` (`id_user_activity`, `user_id`, `film_id`, `rating_film`, `review_film`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '6.50', 'This is not bad', '2020-10-31 00:06:05', '2020-10-31 00:06:05'),
(2, 1, 2, '8.80', 'The best film i\'ve ever seen', '2020-10-31 01:20:57', '2020-10-31 01:20:57'),
(3, 1, 3, '7.50', 'i thin this is amazing film', '2020-10-31 02:35:16', '2020-10-31 02:35:16'),
(4, 1, 4, '7.20', 'This film is nice', '2020-10-31 03:02:16', '2020-10-31 03:02:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indeks untuk tabel `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`film_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`id_user_activity`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `id_user_activity` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`),
  ADD CONSTRAINT `have_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `have_ibfk_3` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Ketidakleluasaan untuk tabel `user_activity`
--
ALTER TABLE `user_activity`
  ADD CONSTRAINT `user_activity_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`),
  ADD CONSTRAINT `user_activity_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
