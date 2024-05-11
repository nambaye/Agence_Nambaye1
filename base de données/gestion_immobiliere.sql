-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 mai 2024 à 15:57
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_immobiliere`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE `appartement` (
  `id_appartement` int(11) NOT NULL,
  `description` text NOT NULL,
  `statut` varchar(150) NOT NULL,
  `dimension` varchar(150) NOT NULL,
  `chambre` int(11) NOT NULL,
  `disponibilite` int(11) NOT NULL,
  `salon` int(11) NOT NULL,
  `lit` int(11) NOT NULL,
  `douche` int(11) NOT NULL,
  `emplacement` varchar(20) NOT NULL,
  `prix_appartement` varchar(20) NOT NULL,
  `img1` longblob NOT NULL,
  `img2` longblob NOT NULL,
  `img3` longblob NOT NULL,
  `img4` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`id_appartement`, `description`, `statut`, `dimension`, `chambre`, `disponibilite`, `salon`, `lit`, `douche`, `emplacement`, `prix_appartement`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'mlmll', 'En vente', '25x23', 0, 0, 4, 2, 25000, '2', '4', 0x32303233313130385f3132313630387e322e6a7067, 0x32303233313130385f3132313630387e322e6a7067, 0x32303233313130385f3132313630387e322e6a7067, 0x32303233313130385f3132313630387e322e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(20) NOT NULL,
  `imgblog` longblob NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_blog`, `titre`, `description`, `texte`, `auteur`, `imgblog`, `date`) VALUES
(1, 'Blog 1', 'Premier blog', 'Bonjour', 'Juvens', 0x322e6a7067, '2023-12-28 11:23:06'),
(2, 'Blog 1', 'Premier blog', 'BBBBB', 'Juvens', 0x32303233313130385f3132313630387e322e6a7067, '2023-12-28 11:23:35'),
(3, 'Blog 1', 'Premier blog', 'NNNNN', 'Juvens', 0x322e6a7067, '2023-12-28 11:24:37');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(100) NOT NULL,
  `prenom_client` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `type_identite` varchar(50) NOT NULL,
  `numero_identite` varchar(100) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `date_naissance`, `type_identite`, `numero_identite`, `pays`, `ville`, `telephone`, `email`, `date_creation`) VALUES
