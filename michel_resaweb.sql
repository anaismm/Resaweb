-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 05 juin 2023 à 07:47
-- Version du serveur : 10.3.39-MariaDB
-- Version de PHP : 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `michel_resaweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `nom_parcours` varchar(100) NOT NULL,
  `type_parcours` varchar(50) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `drapeau_pays` varchar(30) NOT NULL,
  `age_dest` varchar(10) NOT NULL,
  `periode` varchar(30) NOT NULL,
  `descriptif_dest` text NOT NULL,
  `prix` int(11) NOT NULL,
  `lieu_hebergement` varchar(100) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `activites` varchar(300) NOT NULL,
  `visites` varchar(300) NOT NULL,
  `soirees` varchar(300) NOT NULL,
  `date_modif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `vacances` varchar(50) NOT NULL,
  `img_card` varchar(50) NOT NULL,
  `resume_act` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`id`, `nom_parcours`, `type_parcours`, `pays`, `drapeau_pays`, `age_dest`, `periode`, `descriptif_dest`, `prix`, `lieu_hebergement`, `image1`, `image2`, `image3`, `image4`, `activites`, `visites`, `soirees`, `date_modif`, `vacances`, `img_card`, `resume_act`) VALUES
(1, 'Parcours Découverte de New York', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '15-18 ans', 'Du 15 au 30 juillet', 'Apprendre l’anglais à New York restera un moment inoubliable pour votre enfant. En effet, qui n’a jamais rêvé de flâner dans Central Park ou de se balader dans le quartier de Wall Street avant de lever les yeux sur l’impressionnante statue de la liberté ?  De Times Square au Grand Central Terminal et en passant par l’Empire State Building, ce séjour permettra à vos enfant de découvrir la “Grosse Pomme” tout en améliorant leur niveau d\'anglais. De plus, vous pourrez profiter d’une journée d’excursion à Washington !', 2010, 'dans un magnifique campus de la St John\'s University situé dans le Queens.', 'img/nyc/nyc1.jpg', 'img/nyc/nyc2.jpg', 'img/nyc/nyc3.jpg', 'img/nyc/nyc4.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Balade dans Central Park et dans les rue de Times Square. Visite du Rockfeller Center, du World Trade Center et recueil au Memorial du 11 septembre. Découverte du quartier de Wall Street et du Brooklyn Bridge. Excursion à Ellis Island et visite de la Statue de la Liberté + excursion aux chutes du Ni', 'Welcome party, Hawaiian party, diner à New York et New York\'s got talent.', '2023-05-30 19:47:09', 'vacances_ete', 'img/nyc/nyc_card.jpg', 'Découverte de “la Grosse Pomme” + excursion à Washington'),
(2, 'Parcours Découverte de New York', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '11-14 ans', 'Du 29 juillet au 13 août', 'Apprendre l’anglais à New York restera un moment inoubliable pour votre enfant. En effet, qui n’a jamais rêvé de flâner dans Central Park ou de se balader dans le quartier de Wall Street avant de lever les yeux sur l’impressionnante statue de la liberté ?  De Times Square au Grand Central Terminal et en passant par l’Empire State Building, ce séjour permettra à vos enfant de découvrir la “Grosse Pomme” tout en améliorant son niveau d\'anglais. De plus, vous pourrez profiter d’une journée d’excursion à Washington !', 2125, 'dans un magnifique campus de la St John\'s University situé dans le Queens.', 'img/nyc/nyc1.jpg', 'img/nyc/nyc2.jpg', 'img/nyc/nyc3.jpg', 'img/nyc/nyc4.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Balade dans Central Park et dans les rue de Times Square. Visite du Rockfeller Center, du World Trade Center et recueil au Mémorial du 11 septembre. Découverte du quartier de Wall Street et du Brooklyn Bridge. Excursion à Ellis Island et visite de la Statue de la Liberté + excursion aux chutes du Ni', 'Welcome party, Hawaiian party, diner à New York et New York\'s got talent.', '2023-05-30 19:47:40', 'vacances_ete', 'img/nyc/nyc_card2.jpg', 'Découverte de “la Grosse Pomme” + excursion à Washington'),
(3, 'Parcours Découverte de New York', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '15-18 ans', 'Du 23 au 30 octobre', 'Apprendre l’anglais à New York restera un moment inoubliable pour votre enfant. En effet, qui n’a jamais rêvé de flâner dans Central Park ou de se balader dans le quartier de Wall Street avant de lever les yeux sur l’impressionnante statue de la liberté ?  De Times Square au Grand Central Terminal et en passant par l’Empire State Building, ce séjour permettra à vos enfant de découvrir la “Grosse Pomme” tout en améliorant son niveau d\'anglais. De plus, vous pourrez profiter d’une journée d’excursion à Washington !', 1009, 'dans un magnifique campus de la St John\'s University situé dans le Queens.', 'img/nyc/nyc1.jpg', 'img/nyc/nyc2.jpg', 'img/nyc/nyc3.jpg', 'img/nyc/nyc4.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Balade dans Central Park et dans les rue de Times Square. Visite du Rockfeller Center, du World Trade Center et recueil au Mémorial du 11 septembre. Découverte du quartier de Wall Street et du Brooklyn Bridge. Excursion à Ellis Island et visite de la Statue de la Liberté + excursion aux chutes du Ni', 'Welcome party, Hawaiian party, diner à New York et New York\'s got talent.', '2023-05-25 12:09:08', 'vacances_toussaint', 'img/nyc/nyc_card3.jpg', 'Découverte de “la Grosse Pomme” + excursion à Washington'),
(4, 'Parcours Découverte de Los Angeles', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '15-18 ans', 'Du 8 au 23 juillet', 'Ce séjour à Los Angeles sera l’occasion de progresser en anglais tout en découvrant la mythique cité des Anges, le quartier incontournable d’Hollywood mais aussi de profiter des magnifiques plages de la côte Atlantique. Il vous sera également l’occasion de marcher sur les traces des plus grandes stars sur le Walk of Fame et de flâner dans le quartier chic de Beverly Hills. De plus, vous aurez la chance de passer une journée au parc Universal Studio.', 3078, 'un magnifique campus de la California State University of Northridge, non loin de Los Angeles.', 'img/la/hollywood_bdv.jpg', 'img/la/hollywood.jpg', 'img/la/beverly_hills.jpg', 'img/la/universal_studio.webp', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Hollywood Tour et son Walk Of Fame, visite de San Diego et du California Science Center. Balade et shopping à Beverly Hills puis diner et bonfire sur la plage de Los Angeles. Excursion à Las Vegas.', 'Welcome party, Hawaiian party, karaoke, LA\'s got talent.', '2023-06-02 15:55:36', 'vacances_ete', 'img/la/la_card.jpg', 'Découverte de la “cité des anges” + excursion aux Universal Studios '),
(5, 'Parcours Découverte de Los Angeles', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '15-18 ans', 'Du 29 juillet au 13 août', 'Ce séjour à Los Angeles sera l’occasion de progresser en anglais tout en découvrant la mythique cité des Anges, le quartier incontournable d’Hollywood mais aussi de profiter des magnifiques plages de la côte Atlantique. Il vous sera également l’occasion de marcher sur les traces des plus grandes stars sur le Walk of Fame et de flâner dans le quartier chic de Beverly Hills. De plus, vous aurez la chance de passer une journée au parc Universal Studio.', 3239, 'un magnifique campus de la  California State University of Northridge, non loin de Los Angeles.', 'img/la/hollywood_bdv.jpg', 'img/la/hollywood.jpg', 'img/la/beverly_hills.jpg', 'img/la/universal_studio.webp', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Hollywood Tour et son Walk Of Fame, visite de San Diego et du California Science Center. Balade et shopping à Beverly Hills puis diner et bonfire sur la plage de Los Angeles. Excursion à Las Vegas.', 'Welcome party, Hawaiian party, karaoke, LA\'s got talent.', '2023-06-05 15:59:04', 'vacances_ete', 'img/la/la_card2.png', 'Découverte de la “cité des anges” + excursion aux Universal Studios '),
(6, 'Parcours Découverte de Miami', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '15-18 ans', 'Du 14 au 28 juillet', 'La Floride est le lieu idéal pour apprendre l’anglais tout en profitant de paysages époustouflants et de ses étendues de sable blanc. De plus, ce séjour à Mimai sera l’occasion de découvrir cette ville exotique et haute en couleur avec son quartier Art Déco notamment. Enfin, une excursion au parc national des Everglades vous emmènera à la rencontre d’alligator alors j’espère que vous êtes prêts à vivre toutes ces émotions ! ', 3227, 'un magnifique campus de la Barry University, située à quelques pas de la plage.\r\n', 'img/miami/miami1.jpg', 'img/miami/miami2.jpg', 'img/miami/miami3.jpg', 'img/miami/miami4.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite du Miami Design Distric et du Bill Baggs Cape Florida State Park. Détente sur la Hollywood Beach et balade le long de celle ci sur le Broadwalk. Excursion aux Everglades.', 'Welcome party, Hawaiian party, karaoke, Miami\'s got talent.', '2023-05-22 07:48:04', 'vacances_ete', 'img/miami/miami_card.jpg', 'Découverte de Miami + visite des Everglades'),
(7, 'Parcours Découverte de Miami', 'parcours découverte', 'Etats-Unis', 'img/drapeau_usa1.png', '15-18 ans', 'Du 7 au 21 août', 'La Floride est le lieu idéal pour apprendre l’anglais tout en profitant de paysages époustouflants et de ses étendues de sable blanc. De plus, ce séjour à Mimai sera l’occasion de découvrir cette ville exotique et haute en couleur avec son quartier Art Déco notamment. Enfin, une excursion au parc national des Everglades vous emmènera à la rencontre d’alligator alors j’espère que vous êtes prêts à vivre toutes ces émotions ! ', 3518, 'un magnifique campus de la Barry University, située à quelques pas de la plage.\r\n', 'img/miami/miami1.jpg', 'img/miami/miami2.jpg', 'img/miami/miami3.jpg', 'img/miami/miami4.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite du Miami Design Distric et du Bill Baggs Cape Florida State Park. Détente sur la Hollywood Beach et balade le long de celle ci sur le Broadwalk. Excursion aux Everglades.', 'Welcome party, Hawaiian party, karaoke, Miami\'s got talent.', '2023-06-05 16:01:05', 'vacances_ete', 'img/miami/miami1.jpg', 'Découverte de Miami + visite des Everglades'),
(8, 'Parcours Découverte de Sydney', 'parcours découverte', 'Australie', 'img/drapeau_australie.png', '15-18 ans', 'Du 7 au 21 août', 'L’Australie vous offre un tout nouveau cadre dans lequel vous pourrez apprendre l’anglais tout en découvrant la vie australienne. En effet, après vos matinées de cours, vous pourrez profiter de votre temps libre pour aller à l’Opéra de Sydney, vous baladez dans les rues et pourquoi pas rencontrer des kangourous. Enfin, quoi de mieux qu’une petite séance de surf et de détente sur les plus belles plages d’Australie.', 4250, 'un magnifique campus de Sydney, située à quelques pas du centre ville.', 'img/sydney/sydney1.jpg', 'img/sydney/sydney5.jpg', 'img/sydney/sydney3.jpg', 'img/sydney/sydney4.jpg', 'Activités de loisirs sur le campus tel que du foot, beach volley, natation, surf et plein d\'autres sports.', 'Visite de l\'opéra de Sydney et du quartier historique the Rocks. Rencontrez les koalas et kangourous dans le Taronga zoo et profitez d\'un tour en ferry dans la baie de Sydney. Excursion aux Blue Mountains.', 'Welcome party, Hawaiian party, karaoke, Sydney\'s got talent.', '2023-05-22 08:04:48', 'vacances_ete', 'img/sydney/sydney1.jpg', 'Découverte de Sydney + excursion au Taronga zoo'),
(9, 'Parcours Découverte de Sydney', 'parcours découverte', 'Australie', 'img/drapeau_australie.png', '15-18 ans', 'Du 13 juillet au 4 août', 'L’Australie vous offre un tout nouveau cadre dans lequel vous pourrez apprendre l’anglais tout en découvrant la vie australienne. En effet, après vos matinées de cours, vous pourrez profiter de votre temps libre pour aller à l’Opéra de Sydney, vous baladez dans les rues et pourquoi pas rencontrer des kangourous. Enfin, quoi de mieux qu’une petite séance de surf et de détente sur les plus belles plages d’Australie.', 4640, 'un magnifique campus de Sydney, située à quelques pas du centre ville.', 'img/sydney/sydney1.jpg', 'img/sydney/sydney2.jpg', 'img/sydney/sydney3.jpg', 'img/sydney/sydney4.jpg', 'Activités de loisirs sur le campus tel que du foot, beach volley, natation, surf et plein d\'autres sports.', 'Visite de l\'opéra de Sydney et du quartier historique the Rocks. Rencontrez les koalas et kangourous dans le Taronga zoo et profitez d\'un tour en ferry dans la baie de Sydney. Excursion aux Blue Mountains.', 'Welcome party, Hawaiian party, karaoke, Sydney\'s got talent.', '2023-06-02 15:57:11', 'vacances_ete', 'img/sydney/sydney_card.jpg', 'Découverte de Sydney + excursion au Taronga zoo'),
(10, 'Parcours Découverte d\'Ottawa', 'parcours découverte', 'Canada', 'img/drapeau_canada.png', '11-14 ans', 'Du 26 juillet au 9 août', 'En tant que capitale du Canada, Ottawa est l’endroit idéal pour découvrir les meilleures attractions, célébrations et saveurs du pays. Vous pourrez ainsi progresser en anglais tout en visitant ce lieu, mélange unique de beauté urbaine et rurale. Ses quartiers dynamiques seront pour vous l’occasion de vous entrainer dans la pratique de la langue tout comme les visites culturelles et activités proposées. De plus, vous profiterez d’une journée d’excursion à Montréal ! ', 2396, 'le magnifique campus de la Carlton University, proche du centre d’Ottawa.', 'img/ottawa/ottawa1.webp', 'img/ottawa/ottawa2.jpg', 'img/ottawa/ottawa3.jpg', 'img/ottawa/ottawa4.jpg', 'Activités de loisirs sur le campus tel que du foot, hockey, basket, patin à glace et plein d\'autres sports.', 'Visite de la ville et de son canal ainsi que du Upper Canada Village, un authentique village canadien. Rencontre avec les espèces sauvages de la faune canadienne dans le Parc Oméga. Profitez d\'un après-midi au centre aquatique Calypso. Excursion à Montréal.', 'Welcome party, Casino night, international party, barbecue géant', '2023-03-11 16:11:33', 'vacances_ete', 'img/ottawa/ottawa4.jpg', 'Découverte de la ville d’Ottawa + excursion à Montréal '),
(11, 'Parcours sportif à Toronto', 'parcours_sportif', 'Canada', 'img/drapeau_canada.png', '15-18 ans', 'Du 2 au 16 août', 'Apprendre l’anglais tout en découvrant une des villes les plus sportives du Canada, quel meilleur combo pouvez vous faire ? \r\nVous pourrez ainsi améliorer votre niveau d\'anglais tout en pratiquant des sports typiques comme le hockey, le patin à glace ou encore le baseball.\r\nDe plus, avec ce séjour vous aurez l’opportunité de vous rendre et de contempler les mythiques chutes du Niagara ! ', 2304, 'le magnifique campus de Toronto University.', 'img/toronto/toronto1.jpg', 'img/toronto/toronto7.webp', 'img/toronto/toronto3.jpg', 'img/toronto/toronto4.jpg', 'Activités de loisirs sur le campus. Cours de hockey surglace et patin à glace.  Initiation au baseball.', 'Visite des différents quartiers la ville et de la Tour CN. Vivez une expérience unique en assistant à un match de hockey qui vous plongera dans l\'ambiance de la vie Canadienne.', 'Welcome party, Casino night, international party, barbecue géant.', '2023-06-05 16:02:02', 'vacances_ete', 'img/toronto/toronto1.jpg', 'Pratique des sports mythiques du Canada  + excursion aux chutes du Niagara'),
(12, 'Parcours sportif à Toronto', 'parcours sportif', 'Canada', 'img/drapeau_canada.png', '11-14 ans', 'Du 15 au 21 avril', 'Apprendre l’anglais tout en découvrant une des villes les plus sportives du Canada, quel meilleur combo pouvez vous faire ? \r\nVous pourrez ainsi améliorer votre niveau d\'anglais tout en pratiquant des sports typiques comme le hockey, le patin à glace ou encore le baseball.\r\nDe plus, avec ce séjour vous aurez l’opportunité de vous rendre et de contempler les mythiques chutes du Niagara ! ', 1084, 'le magnifique campus de Toronto University.', 'img/toronto/toronto1.jpg', 'img/toronto/toronto7.webp', 'img/toronto/toronto3.jpg', 'img/toronto/toronto4.jpg', 'Activités de loisirs sur le campus. Cours de hockey surglace et patin à glace.  Initiation au baseball.', 'Visite des différents quartiers la ville et de la Tour CN. Vivez une expérience unique en assistant à un match de hockey qui vous plongera dans l\'ambiance de la vie Canadienne.', 'Welcome party, Casino night, international party, barbecue géant.', '2023-03-07 15:59:12', 'vacances_de_printemps', 'img/toronto/toronto6.jpg', 'Pratique des sports mythiques du Canada  + excursion aux chutes du Niagara'),
(13, 'Parcours Découverte d\'Ottawa', 'parcours découverte', 'Canada', 'img/drapeau_canada.png', '15-18 ans', 'Du 13 juilletau 28 aout', 'En tant que capitale du Canada, Ottawa est l’endroit idéal pour découvrir les meilleures attractions, célébrations et saveurs du pays. Vous pourrez ainsi progresser en anglais tout en visitant ce lieu, mélange unique de beauté urbaine et rurale. Ses quartiers dynamiques seront pour vous l’occasion de vous entrainer dans la pratique de la langue tout comme les visites culturelles et activités proposées. De plus, vous profiterez d’une journée d’excursion à Montréal ! ', 2263, 'le magnifique campus de la Carlton University, proche du centre d’Ottawa.', 'img/ottawa/ottawa1.webp', 'img/ottawa/ottawa2.jpg', 'img/ottawa/ottawa3.jpg', 'img/ottawa/ottawa4.jpg', 'Activités de loisirs sur le campus tel que du foot, hockey, basket, patin à glace et plein d\'autres sports.', 'Visite de la ville et de son canal ainsi que du Upper Canada Village, un authentique village canadien. Rencontre avec les espèces sauvages de la faune canadienne dans le Parc Oméga. Profitez d\'un après-midi au centre aquatique Calypso. Excursion à Montréal.', 'Welcome party, Casino night, international party, barbecue géant', '2023-04-21 15:11:33', 'vacances_ete', 'img/ottawa/ottawa1.webp', 'Découverte de la ville d’Ottawa + excursion à Montréal '),
(14, 'Parcours sportif à Malte', 'parcours sportif', 'Malte', 'img/drapeau_malte.png', '11-14 ans', 'Du 25 juillet au 8 aout', 'Venez apprendre l’anglais tout en profitant des après-midi pour vous détendre lors d’activités sportives telles que la natation, du beach-soccer ou encore du beach volley. De plus, vous visiterez le centre ville de la Valette, capitale de Malte, et profiterez de ce séjour pour faire plein de nouvelles rencontres. Alors n’attendez plus et réservez dès maintenant ce séjour ! ', 1187, 'des résidences hôtelière internationales.', 'img/malte/malte1.jpg', 'img/malte/malte4.jpg', 'img/malte/malte3.jpg', 'img/malte/malte5.webp', 'Activités aquatiques de loisirs sur le campus.  Vous pourrez ainsi faire du jet-ski, du beach volley ou encore du beach-soccer', 'Visite du centre historique de la Valette, capitale de Malte et excursion à la Grotte Bleue.', 'Welcome party, Casino night, international party, barbecue géant', '2023-06-04 20:27:56', 'vacances_ete', 'img/malte/malte1.jpg', 'Activités aquatiques + Visite de la Valette'),
(15, 'Parcours sportif à Malte', 'parcours sportif', 'Malte', 'img/drapeau_malte.png', '15-18 ans', 'Du 24 octobre au 31 octobre', 'Venez apprendre l’anglais tout en profitant des après-midi pour vous détendre lors d’activités sportives telles que la natation, du beach-soccer ou encore du beach volley. De plus, vous visiterez le centre ville de la Valette, capitale de Malte, et profiterez de ce séjour pour faire plein de nouvelles rencontres. Alors n’attendez plus et réservez dès maintenant ce séjour ! ', 780, 'des résidences hôtelière internationales.', 'img/malte/malte1.jpg', 'img/malte/malte4.jpg', 'img/malte/malte3.jpg', 'img/malte/malte5.webp', 'Activités aquatiques de loisirs sur le campus.  Vous pourrez ainsi faire du jet-ski, du beach volley ou encore du beach-soccer', 'Visite du centre historique de la Valette, capitale de Malte et excursion à la Grotte Bleue', 'Welcome party, Casino night, international party, barbecue géant', '2023-06-04 20:28:17', 'vacances_toussaint', 'img/malte/malte3.jpg', 'Activités aquatiques + Visite de la Valette'),
(16, 'Parcours découverte de Malte', 'parcours découverte', 'Malte', 'img/drapeau_malte.png', '11-14 ans', 'Du 18 octobre au 25 octobre', 'Venez apprendre l’anglais tout en profitant des après-midi pour vous détendre lors d’activités aquatiques comme la natation ou le beach-volley.\r\nDe plus, vous visiterez le centre ville de la Valette, capitale de Malte, et profiterez de ce séjour pour faire plein de nouvelles rencontres. Alors n’attendez plus et réservez dès maintenant ce séjour ! ', 780, 'des résidences hôtelière internationales.', 'img/malte/malte1.jpg', 'img/malte/malte4.jpg', 'img/malte/malte3.jpg', 'img/malte/malte5.webp', 'Activités aquatiques de loisirs sur le campus.  Vous pourrez ainsi faire du jet-ski, du beach volley ou encore du beach-soccer', 'Visite du centre historique de la Valette, capitale de Malte et excursion à la Grotte Bleue', 'Welcome party, Casino night, international party, barbecue géant', '2023-03-15 15:08:12', 'vacances_toussaint', 'img/malte/malte2.webp', 'Visite de la Valette + excursion à la Grotte Bleue'),
(17, 'Parcours découverte de Londres', 'parcours découverte', 'Angleterre', 'img/drapeau_angleterre.png', '11-14 ans', 'Du 28 mars au 4 avril', 'Ce séjour est destiné à tous ceux qui souhaitent découvrir la capitale britannique tout en apprenant l’anglais. En effet, quoi de mieux que de se plonger dans la vie à l’anglaise pour apprendre cette langue. Ce parcours vous permettra de visiter la capitale sous tous ces angles: de Buckingham au Tower Bridge en passant par Big Ben et Picadilly Circus vous ne pourrez que rester émerveillé face à tous ces célèbres lieux et monuments ! ', 965, ' une résidence au cœur de la capitale.', 'img/londres/londres1.webp', 'img/londres/londres2.jpg', 'img/londres/londres3.jpg', 'img/londres/londres10.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-06-02 16:00:11', 'vacances_de_printemps', 'img/londres/londres1.webp', 'Visite de Londres'),
(18, 'Parcours découverte de Londres', 'parcours découverte', 'Angleterre', 'img/drapeau_angleterre.png', '11-14 ans', 'Du 24 juillet au 7 août', 'Ce séjour est destiné à tous ceux qui souhaitent découvrir la capitale britannique tout en apprenant l’anglais. En effet, quoi de mieux que de se plonger dans la vie à l’anglaise pour apprendre cette langue. Ce parcours vous permettra de visiter la capitale sous tous ces angles: de Buckingham au Tower Bridge en passant par Big Ben et Picadilly Circus vous ne pourrez que rester émerveillé face à tous ces célèbres lieux et monuments ! ', 1032, ' une résidence au cœur de la capitale.', 'img/londres/londres1.webp', 'img/londres/londres2.jpg', 'img/londres/londres3.jpg', 'img/londres/londres10.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-31 15:11:38', 'vacances_ete', 'img/londres/londres5.jpg', 'Visite de Londres'),
(19, 'Parcours découverte de Londres', 'parcours découverte', 'Angleterre', 'img/drapeau_angleterre.png', '15-18 ans', 'Du 12 au 19 octobre', 'Ce séjour est destiné à tous ceux qui souhaitent découvrir la capitale britannique tout en apprenant l’anglais. En effet, quoi de mieux que de se plonger dans la vie à l’anglaise pour apprendre cette langue. Ce parcours vous permettra de visiter la capitale sous tous ces angles: de Buckingham au Tower Bridge en passant par Big Ben et Picadilly Circus vous ne pourrez que rester émerveillé face à tous ces célèbres lieux et monuments ! ', 713, ' une résidence au cœur de la capitale.', 'img/londres/londres1.webp', 'img/londres/londres2.jpg', 'img/londres/londres3.jpg', 'img/londres/londres10.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-31 15:11:53', 'vacances_toussaint', 'img/londres/londres6.jpg', 'Visite de Londres'),
(20, 'Parcours découverte de Londres', 'parcours découverte', 'Angleterre', 'img/drapeau_angleterre.png', '7-10 ans', 'Du 22 au 29 avril', 'Ce séjour est destiné à tous ceux qui souhaitent découvrir la capitale britannique tout en apprenant l’anglais. En effet, quoi de mieux que de se plonger dans la vie à l’anglaise pour apprendre cette langue. Ce parcours vous permettra de visiter la capitale sous tous ces angles: de Buckingham au Tower Bridge en passant par Big Ben et Picadilly Circus vous ne pourrez que rester émerveillé face à tous ces célèbres lieux et monuments ! ', 713, ' une résidence au cœur de la capitale.', 'img/londres/londres1.webp', 'img/londres/londres2.jpg', 'img/londres/londres3.jpg', 'img/londres/londres10.jpg', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-31 15:12:05', 'vacances_de_printemps', 'img/londres/londres7.jpeg', 'Visite de Londres'),
(21, 'Parcours sportif à Londres', 'parcours sportif', 'Angleterre', 'img/drapeau_angleterre.png', '7-10 ans', 'Du 17 au 31 août', 'Si vous êtes passionnés de sport et que vous adoré vous dépenser, ce séjour est celui qui vous correspond car il vous permettra d’associer votre passion pour le sport à l’apprentissage de l’anglais. En effet, en plus des cours d’anglais dispensé le matin, vos cours de sports tel que le foot, le basket, le tennis ou encore le tir à l’arc seront eux aussi enseignés en anglais afin de vous faire progresser le plus rapidement possible. ', 1060, ' une résidence au cœur de la capitale.', 'img/londres/londres7.jpeg', 'img/londres/londres1.webp', 'img/londres/londres8.png', 'img/londres/londres9.png', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-31 15:12:17', 'vacances_ete', 'img/londres/londres10.jpg', 'Activités sportives + visite de Londres'),
(22, 'Parcours sportif à Londres', 'parcours sportif', 'Angleterre', 'img/drapeau_angleterre.png', '11-14 ans', 'Du 23 mars au 3 avril', 'Si vous êtes passionnés de sport et que vous adoré vous dépenser, ce séjour est celui qui vous correspond car il vous permettra d’associer votre passion pour le sport à l’apprentissage de l’anglais. En effet, en plus des cours d’anglais dispensé le matin, vos cours de sports tel que le foot, le basket, le tennis ou encore le tir à l’arc seront eux aussi enseignés en anglais afin de vous faire progresser le plus rapidement possible. ', 1030, ' une résidence au cœur de la capitale.', 'img/londres/londres7.jpeg', 'img/londres/londres1.webp', 'img/londres/londres8.png', 'img/londres/londres9.png', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-31 15:20:50', 'vacances_ete', 'img/londres/londres11.jpg', 'Activités sportives + visite de Londres'),
(23, 'Parcours artistique à Londres', 'parcours artistique', 'Angleterre', 'img/drapeau_angleterre.png', '11-14 ans', 'Du 24 octobre au 31 octobre', 'Passionné de danse, de musique ou de théâtre ?  Ce séjour est celui qui vous correspond car il vous permettra d’associer votre passion à l’apprentissage de l’anglais. En effet, en plus des cours d’anglais dispensé le matin, vos cours de danse, de théâtre ou de musique seront eux aussi enseigné en anglais afin de vous faire progresser le plus rapidement possible.', 750, ' une résidence au cœur de la capitale.', 'img/londres/londres7.jpeg', 'img/londres/londres10.jpg', 'img/londres/londres12.jpg', 'img/londres/londres13.png', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-06 15:16:14', 'vacances_toussaint', 'img/londres/londres14.jpg', 'Activités artistiques + visite de Londres'),
(24, 'Parcours artistique à Londres', 'parcours artistique', 'Angleterre', 'img/drapeau_angleterre.png', '7-10 ans', 'Du 13 juillet au 28 août', 'Passionné de danse, de musique ou de théâtre ?  Ce séjour est celui qui vous correspond car il vous permettra d’associer votre passion à l’apprentissage de l’anglais. En effet, en plus des cours d’anglais dispensé le matin, vos cours de danse, de théâtre ou de musique seront eux aussi enseigné en anglais afin de vous faire progresser le plus rapidement possible.', 1200, ' une résidence au cœur de la capitale.', 'img/londres/londres7.jpeg', 'img/londres/londres10.jpg', 'img/londres/londres12.jpg', 'img/londres/londres13.png', 'Activités de loisirs sur le campus tel que du foot, volley, basket, natation et plein d\'autres sports.', 'Visite royale à Buckingham palace puis autour de Westminster. Entendez sonnez Big Ben puis marchez sur le mythique Tower Bridge. Enfin, promenez vous dans le quartier de Soho et rendez vous à Picadilly Circus toujours très animée. Enfin, entrez dans les magasin de Leg store, Hamleys ou encore m&m\'s ', 'Welcome party, Casino night, international party, barbecue géant, soirée cinéma', '2023-05-31 15:22:32', 'vacances_ete', 'img/londres/londres15.jpg', 'Activités artistiques + visite de Londres');

-- --------------------------------------------------------

--
-- Structure de la table `rel_resa_dest`
--

CREATE TABLE `rel_resa_dest` (
  `id` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  `id_destination` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `rel_resa_dest`
--

INSERT INTO `rel_resa_dest` (`id`, `id_reservation`, `id_destination`) VALUES
(1, 15, 2),
(2, 15, 1),
(3, 18, 2),
(4, 19, 2),
(5, 20, 2),
(6, 21, 1),
(7, 21, 7),
(8, 22, 2),
(9, 23, 3),
(10, 24, 2),
(11, 25, 2),
(12, 25, 8),
(13, 26, 18),
(14, 27, 22),
(15, 28, 22),
(16, 29, 21),
(17, 30, 2),
(18, 31, 2),
(19, 32, 4),
(20, 33, 21),
(21, 34, 20),
(22, 35, 24),
(23, 36, 4),
(24, 37, 2),
(25, 38, 8),
(26, 39, 5),
(27, 40, 7),
(28, 41, 17),
(29, 42, 5),
(30, 43, 3),
(31, 44, 15),
(32, 45, 4),
(33, 45, 14),
(34, 46, 2),
(35, 47, 3),
(36, 47, 6),
(37, 48, 2),
(38, 48, 7),
(39, 49, 2),
(40, 49, 12),
(41, 50, 8),
(42, 50, 14),
(43, 51, 11),
(44, 51, 7);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `code_resa` varchar(5) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `nb_voyageurs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `code_resa`, `mail`, `nom`, `prenom`, `tel`, `nb_voyageurs`) VALUES
(1, 'FY6K0', 'leoplanus29@gmail.com', 'michel', 'hubert', '0612345678', 3),
(22, 'XEZI2', 'anais.michel2004@gmail.com', 'MICHEL', 'Anaïs', '0612345678', 2),
(21, 'WBX87', 'anais.mi@orange.fr', 'MICHEL', 'Anaïs', '0612345678', 4),
(20, 'IQ5XV', 'anais.mi@orange.fr', 'ionos', 'prenom', '0612345678', 1),
(19, 'F1S69', 'anais.mi@orange.fr', 'ionos', 'prenom', '0612345678', 1),
(18, 'HVF74', 'anais.mi@orange.fr', 'ionos', 'fr-uhc', '0612345678', 2),
(17, 'GDBD3', 'anais.mi@orange.fr', 'ionos', 'fr-uhc', '0612345678', 4),
(16, '966KG', 'anais.mi@orange.fr', 'ionos', 'fr-uhc', '0612345678', 2),
(15, '2205O', 'anais.mi@orange.fr', 'gandi', 'prenom', '0612345678', 2),
(14, 'MRBZW', 'anais.mi@orange.fr', 'gandi', 'prenom', '0612345678', 2),
(23, 'KWXYV', 'anais.mi@orange.fr', 'ionos', 'Anaïs', '0612345678', 2),
(24, 'M7SFT', 'anais.mi@orange.fr', 'ionos', 'fr-uhc', '0612345678', 2),
(43, '32HPS', 'anais.mi@orange.fr', 'HOLA', 'Hello', '0612345678', 4),
(44, 'EMIV3', 'anais.michel2004@gmail.com', 'BERTRAND ', 'Bernard', '0695763393', 2),
(51, 'IL7YP', 'anais.michel2004@gmail.com', 'MICHEL', 'Hello', '0612345678', 1),
(45, 'DB09I', 'anais.michel2004@gmail.com', 'MICHEL', 'Anaïs', '0612345678', 1),
(46, 'KUG8V', 'anais.mi@orange.fr', 'MICHEL', 'Anaïs', '0612345678', 1),
(47, 'RUE1U', 'anais.mi@orange.fr', 'MICHEL', 'Anaïs', '0612345678', 2),
(48, '8FAG8', 'vyeyhbrte@gmail.com', 'MICHEL', 'Anaïs', '0612345678', 1),
(49, 'EYEAI', 'anais.michel2004@gmail.com', 'HOLA', 'Hello', '0612345678', 1),
(50, 'R6TLI', 'anais.michel2004@gmail.com', 'BONJOUR', 'Hello', '0612345678', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rel_resa_dest`
--
ALTER TABLE `rel_resa_dest`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `rel_resa_dest`
--
ALTER TABLE `rel_resa_dest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
