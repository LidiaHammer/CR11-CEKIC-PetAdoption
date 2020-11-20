-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 20. Nov 2020 um 18:12
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_Cekic_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_Cekic_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_Cekic_petadoption`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(300) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `ZIP` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `hobbies` varchar(500) NOT NULL,
  `category` enum('small','large','senior') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `animal`
--

INSERT INTO `animal` (`id`, `image`, `name`, `age`, `address`, `ZIP`, `city`, `description`, `hobbies`, `category`) VALUES
(1, 'https://images.unsplash.com/photo-1513522995478-184e5eb4112b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'hamster', 1, 'Bauernweg 4', '1445', 'Brunne', 'Very cute hamster with long hair. He hates mondays though.', 'looking, eating, beeing', 'small'),
(9, 'https://images.unsplash.com/photo-1578666842295-2e3b82e77c97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'jenny and rufus', 44, 'pandariver 5', '3200', 'Graz', 'jenny and rufus have been together for 20 years and only a cold heartless human beeing would seperate these two lovebirds. Thats why they come as get one-get one for free!', 'eating salat leaves and speeding in the park', 'large'),
(10, 'https://images.unsplash.com/photo-1599744615558-343983cee14c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80', 'pete', 24, 'savana 45', '2352', 'vienna', 'Cute pete loves to play in the mud and be a sunshine happy free animal. ', 'stepping on flowers, eating. ', 'large'),
(11, 'https://images.unsplash.com/photo-1556838803-cc94986cb631?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80', 'carl', 1, 'gardenlane 3', '1005', 'brunau', 'carl is just in love with greens and pretty bowls. He likes to eat from them and sleep in them. So cute!', 'being cute, eating cable', 'small'),
(12, 'https://images.unsplash.com/photo-1546462915-ffdc077d1bbd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80', 'sumsum', 1, 'beeland 52', '1002', 'villach', 'lets save the world and give sumsum a good home so she can create more bees and polinate our world', 'smelling flowers, summing', 'small'),
(13, 'https://images.unsplash.com/photo-1550085146-e2181eb8fb82?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80', 'juli', 1, 'neubaugasse 3', '1070', 'vienna', 'this girl is still in her playfull phase and just loves to have a good time playing with leaves or the snow or basically anything!', 'chew on bones, watch humans eat', 'small'),
(14, 'https://images.unsplash.com/photo-1562862329-bb8ce7c2b66c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80', 'robert', 9, 'chilligasse 5', '8440', 'nürnberg', 'Robert is our favorite animal at the shelter. He is so funny and loves to play! Please only for owners mit a big garden.', 'cuddle, smile at humans', 'large'),
(15, 'https://images.unsplash.com/photo-1554227932-df5c3d9abc36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80', 'sesillia', 3, 'chilligasse 5', '8440', 'nürnberg', 'Oh you are in for a treat if you take this lady! She is full energy and will make you smile every day. ', 'play in woods, oink at ants', 'large'),
(16, 'https://images.unsplash.com/photo-1605206731460-0bbdfadf9808?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1987&q=80', 'carl', 12, 'gardenlane 3', '1005', 'brunau', 'Dont let the size be your fool! Barbara is an old lady already. She loves compfy sofas and cuddeling with other animals aor humans', 'watching tv, play in mud', 'small'),
(17, 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80', 'Toni', 7, 'brunnerasse 5', '8440', 'nürnberg', 'Look at this beauty! Toni loves the beach and fields, and grassland, and woods. Basically anything outside!', 'smelling other dogs, dreaming of rabbits', 'small'),
(18, 'https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80', 'Berry', 4, 'gardenlane 3', '1005', 'brunau', 'Berry is a real sunshine! He will make your day to a graet day every day. What a good boy!', 'fetch and catch all day', 'small'),
(19, 'https://images.unsplash.com/photo-1514984879728-be0aff75a6e8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1576&q=80', 'Bea', 2, 'neubaugasse 3', '1070', 'vienna', 'No stick is a too big stick for this ambisious lady! As long as she has something to caryy around she will be happy.', 'sticks and sticks, oh and sticks', 'small');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(2, 'das', 'das@gmail.com', '25cc60622101ebdf294e6a3866aaf4fee2e4e2528083c49419c15f88186132fd', 'user'),
(3, 'lol', 'lol@gmail.com', '045ac63aaac4207fac0ae5bf5248916d56fa003455084e1ab92b579ea4c6b02d', 'admin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
