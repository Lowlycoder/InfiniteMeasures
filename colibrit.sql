--
-- Database: `colibrit`
--
-- DROP DATABASE IF EXISTS `colibrit`;
CREATE DATABASE IF NOT EXISTS `colibrit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `colibrit`;

--
-- Table structure for table `admin`
--
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordHash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Table structure for table `boitier`
--
DROP TABLE IF EXISTS `boitier`;
CREATE TABLE IF NOT EXISTS `boitier` (
  `idBoitier` int NOT NULL AUTO_INCREMENT,
  `User_idUser` int NOT NULL,
  PRIMARY KEY (`idBoitier`,`User_idUser`),
  KEY `fk_boitier_User1_idx` (`User_idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Table structure for table `capteur`
--
DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `idCapteur` int NOT NULL AUTO_INCREMENT,
  `minUser` int DEFAULT NULL,
  `maxUser` int DEFAULT NULL,
  `typeCapteur_idTypeCapteur` int NOT NULL,
  `boitier_idBoitier` int NOT NULL,
  PRIMARY KEY (`idCapteur`,`typeCapteur_idTypeCapteur`,`boitier_idBoitier`),
  KEY `fk_capteur_typeCapteur1_idx` (`typeCapteur_idTypeCapteur`),
  KEY `fk_capteur_boitier1_idx` (`boitier_idBoitier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Table structure for table `data`
--
DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `idData` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `value` int NOT NULL,
  `capteur_idCapteur` int NOT NULL,
  PRIMARY KEY (`idData`,`capteur_idCapteur`),
  KEY `fk_data_capteur1_idx` (`capteur_idCapteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Table structure for table `faq`
--
DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `idFAQ` int NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` varchar(255) NOT NULL,
  PRIMARY KEY (`idFAQ`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Table structure for table `typecapteur`
--
DROP TABLE IF EXISTS `typecapteur`;
CREATE TABLE IF NOT EXISTS `typecapteur` (
  `idTypeCapteur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max` int DEFAULT NULL,
  `min` int DEFAULT NULL,
  PRIMARY KEY (`idTypeCapteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Table structure for table `user`
--
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordHash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `lastConnection` datetime NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Constraints for table `boitier`
--
ALTER TABLE `boitier`
  ADD CONSTRAINT `fk_boitier_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `fk_capteur_boitier` FOREIGN KEY (`boitier_idBoitier`) REFERENCES `boitier` (`idBoitier`),
  ADD CONSTRAINT `fk_capteur_typeCapteur` FOREIGN KEY (`typeCapteur_idTypeCapteur`) REFERENCES `typecapteur` (`idTypeCapteur`);

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `fk_data_capteur` FOREIGN KEY (`capteur_idCapteur`) REFERENCES `capteur` (`idCapteur`);
COMMIT;

INSERT INTO `admin` (nom, prenom, email, passwordHash) VALUES ('Super', 'Admin', 'admin@example.com', 'password')

-- ALTER TABLE `user` ADD COLUMN banned tinyint(1) NOT NULL DEFAULT 0 AFTER passwordHash;
-- ALTER TABLE `faq` CHANGE `reponse` `reponse` VARCHAR(255) NOT NULL;