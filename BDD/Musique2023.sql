-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour projetuha
CREATE DATABASE IF NOT EXISTS `projetuha` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projetuha`;

-- Listage de la structure de table projetuha. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `articles_id` int NOT NULL AUTO_INCREMENT,
  `libellé` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `sellprice` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `provider_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`articles_id`),
  KEY `FK_articles_provider` (`provider_id`),
  KEY `FK_articles_category` (`category_id`),
  CONSTRAINT `FK_articles_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`Instruments_id`),
  CONSTRAINT `FK_articles_provider` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`id_provider`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table projetuha.articles : ~12 rows (environ)
REPLACE INTO `articles` (`articles_id`, `libellé`, `img`, `stock`, `sellprice`, `provider_id`, `category_id`) VALUES
	(1, 'PIANO SU 118C', 'SU118C.jpg', 5, '18 070', 1, 1),
	(2, 'Wood Bongo WB200NT-G', 'WB200NT.jpg', 650, '178', 4, 3),
	(3, 'PIANO de concert C7X', 'C7X_séries.jpg', 4, '67 270', 1, 2),
	(4, 'Trombone REF 331 - 3 pistons Ut et Sib Verni', 'Trombone_R331.jpg', 2, '2 405', 2, 1),
	(5, 'Cornet Professionnel REF 22 Verni', 'Cornet_REF22.jpg', 4, '2 095', 2, 1),
	(6, 'Cor Alto REF 381 - Fa et Mib Argenté', 'Cor_alto_argente.jpg', 4, '2 910', 2, 1),
	(7, 'Baryton Sib REF 184- 3 pistons Verni', 'Baryton_184_verni.jpg', 8, '3 110', 2, 1),
	(8, 'Basse Sib REF 203 - 4 pistons Vernie', 'saxhorn_ref203_vernie.jpg', 7, '3 540', 2, 1),
	(9, 'Euphonium français', 'euphonium211.jpg', 2, '4 015', 2, 1),
	(10, 'Clairon Sib REF 390 Prestige Poli non verni', 'clairon_sib_ref-390-verni.jpg', 2, '650', 2, 1),
	(11, 'Trompette de Cavalerie Mib REF 430 Prestige Polie non vernie', 'Cavalerie_REF_430.jpg', 30, '759', 2, 1),
	(12, '\'Clairon Basse Sib REF 407 Tradition - Verni', 'Clairon_basse_sib_trad407.jpg', 30, '1 088', 2, 1);

-- Listage de la structure de table projetuha. category
CREATE TABLE IF NOT EXISTS `category` (
  `Instruments_id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`Instruments_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table projetuha.category : ~0 rows (environ)
REPLACE INTO `category` (`Instruments_id`, `libelle`) VALUES
	(1, 'Instruments à vent'),
	(2, 'Instruments à Cordes'),
	(3, 'Instruments à Percussions');

-- Listage de la structure de table projetuha. provider
CREATE TABLE IF NOT EXISTS `provider` (
  `id_provider` int NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `adresse` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `cp` char(50) DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_provider`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table projetuha.provider : ~0 rows (environ)
REPLACE INTO `provider` (`id_provider`, `provider_name`, `adresse`, `cp`, `city`) VALUES
	(1, 'Yamaha', '5 rue Ambroise Croizat', '77183', 'Croissy Beaubourg'),
	(2, 'PGM Couesnon', '3 avenue Ernest Couvrecelle', '02400', 'Etampes sur Marne'),
	(3, 'Paul beucher', '27-29 Boulevard Beaumarchais', '75004', 'Paris'),
	(4, 'Meinl Percussion', 'Am Bahnhof 2', '91468', 'Gutenstetten(Allemange)');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
