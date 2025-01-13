-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 13, 2025 at 06:18 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE `artykuly` (
  `id` int(11) NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `data_publikacji` date NOT NULL,
  `tresc_artykulu` mediumtext NOT NULL,
  `data_ostatniej_zmiany` date DEFAULT NULL,
  `data_usuniecia` date DEFAULT NULL,
  `aktywny` char(1) NOT NULL,
  `czy_komentarze_dozwolone` char(1) NOT NULL,
  `użytkownicy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `asoc_artykul_kategoria`
--

CREATE TABLE `asoc_artykul_kategoria` (
  `id_asoc` int(11) NOT NULL,
  `kiedy_dodano` date NOT NULL,
  `kiedy_usunieto` date DEFAULT NULL,
  `kategorie_artykuly_id` int(11) NOT NULL,
  `artykuly_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `asoc_artykul_tag`
--

CREATE TABLE `asoc_artykul_tag` (
  `id_asoc` int(11) NOT NULL,
  `kiedy_dodano` date NOT NULL,
  `kiedy_usunieto` date DEFAULT NULL,
  `tagi_artykuly_id` int(11) NOT NULL,
  `artykuly_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `asoc_rola_user`
--

CREATE TABLE `asoc_rola_user` (
  `id_asoc` int(11) NOT NULL,
  `kiedy_nadano` date NOT NULL,
  `kiedy_odebrano` date DEFAULT NULL,
  `rola_id` int(11) NOT NULL,
  `użytkownicy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `asoc_rola_user`
--

INSERT INTO `asoc_rola_user` (`id_asoc`, `kiedy_nadano`, `kiedy_odebrano`, `rola_id`, `użytkownicy_id`) VALUES
(18, '2025-01-13', NULL, 3, 42),
(19, '2025-01-13', NULL, 1, 42),
(20, '2025-01-13', NULL, 2, 42),
(21, '2025-01-13', '2025-01-13', 4, 42),
(22, '2025-01-13', '2025-01-13', 3, 43),
(23, '2025-01-13', NULL, 3, 44);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie_artykuly`
--

CREATE TABLE `kategorie_artykuly` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `aktywna` char(1) NOT NULL,
  `od_kiedy` date NOT NULL,
  `do_kiedy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `artykul_id` int(11) NOT NULL,
  `data_dodania` date NOT NULL,
  `data_modyfikacji` date DEFAULT NULL,
  `data_usuniecia` date DEFAULT NULL,
  `tresc_komentarza` mediumtext NOT NULL,
  `aktywny` char(1) NOT NULL,
  `użytkownicy_id` int(11) NOT NULL,
  `artykuly_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `aktywyna` char(1) NOT NULL,
  `od_kiedy` date NOT NULL,
  `do_kiedy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `rola`
--

INSERT INTO `rola` (`id`, `nazwa`, `aktywyna`, `od_kiedy`, `do_kiedy`) VALUES
(1, 'admin', '1', '2025-01-09', NULL),
(2, 'moderator', '1', '2025-01-09', NULL),
(3, 'czytelnik', '1', '2025-01-09', NULL),
(4, 'autor', '1', '2025-01-09', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tagi_artykuly`
--

CREATE TABLE `tagi_artykuly` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) NOT NULL,
  `aktywny` char(1) NOT NULL,
  `od_kiedy` date NOT NULL,
  `do_kiedy` date DEFAULT NULL,
  `tworca_tagu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `haslo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `widoczna_nazwa` varchar(100) NOT NULL,
  `data_utworzenia_konta` date NOT NULL,
  `data_modyfikacji_hasla` date DEFAULT NULL,
  `data_usuniecia_konta` date DEFAULT NULL,
  `data_modyfikacji_widcznej_nazwy` date DEFAULT NULL,
  `aktywny` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `użytkownicy`
--

INSERT INTO `użytkownicy` (`id`, `login`, `haslo`, `email`, `widoczna_nazwa`, `data_utworzenia_konta`, `data_modyfikacji_hasla`, `data_usuniecia_konta`, `data_modyfikacji_widcznej_nazwy`, `aktywny`) VALUES
(42, 'admin', '$2y$10$s.CwK/WLk38fVxZ3q192Ou7BNUrvLtIXjmmBxRvgc828K8PotAym6', 'admin@admin.pl', 'admin', '2025-01-13', NULL, NULL, NULL, '1'),
(43, 'ola', '$2y$10$Y5oJWktBq5l9ViS7gFJ9nOk.aeKH/mI38j780gES1jor1.SzWbnI6', 'ola@ola.pl', 'ola', '2025-01-13', NULL, NULL, NULL, '1'),
(44, 'dorota', '$2y$10$zJb9jgcz3SOc6ywYLKTpreetF1D3PItUw7NZljKJJn2BN.FV.s85O', 'dorota@gmail.com', 'dorota', '2025-01-13', NULL, NULL, NULL, '1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artykuly_użytkownicy_fk` (`użytkownicy_id`);

--
-- Indeksy dla tabeli `asoc_artykul_kategoria`
--
ALTER TABLE `asoc_artykul_kategoria`
  ADD PRIMARY KEY (`id_asoc`),
  ADD KEY `asoc_artykul_kategoria_artykuly_fk` (`artykuly_id`),
  ADD KEY `asoc_artykul_kategoria_kategorie_artykuly_fk` (`kategorie_artykuly_id`);

--
-- Indeksy dla tabeli `asoc_artykul_tag`
--
ALTER TABLE `asoc_artykul_tag`
  ADD PRIMARY KEY (`id_asoc`),
  ADD KEY `asoc_artykul_tag_artykuly_fk` (`artykuly_id`),
  ADD KEY `asoc_artykul_tag_tagi_artykuly_fk` (`tagi_artykuly_id`);

--
-- Indeksy dla tabeli `asoc_rola_user`
--
ALTER TABLE `asoc_rola_user`
  ADD PRIMARY KEY (`id_asoc`),
  ADD KEY `asoc_rola_user_rola_fk` (`rola_id`),
  ADD KEY `asoc_rola_user_użytkownicy_fk` (`użytkownicy_id`);

--
-- Indeksy dla tabeli `kategorie_artykuly`
--
ALTER TABLE `kategorie_artykuly`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentarze_artykuly_fk` (`artykuly_id`),
  ADD KEY `komentarze_użytkownicy_fk` (`użytkownicy_id`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tagi_artykuly`
--
ALTER TABLE `tagi_artykuly`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artykuly`
--
ALTER TABLE `artykuly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asoc_artykul_kategoria`
--
ALTER TABLE `asoc_artykul_kategoria`
  MODIFY `id_asoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asoc_artykul_tag`
--
ALTER TABLE `asoc_artykul_tag`
  MODIFY `id_asoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asoc_rola_user`
--
ALTER TABLE `asoc_rola_user`
  MODIFY `id_asoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategorie_artykuly`
--
ALTER TABLE `kategorie_artykuly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rola`
--
ALTER TABLE `rola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagi_artykuly`
--
ALTER TABLE `tagi_artykuly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `użytkownicy`
--
ALTER TABLE `użytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artykuly`
--
ALTER TABLE `artykuly`
  ADD CONSTRAINT `artykuly_użytkownicy_fk` FOREIGN KEY (`użytkownicy_id`) REFERENCES `użytkownicy` (`id`);

--
-- Constraints for table `asoc_artykul_kategoria`
--
ALTER TABLE `asoc_artykul_kategoria`
  ADD CONSTRAINT `asoc_artykul_kategoria_artykuly_fk` FOREIGN KEY (`artykuly_id`) REFERENCES `artykuly` (`id`),
  ADD CONSTRAINT `asoc_artykul_kategoria_kategorie_artykuly_fk` FOREIGN KEY (`kategorie_artykuly_id`) REFERENCES `kategorie_artykuly` (`id`);

--
-- Constraints for table `asoc_artykul_tag`
--
ALTER TABLE `asoc_artykul_tag`
  ADD CONSTRAINT `asoc_artykul_tag_artykuly_fk` FOREIGN KEY (`artykuly_id`) REFERENCES `artykuly` (`id`),
  ADD CONSTRAINT `asoc_artykul_tag_tagi_artykuly_fk` FOREIGN KEY (`tagi_artykuly_id`) REFERENCES `tagi_artykuly` (`id`);

--
-- Constraints for table `asoc_rola_user`
--
ALTER TABLE `asoc_rola_user`
  ADD CONSTRAINT `asoc_rola_user_rola_fk` FOREIGN KEY (`rola_id`) REFERENCES `rola` (`id`),
  ADD CONSTRAINT `asoc_rola_user_użytkownicy_fk` FOREIGN KEY (`użytkownicy_id`) REFERENCES `użytkownicy` (`id`);

--
-- Constraints for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_artykuly_fk` FOREIGN KEY (`artykuly_id`) REFERENCES `artykuly` (`id`),
  ADD CONSTRAINT `komentarze_użytkownicy_fk` FOREIGN KEY (`użytkownicy_id`) REFERENCES `użytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
