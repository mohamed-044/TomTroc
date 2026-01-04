-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 04 jan. 2026 à 23:54
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TomTroc`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `user_id`, `title`, `author`, `image`, `description`, `status`) VALUES
(1, 1, 'The Kinfolk Table', 'Nathan Williams', 'the_kinfolk_table.png', 'J\'ai récemment plongé dans les pages de \'The Kinfolk Table\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. \n\nLes photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. \n\nChaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \n\n\'The Kinfolk Table\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(3, 3, 'Wabi Sabi', 'Beth Kempton', 'wabi_sabi.png', 'J\'ai récemment plongé dans les pages de \'Wabi Sabi\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. \r\n\r\nLes photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. \r\n\r\nChaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \r\n\r\n\'Wabi Sabi\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'false'),
(4, 3, 'Esther', 'Alabaster', 'esther.png', 'J\'ai récemment plongé dans les pages de \'Esther\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. \r\n\r\nLes photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. \r\n\r\nChaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \r\n\r\n\'Esther\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(5, 6, 'Delight!', 'Justin Rossow', 'delight.png', 'J\'ai récemment plongé dans les pages de \'Delight!\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Delight!\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'false'),
(6, 7, 'Milwaukee Mission', 'Elder Cooper Low', 'milwaukee_mission.png', 'J\'ai récemment plongé dans les pages de \'Milwaukee Mission\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Milwaukee Mission\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(7, 8, 'Minimalist Graphics', 'Julia Schonlau', 'minimalist_graphics.png', 'J\'ai récemment plongé dans les pages de \'Minimalist Graphics\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Minimalist Graphics\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(8, 5, 'Hygge', 'Meik Wiking', 'hygge.png', 'J\'ai récemment plongé dans les pages de \'Hygge\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Hygge\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(9, 9, 'Innovation', 'Matt Ridley', 'innovation.png', 'J\'ai récemment plongé dans les pages de \'Innovation\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Innovation\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(10, 10, 'Psalms', 'Alabaster', 'psalms.png', 'J\'ai récemment plongé dans les pages de \'Psalms\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Psalms\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(11, 11, 'Thinking, Fast & Slow', 'Daniel Kahneman', 'thinking_fast_slow.png', 'J\'ai récemment plongé dans les pages de \'Thinking, Fast & Slow\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Thinking, Fast & Slow\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'false'),
(12, 12, 'A Book Full Of Hope', 'Rupi Kaur', 'a_book_full_of_hope.png', 'J\'ai récemment plongé dans les pages de \'A Book Full Of Hope\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'A Book Full Of Hope\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(13, 13, 'The Subtle Art', 'Mark Manson', 'the_subtle_art.png', 'J\'ai récemment plongé dans les pages de \'The Subtle Art\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'The Subtle Art\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(14, 14, 'Narnia', 'C.S Lewis', 'narnia.png', 'J\'ai récemment plongé dans les pages de \'Narnia\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Narnia\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'false'),
(15, 15, 'Company Of One', 'Paul Jarvis', 'company_of_one.png', 'J\'ai récemment plongé dans les pages de \'Company Of One\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Company Of One\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(16, 16, 'The Two Towers', 'J.R.R Tolkien', 'the_two_towers.png', 'J\'ai récemment plongé dans les pages de \'The Two Towers\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'The Two Towers\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true'),
(17, 5, 'Milk & honey', 'Rupi Kaur', 'milk_honey.png', 'J\'ai récemment plongé dans les pages de \'Milk & honey\' et j\'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d\'une simple collection de recettes ; il célèbre l\'art de partager des moments authentiques autour de la table. Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. \'Milk & honey\' incarne parfaitement l\'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `content`, `created_at`) VALUES
(7, 3, 1, 'Salut', '2026-01-03 14:09:13'),
(8, 1, 3, 'Salut', '2026-01-03 14:10:56'),
(9, 3, 1, 'Tu vas bien ?', '2026-01-03 14:11:45'),
(10, 1, 3, 'Oui très bien merci', '2026-01-03 14:12:14');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `name`, `password`, `image`, `date_created`) VALUES
(1, 'alexlecture@mail.com', 'Alexlecture', 'secret123', 'alex_profile_image.png', '2024-06-18'),
(3, 'nathalire@mail.com', 'nathalire', 'ciel33', 'nathalire_profile_image.png', '2023-05-22'),
(4, 'camilleclubcit@mail.com', 'CamilleClubLit', 'riviere123', '', '2026-01-04'),
(5, 'hugo1990_12@mail.com', 'Hugo1990_12', 'etoile44', '', '2026-01-04'),
(6, 'juju1432@mail.com', 'Juju1432', 'lune22', '', '2026-01-04'),
(7, 'christiane75014@mail.com', 'Christiane75014', 'lac00', '', '2026-01-04'),
(8, 'hamzalecture@mail.com', 'Hamzalecture', 'ocean66', '', '2026-01-04'),
(9, 'louisben50@mail.com', 'Louis&Ben50', 'sable77', '', '2026-01-04'),
(10, 'lolobzh@mail.com', 'Lolobzh', 'cerise28', '', '2026-01-04'),
(11, 'sas634@mail.com', 'Sas634', 'kiwi99', '', '2026-01-04'),
(12, 'ml95@mail.com', 'ML95', 'orange44', '', '2026-01-04'),
(13, 'verogo33@mail.com', 'Verogo33', 'kaki55', '', '2026-01-04'),
(14, 'annikabrahms@mail.com', 'AnnikaBrahms', 'miel22', '', '2026-01-04'),
(15, 'victoirefabr912@mail.com', 'Victoirefabr912', 'grenande88', '', '2026-01-04'),
(16, 'lotrfanclub67@mail.com', 'Lotrfanclub67', 'mangue66', '', '2026-01-04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
