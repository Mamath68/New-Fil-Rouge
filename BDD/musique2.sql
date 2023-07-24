-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 08 juil. 2023 à 07:11
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET TIME_ZONE = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `musique`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `ARTICLES`;

CREATE TABLE IF NOT EXISTS `ARTICLES` (
  `ARTICLES_ID` INT NOT NULL AUTO_INCREMENT,
  `ARTICLES_PROID` INT NOT NULL,
  `ARTICLES_LIB` VARCHAR(255) NOT NULL,
  `ARTICLES_IMG` VARCHAR(255) DEFAULT NULL,
  `ARTICLES_STOCK` INT NOT NULL,
  `ARTICLES_SELLPRICE` VARCHAR(255) NOT NULL,
  `ARTICLES_CAT` INT NOT NULL,
  PRIMARY KEY (`ARTICLES_ID`),
  KEY `ARTICLES_PROID` (`ARTICLES_PROID`),
  KEY `ARTICLE_CAT` (`ARTICLES_CAT`),
  KEY `ARTICLES_CAT` (`ARTICLES_CAT`)
) ENGINE=INNODB AUTO_INCREMENT=143 DEFAULT CHARSET=UTF8MB3;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `ARTICLES` (
  `ARTICLES_ID`,
  `ARTICLES_PROID`,
  `ARTICLES_LIB`,
  `ARTICLES_IMG`,
  `ARTICLES_STOCK`,
  `ARTICLES_SELLPRICE`,
  `ARTICLES_CAT`
) VALUES (
  71,
  103,
  'PIANO SU 118C',
  'SU118C.jpg',
  5,
  '18 070',
  2
),
(
  72,
  107,
  'Cornet Professionnel REF 22 Verni',
  'Cornet_REF22.jpg',
  4,
  '2 095',
  1
),
(
  73,
  107,
  'Trombone REF 331 - 3 pistons Ut et Sib Verni',
  'Trombone_R331.jpg',
  2,
  '2 405',
  1
),
(
  74,
  107,
  'Cor Alto REF 381 - Fa et Mib Argenté',
  'Cor_alto_argente.JPG',
  4,
  '2 910',
  1
),
(
  75,
  107,
  'Baryton Sib REF 184- 3 pistons Verni',
  'Baryton_184_verni.JPG',
  8,
  '3 110',
  1
),
(
  76,
  107,
  'Basse Sib REF 203 - 4 pistons Vernie',
  'saxhorn_ref203_vernie.jpg',
  7,
  '3 540',
  1
),
(
  77,
  107,
  'Euphonium français',
  'euphonium211.JPG',
  2,
  '4 015',
  1
),
(
  78,
  107,
  'Clairon Sib REF 390 Prestige Poli non verni',
  'clairon_sib_ref-390-verni.jpg',
  2,
  '650',
  1
),
(
  79,
  107,
  'Trompette de Cavalerie Mib REF 430 Prestige Polie non vernie',
  'Cavalerie_REF_430.JPG',
  30,
  '759',
  1
),
(
  80,
  107,
  'Clairon Basse Sib REF 407 Tradition - Verni',
  'Clairon_basse_sib_trad407.jpg',
  30,
  '1 088',
  1
),
(
  81,
  107,
  'Trompette Basse Mib REF 436 Prestige - Polie non vernie',
  'Basse_Mib_REF436_Prestige.JPG',
  10,
  '1 595',
  1
),
(
  82,
  107,
  'Trompette Cor Mib REF 447 Tradition - Vernie',
  'trompette_cor_ref447.JPG',
  20,
  '950',
  1
),
(
  83,
  107,
  'Cor Mib REF 469 Tradition - Verni',
  'cor_mib_469_verni.jpg',
  60,
  '950',
  1
),
(
  84,
  107,
  'Cor simple REF 360 avec tons modulables verni petite perce',
  'Cor_simple_REF360.JPG',
  10,
  '2 850',
  1
),
(
  85,
  111,
  'Wood Bongo WB200NT-G',
  'WB200NT.jpg',
  650,
  '178',
  3
),
(
  86,
  111,
  'Rawhide Maracas, Traditional - MSM3',
  'Rawhide_maracas_MSM3.jpg',
  10,
  '59',
  3
),
(
  87,
  103,
  'Flûte Traversière YFL 894W',
  'YFL-894W.jpg',
  10,
  '14 938',
  1
),
(
  91,
  111,
  'Benny Greb Hi-Hat Tambourine',
  'HTHHBG.jpg',
  5,
  '37',
  3
),
(
  92,
  103,
  'SAXOPHONE Série YDS\r\nYDS-260',
  'YDS-150.jpg',
  10,
  '1 001',
  1
),
(
  93,
  111,
  'FD20SD Sea Drum',
  'FD20SD.jpg',
  30,
  '122',
  3
),
(
  97,
  111,
  'Solid Kalimba, Natural, Small - KA5-S',
  'KA5-S.jpg',
  10,
  '23',
  3
),
(
  99,
  103,
  'PIANO A QUEUE C3 STUDIO',
  'C3-studio.jpg',
  15,
  '32 034',
  2
),
(
  105,
  111,
  '13\" & 14\" Timbale, Chrome - HT1314CH',
  'HT1314CH.jpg',
  5,
  '325',
  3
),
(
  108,
  103,
  'Flûte Traversière Basse - YFL B441',
  'YFL-B441.jpg',
  10,
  '10 259',
  1
),
(
  118,
  111,
  'Finger Castanet, Traditional - FC1',
  'FC1.jpg',
  5,
  '24',
  3
),
(
  119,
  103,
  'Piccolos YPC-81 (Fait Main)',
  'YPC-81.jpg',
  5,
  '4 073',
  1
),
(
  120,
  103,
  'PIANO de concert C7X',
  'C7X_séries.jpg',
  4,
  '67 270',
  2
),
(
  121,
  103,
  'Flûtte Soprano YRS-61',
  'YRS_61.jpg',
  1,
  '350',
  1
),
(
  129,
  111,
  'HDJ4-M Nile Djembe 10\"',
  'HDJ4-M.jpg',
  20,
  '118',
  3
),
(
  131,
  108,
  'Mandoline Plate GEWA 505395',
  'Gewa_505395.jpg',
  10,
  '216',
  2
),
(
  133,
  108,
  'GUITARE CLASSIQUE ALHAMBRA 9P',
  'ALHAMBRA_9P.jpg',
  8,
  '1 770',
  2
),
(
  134,
  103,
  'PIANO DE CONCERT S3X',
  'S3X.jpg',
  3,
  '55 571',
  2
),
(
  136,
  111,
  'CTA2M-BK Compact Tambourine',
  'CTA2M-BK.jpg',
  10,
  '40',
  3
),
(
  137,
  111,
  'SUB20AB-M 20\" Bahia Surdo Wood',
  'SUB22AB_M.jpg',
  15,
  '370',
  3
),
(
  138,
  111,
  'MP1212 Professional Series-NT',
  'MP1212NT.jpg',
  20,
  '500',
  3
),
(
  139,
  108,
  'VIOLON 4/4 SEBIM MODELE GUANERI VI 01',
  'violon_sebim_guaneriVI.jpg',
  5,
  '1 200',
  2
),
(
  140,
  108,
  'Violon Alto Stentor Conservatoire A1551-405',
  'Alto_Stentor_Conservatoire_A1551-405.jpg',
  10,
  '450',
  2
),
(
  141,
  108,
  'Violoncelle Acoustique Sebim (CE 04)',
  'violoncelle_sebim.jpg',
  20,
  '2 000',
  2
),
(
  142,
  108,
  'Contrebasse Acoustique 3/4 Stentor B1950-3',
  'contrebasse-stentor.jpg',
  6,
  '1 300',
  2
);

