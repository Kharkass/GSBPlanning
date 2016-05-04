-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.9 - MySQL Community Server (GPL)
-- Serveur OS:                   Win64
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour gsb
CREATE DATABASE IF NOT EXISTS `gsb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gsb`;


-- Export de la structure de table gsb. compteur
CREATE TABLE IF NOT EXISTS `compteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Client` int(11) NOT NULL,
  `nombre` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_compteur_personnel` (`id_Client`),
  CONSTRAINT `FK_compteur_personnel` FOREIGN KEY (`id_Client`) REFERENCES `personnel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.compteur: ~10 rows (environ)
/*!40000 ALTER TABLE `compteur` DISABLE KEYS */;
INSERT INTO `compteur` (`id`, `id_Client`, `nombre`) VALUES
	(1, 1, 2),
	(6, 5, 0),
	(7, 7, 0),
	(8, 8, 0),
	(9, 9, 0),
	(10, 10, 0),
	(11, 11, 0),
	(12, 13, 0),
	(13, 14, 0),
	(14, 12, 0);
/*!40000 ALTER TABLE `compteur` ENABLE KEYS */;


-- Export de la structure de table gsb. convoquer
CREATE TABLE IF NOT EXISTS `convoquer` (
  `id` int(11) NOT NULL,
  `id_e` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_e`),
  KEY `FK_convoquer_id_e` (`id_e`),
  CONSTRAINT `FK_convoquer_id` FOREIGN KEY (`id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `FK_convoquer_id_e` FOREIGN KEY (`id_e`) REFERENCES `evenement` (`id_e`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.convoquer: ~24 rows (environ)
/*!40000 ALTER TABLE `convoquer` DISABLE KEYS */;
INSERT INTO `convoquer` (`id`, `id_e`) VALUES
	(1, 24),
	(5, 24),
	(7, 24),
	(8, 24),
	(9, 24),
	(10, 24),
	(11, 24),
	(1, 25),
	(5, 25),
	(7, 25),
	(8, 25),
	(9, 25),
	(10, 25),
	(11, 25),
	(1, 26),
	(5, 26),
	(7, 26),
	(8, 26),
	(9, 26),
	(10, 26),
	(11, 26),
	(12, 26),
	(13, 26),
	(14, 26);
/*!40000 ALTER TABLE `convoquer` ENABLE KEYS */;


-- Export de la structure de table gsb. document
CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(100) DEFAULT NULL,
  `id_e` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_docuement_id_e` (`id_e`),
  CONSTRAINT `FK_docuement_id_e` FOREIGN KEY (`id_e`) REFERENCES `evenement` (`id_e`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.document: ~0 rows (environ)
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
/*!40000 ALTER TABLE `document` ENABLE KEYS */;


-- Export de la structure de table gsb. evenement
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_e` int(11) NOT NULL AUTO_INCREMENT,
  `date_e` date DEFAULT NULL,
  `libelle_e` varchar(200) DEFAULT NULL,
  `heure_e` varchar(25) DEFAULT NULL,
  `duree` varchar(25) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `id_Type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_e`),
  KEY `FK_Evenement_id` (`id`),
  KEY `FK_Evenement_id_Type` (`id_Type`),
  CONSTRAINT `FK_Evenement_id` FOREIGN KEY (`id`) REFERENCES `personnel` (`id`),
  CONSTRAINT `FK_Evenement_id_Type` FOREIGN KEY (`id_Type`) REFERENCES `type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.evenement: ~3 rows (environ)
/*!40000 ALTER TABLE `evenement` DISABLE KEYS */;
INSERT INTO `evenement` (`id_e`, `date_e`, `libelle_e`, `heure_e`, `duree`, `id`, `id_Type`) VALUES
	(24, '2016-07-12', 'Information', '14h00', '1 heure', 1, 1),
	(25, '2016-07-13', 'Échange', '14h00', '3 heures', 1, 1),
	(26, '2016-07-01', 'Organisation Planning', '10h00', '1 heure', 1, 2);
/*!40000 ALTER TABLE `evenement` ENABLE KEYS */;


-- Export de la structure de table gsb. personnel
CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `id_Service` int(11) DEFAULT NULL,
  `id_Service_1` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT 'http://www.jeuxdecartes.net/intelligence/api/avatar/a/large',
  PRIMARY KEY (`id`),
  KEY `FK_Personnel_id_Service` (`id_Service`),
  KEY `FK_Personnel_id_Service_1` (`id_Service_1`),
  CONSTRAINT `FK_Personnel_id_Service` FOREIGN KEY (`id_Service`) REFERENCES `service` (`id`),
  CONSTRAINT `FK_Personnel_id_Service_1` FOREIGN KEY (`id_Service_1`) REFERENCES `service` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.personnel: ~10 rows (environ)
/*!40000 ALTER TABLE `personnel` DISABLE KEYS */;
INSERT INTO `personnel` (`id`, `Nom`, `Prenom`, `Mail`, `mdp`, `id_Service`, `id_Service_1`, `image`) VALUES
	(1, 'Pierre', 'Hubert', 'hubert@gmail.com', '123', 1, 1, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(5, 'Mathieu', 'Loic', 'loic.mathieuu@gmail.com', '123', 1, 1, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(7, 'Locatelli', 'Jordan', 'locat22@hotmail.fr', '123', 1, 1, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(8, 'Moyne', 'Philipe', 'pmoyne@poil.fr', '123', 2, 2, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(9, 'Varennes', 'Jonathan', 'jvarennes@euhmail.com', '123', 1, 1, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(10, 'Letang', 'Brandon', 'bletang@email.fr', '123', 2, 2, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(11, 'Aubertot', 'Louis', 'aaubertot@email.fr', '123', 2, 2, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(12, 'Messein', 'Rémi', 'rmessein@email.fr', '123', 2, 2, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(13, 'Naïr', 'Nordine', 'nnair@email.fr', '123', 2, 2, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg'),
	(14, 'Grisolet', 'Lucas', 'lgrisolet@email.fr', '123', 2, 2, 'http://pvtistes.net/wp-content/themes/pvtistes/images/profile/forum-default-180.jpg');
/*!40000 ALTER TABLE `personnel` ENABLE KEYS */;


-- Export de la structure de table gsb. service
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_service` varchar(50) DEFAULT NULL,
  `id_Personnel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Service_id_Personnel` (`id_Personnel`),
  CONSTRAINT `FK_Service_id_Personnel` FOREIGN KEY (`id_Personnel`) REFERENCES `personnel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.service: ~0 rows (environ)
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` (`id`, `Nom_service`, `id_Personnel`) VALUES
	(1, 'Admin', 1),
	(2, 'Emp', 1);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;


-- Export de la structure de table gsb. type
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table gsb.type: ~0 rows (environ)
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`id`, `libelle`) VALUES
	(1, 'Réunion'),
	(2, 'Management');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;


-- Export de la structure de déclancheur gsb. personnel_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `personnel_after_insert` AFTER INSERT ON `personnel` FOR EACH ROW BEGIN
	DECLARE i int;
	SET i = (SELECT personnel.id FROM personnel WHERE personnel.id = new.id);
	INSERT INTO compteur (id_Client) values (i);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Export de la structure de déclancheur gsb. personnel_before_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `personnel_before_delete` BEFORE DELETE ON `personnel` FOR EACH ROW BEGIN
 	DECLARE i int;
	SET i = (SELECT personnel.id FROM personnel WHERE personnel.id = old.id);
	DELETE FROM compteur WHERE id_Client = i;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Export de la structure de déclancheur gsb. T_BEFORE_DELETE_EVENEMENT
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_ALL_TABLES,NO_AUTO_CREATE_USER';
DELIMITER //
CREATE TRIGGER `T_BEFORE_DELETE_EVENEMENT` BEFORE DELETE ON `evenement` FOR EACH ROW BEGIN
	DECLARE i int;
	SET i = (SELECT evenement.id_e FROM evenement WHERE evenement.id_e = old.id_e);
	DELETE FROM convoquer WHERE id_e = i;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
