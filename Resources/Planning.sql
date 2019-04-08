-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 08 apr 2019 om 15:24
-- Serverversie: 5.6.37
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Planning`
--

CREATE TABLE IF NOT EXISTS `Planning` (
  `id` int(11) NOT NULL,
  `spelers` varchar(100) NOT NULL,
  `spelleider` varchar(20) NOT NULL,
  `spel` varchar(100) NOT NULL,
  `starttijd` time NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Planning`
--

INSERT INTO `Planning` (`id`, `spelers`, `spelleider`, `spel`, `starttijd`, `datum`) VALUES
(1, 'Wilco, Bjorn, Justin en Nicky', 'Wilco', 'Everyone is John', '09:09:00', '2019-04-01');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Planning`
--
ALTER TABLE `Planning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Planning`
--
ALTER TABLE `Planning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