(2, 'YAMBASSA', 'Luc Juvénal', '2023-12-04', 'CNI', '1234567891011', 'Centrafrique', 'Bangui', '72403550', 'luc.juvenal@outlook.fr', '2023-12-12 20:07:19'),
(3, 'PAPA', 'papa', '2024-01-30', 'CNI', '1234567891011', 'Centrafrique', 'Bangui', '72403550', 'luc.juvenal@outlook.fr', '2024-01-03 20:30:14'),
(4, 'PAPA', 'papa', '2024-01-30', 'CNI', '1234567891011', 'Centrafrique', 'Bangui', '72403550', 'luc.juvenal@outlook.fr', '2024-01-03 20:30:42');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `nom_hotel` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `ville` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `adresse` text NOT NULL,
  `type_chambre` varchar(100) NOT NULL,
  `prix_chambre` varchar(100) NOT NULL,
  `piscine` varchar(3) NOT NULL,
  `restaurant` varchar(3) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id`, `nom_hotel`, `description`, `ville`, `pays`, `quartier`, `adresse`, `type_chambre`, `prix_chambre`, `piscine`, `restaurant`, `img1`, `img2`, `img3`, `img4`, `date`) VALUES
(1, 'hotel 1', 'Hotel 2 étoiles', 'Bangui', 'Centrafrique', 'Malimaka', 'Miskine', '2 lits', '20000', '0', '0', '20231108_121608~2.jpg', '20231108_121608~2.jpg', '20231108_121608~2.jpg', '20231108_121608~2.jpg', '2023-12-27 09:16:27');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id_maison` int(11) NOT NULL,
  `description` text NOT NULL,
  `statut` varchar(50) NOT NULL,
  `type_bien` varchar(100) NOT NULL,
  `dimension` varchar(10) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `nbre_chambre` varchar(11) NOT NULL,
  `nbre_salon` varchar(11) NOT NULL,
  `douche_interne` varchar(11) NOT NULL,
  `douche_externe` varchar(11) NOT NULL,
  `nbre_lit` varchar(10) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `garage` varchar(10) NOT NULL,
  `disponibilite` varchar(50) NOT NULL,
  `img1` varchar(300) NOT NULL,
  `img2` varchar(300) NOT NULL,
  `img3` varchar(300) NOT NULL,
  `img4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `description`, `statut`, `type_bien`, `dimension`, `quartier`, `nbre_chambre`, `nbre_salon`, `douche_interne`, `douche_externe`, `nbre_lit`, `ville`, `prix`, `garage`, `disponibilite`, `img1`, `img2`, `img3`, `img4`) VALUES
(2, 'Maison moderne cloturée avec puit à l\'interieur', 'En vente', 'Maison', ' 400m²', ' Pk 11', '2', '1', ' null', ' 1', ' 2', ' Bangui', ' 15 000 000 FCFA', 'Oui', 'Libre', '1696420844533.jpg', '1696420850776.jpg', '1696420857090.jpg', '1696420884720.jpg'),
(3, 'Une maison moderne duplex à vendre', 'En vente', 'Maison', '   340m²', '   Wango', '4', '2', '   2', '   1', ' 0', '   Bangui', '   100 000 000 FCFA', 'Oui', 'Libre', '1693038116630.jpg', '1693038595180.jpg', '1694727361801.jpg', '1694727399462.jpg'),
(4, 'Maison Moderne plain pied', 'En location', 'Maison', '     100m²', '     Benz-vi', '4', '1', '     1', '     1', '   4', '     Bangui', '     35 000 FCFA', 'Non', 'Occupée', '1694726028685.jpg', '1694726036439.jpg', '1694726043331.jpg', '1694726049891.jpg'),
(29, 'Appartement moderne situé dans le centre ville et au troisième étage de l\'immeuble dauphin royal avec une vue sur le ruelle de la barc', 'En location', 'Appartement', '100m²', 'Centre ville, 1er arrondissement', '1', '1', '1', '1', '1', 'Bangui', '35 000 FCFA', 'Oui', 'Libre', 'IMG-20231214-WA0035.jpg', 'IMG-20231214-WA0039.jpg', 'IMG-20231214-WA0024.jpg', 'IMG-20231214-WA0026.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `meuble`
--

CREATE TABLE `meuble` (
  `id_meuble` int(11) NOT NULL,
  `description` text NOT NULL,
  `type_meuble` varchar(20) NOT NULL,
  `capacite` int(11) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `disponibilite` varchar(20) NOT NULL,
  `img1` varchar(150) NOT NULL,
  `img2` varchar(150) NOT NULL,
  `img3` varchar(150) NOT NULL,
  `img4` varchar(150) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id_prs` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `niveau` varchar(10) NOT NULL,
  `date_embauche` date NOT NULL,
  `quartier` varchar(150) NOT NULL,
  `ville` varchar(150) NOT NULL,
  `type_piece` varchar(30) NOT NULL,
  `numero_piece` varchar(20) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id_prs`, `nom`, `prenom`, `naissance`, `sexe`, `niveau`, `date_embauche`, `quartier`, `ville`, `type_piece`, `numero_piece`, `telephone`, `email`, `image`, `date_creation`) VALUES
(2, 'Yambassa', 'Luc Juvénal', '2024-01-23', 'Masculin', 'Gestionnai', '2024-01-10', 'Malimaka', 'Bangui', '* Selectionner le type de pièc', '9090898989', '72403550', 'luc.juvenal@outlook.fr', '20231108_121608~2.jpg', '2024-01-01 21:39:46'),
(3, 'Yambassa', 'Luc Juvénal', '2024-01-23', 'Féminin', 'Agent', '2024-01-26', 'Malimaka', 'Bangui', '* Selectionner le type de pièc', '9090898989', '72403550', 'luc.juvenal@outlook.fr', '20231108_121608~2.jpg', '2024-01-01 21:40:54'),
(4, 'Yambassa', 'Luc Juvénal', '2024-01-23', 'Féminin', 'Agent', '2024-01-26', 'Malimaka', 'Bangui', '* Selectionner le type de pièc', '9090898989', '72403550', 'luc.juvenal@outlook.fr', '20231108_121608~2.jpg', '2024-01-01 21:41:27');

-- --------------------------------------------------------

--
-- Structure de la table `ppc`
--

CREATE TABLE `ppc` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `chambre` int(11) NOT NULL,
  `salon` int(11) NOT NULL,
  `douche_interne` int(11) NOT NULL,
  `garage` varchar(10) NOT NULL,
  `cuisine_interne` varchar(10) NOT NULL,
  `salle_manger` varchar(10) NOT NULL,
  `delai_construction` varchar(100) NOT NULL,
  `prix_devis` varchar(10) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recommander_appartement`
--