-- --------------------------------------------------------

--
-- Structure de la table `provider`
--

DROP TABLE IF EXISTS `PROVIDER`;

CREATE TABLE IF NOT EXISTS `PROVIDER` (
  `PROVIDER_ID` INT NOT NULL AUTO_INCREMENT,
  `PROVIDER_NAME` VARCHAR(255) NOT NULL,
  `PROVIDER_ADDRESS` TEXT NOT NULL,
  `PROVIDER_CP` CHAR(5) NOT NULL,
  `PROVIDER_CITY` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`PROVIDER_ID`)
) ENGINE=INNODB AUTO_INCREMENT=112 DEFAULT CHARSET=UTF8MB3;

--
-- Déchargement des données de la table `provider`
--

INSERT INTO `PROVIDER` (
  `PROVIDER_ID`,
  `PROVIDER_NAME`,
  `PROVIDER_ADDRESS`,
  `PROVIDER_CP`,
  `PROVIDER_CITY`
) VALUES (
  103,
  'Yamaha',
  '5 rue Ambroise Croizat',
  '77183',
  'Croissy Beaubourg'
),
(
  107,
  'PGM Couesnon',
  '3 avenue Ernest Couvrecelle',
  '02400',
  'Etampes sur Marne'
),
(
  108,
  'Paul beucher',
  '27-29 Boulevard Beaumarchais',
  '75004',
  'Paris'
),
(
  111,
  'Meinl Percussion',
  'Am Bahnhof 2',
  '91468',
  'Gutenstetten (Allemagne)'
);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `ARTICLES` ADD CONSTRAINT `ARTICLES_IBFK_1` FOREIGN KEY (`ARTICLES_PROID`) REFERENCES `PROVIDER` (`PROVIDER_ID`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;