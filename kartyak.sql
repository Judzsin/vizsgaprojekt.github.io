-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 22. 18:35
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `lethalomen`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kartyak`
--

CREATE TABLE `kartyak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Kártyanév` varchar(255) NOT NULL,
  `Kártyakép` varchar(255) NOT NULL,
  `Ár` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `kartyak`
--

INSERT INTO `kartyak` (`id`, `Kártyanév`, `Kártyakép`, `Ár`, `created_at`, `updated_at`) VALUES
(3, 'Battle of Legends', 'public/storage/kartyak/Battle of Legends.png', 400, NULL, NULL),
(4, 'Bringing On!', 'public/storage/kartyak/Bringing On!.png', 500, NULL, NULL),
(5, 'Cerevia', 'public/storage/kartyak/Cerevia.png', 500, NULL, NULL),
(6, 'Come in!', 'public/storage/kartyak/Come in!.png', 500, NULL, NULL),
(7, 'Dark Kingdom', 'public/storage/kartyak/Dark Kingdom.png', 340, NULL, NULL),
(8, 'Destiny', 'public/storage/kartyak/Destiny.png', 435, NULL, NULL),
(9, 'Dráku', 'public/storage/kartyak/Dráku.png', 800, NULL, NULL),
(10, 'Golden Age', 'public/storage/kartyak/Golden Age.png', 780, NULL, NULL),
(11, 'Hall of Eternity', 'public/storage/kartyak/Hall of Eternity.png', 870, NULL, NULL),
(12, 'Harvest', 'public/storage/kartyak/Harvest.png', 750, NULL, NULL),
(13, 'Is anyone coming?', 'public/storage/kartyak/Is anyone coming_.png', 600, NULL, NULL),
(14, 'Light Kingdom', 'public/storage/kartyak/Light Kingdom.png', 450, NULL, NULL),
(15, 'Lord of the Dimensions', 'public/storage/kartyak/Lord of the Dimensions.png', 670, NULL, NULL),
(16, 'Melody', 'public/storage/kartyak/Melody.png', 1000, NULL, NULL),
(17, 'Mercy', 'public/storage/kartyak/Mercy.png', 500, NULL, NULL),
(18, 'Nastor', 'public/storage/kartyak/Nastor.png', 300, NULL, NULL),
(19, 'Nesta', 'public/storage/kartyak/Nesta.png', 1200, NULL, NULL),
(20, 'Ruined Sanctuary', 'public/storage/kartyak/Ruined Sanctuary.png', 640, NULL, NULL),
(21, 'Sanctuary of Cosmos', 'public/storage/kartyak/Sanctuary of Cosmos.png', 750, NULL, NULL),
(22, 'SaraZal', 'public/storage/kartyak/SaraZal.png', 1500, NULL, NULL),
(23, 'The End', 'public/storage/kartyak/The End.png', 200, NULL, NULL),
(24, 'The truth', 'public/storage/kartyak/The truth.png', 710, NULL, NULL),
(25, 'Thor', 'public/storage/kartyak/Thor.png', 2100, NULL, NULL),
(26, 'Witch Hunter', 'public/storage/kartyak/Witch Hunter.png', 350, NULL, NULL),
(27, 'Your choice', 'public/storage/kartyak/Your choice.png', 560, NULL, NULL),
(30, 'Zangeki', 'public/storage/kartyak/Zangeki.png', 900, NULL, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kartyak`
--
ALTER TABLE `kartyak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `kartyak`
--
ALTER TABLE `kartyak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