CREATE TABLE `recommander_appartement` (
  `id_ra` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_appartement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recommander_maison`
--

CREATE TABLE `recommander_maison` (
  `id_rm` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recommander_meuble`
--

CREATE TABLE `recommander_meuble` (
  `id_rmeuble` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_meuble` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recommander_terrain`
--

CREATE TABLE `recommander_terrain` (
  `id_rt` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_terrain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recommander_voiture`
--

CREATE TABLE `recommander_voiture` (
  `id_rv` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_voiture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `description` text NOT NULL,
  `ville` varchar(50) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id_slider`, `description`, `ville`, `statut`, `prix`, `pays`, `image`) VALUES
(15, 'Maison Moderne', 'Bangui', 'En vente', '55 000 000 FCFA', 'Centrafrique', '1694726036439.jpg'),
(16, 'Maison moderne', 'Bangui', 'En location', '50 000 FCFA / mois', 'Centrafrique', '1696420857090.jpg'),
(17, 'Maison Moderne', 'Bangui', 'En vente', '60 000 000 FCFA', 'Centrafrique', '1693038116630.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `terrain`
--

CREATE TABLE `terrain` (
  `id_terrain` int(11) NOT NULL,
  `description` text NOT NULL,
  `statut` varchar(20) NOT NULL,
  `dimension` varchar(20) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `nbre_lot` varchar(10) NOT NULL,
  `disponibilite` varchar(10) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `titre_foncier` varchar(10) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(150) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_users`
--

CREATE TABLE `type_users` (
  `id_type` int(11) NOT NULL,
  `lib_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_users`
--

INSERT INTO `type_users` (`id_type`, `lib_type`) VALUES
(1, 'Client'),
(2, 'Personnel');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `password` varchar(110) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom`, `email`, `niveau`, `password`, `profil`, `date_creation`) VALUES
(6, 'Yambassa Luc Juvénal', 'yambassa@gmail.com', 'Agent', '7a4234c9b1705d3f7d68e7404515287e', ' ', '2024-04-11 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id_voiture` int(11) NOT NULL,
  `description` text NOT NULL,
  `statut` varchar(20) NOT NULL,
  `numero_chassis` varchar(100) NOT NULL,
  `model` varchar(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `reservoir` varchar(10) NOT NULL,
  `capacite_moteur` varchar(20) NOT NULL,
  `nbre_place` varchar(10) NOT NULL,
  `nbre_pneus` varchar(10) NOT NULL,
  `taille_boite` varchar(20) NOT NULL,
  `disponibilite` varchar(20) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `img1` longblob NOT NULL,
  `img2` longblob NOT NULL,
  `img3` longblob NOT NULL,
  `img4` longblob NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`id_appartement`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id_maison`);

--
-- Index pour la table `meuble`
--
ALTER TABLE `meuble`
  ADD PRIMARY KEY (`id_meuble`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id_prs`);

--
-- Index pour la table `ppc`
--
ALTER TABLE `ppc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recommander_appartement`
--
ALTER TABLE `recommander_appartement`
  ADD PRIMARY KEY (`id_ra`);

--
-- Index pour la table `recommander_maison`
--
ALTER TABLE `recommander_maison`
  ADD PRIMARY KEY (`id_rm`);

--
-- Index pour la table `recommander_meuble`
--
ALTER TABLE `recommander_meuble`
  ADD PRIMARY KEY (`id_rmeuble`);

--
-- Index pour la table `recommander_terrain`
--
ALTER TABLE `recommander_terrain`
  ADD PRIMARY KEY (`id_rt`);

--
-- Index pour la table `recommander_voiture`
--
ALTER TABLE `recommander_voiture`
  ADD PRIMARY KEY (`id_rv`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Index pour la table `terrain`
--
ALTER TABLE `terrain`
  ADD PRIMARY KEY (`id_terrain`);

--
-- Index pour la table `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id_voiture`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartement`
--
ALTER TABLE `appartement`
  MODIFY `id_appartement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id_maison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `meuble`
--
ALTER TABLE `meuble`
  MODIFY `id_meuble` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id_prs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ppc`
--
ALTER TABLE `ppc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recommander_appartement`
--
ALTER TABLE `recommander_appartement`
  MODIFY `id_ra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recommander_maison`
--
ALTER TABLE `recommander_maison`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recommander_meuble`
--
ALTER TABLE `recommander_meuble`
  MODIFY `id_rmeuble` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recommander_terrain`
--
ALTER TABLE `recommander_terrain`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recommander_voiture`
--
ALTER TABLE `recommander_voiture`
  MODIFY `id_rv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `terrain`
--
ALTER TABLE `terrain`
  MODIFY `id_terrain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id_voiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
